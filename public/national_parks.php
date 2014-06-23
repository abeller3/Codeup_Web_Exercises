<?php

function getOffset() {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    return ($page - 1) * 4;
}

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'amanda', 'mysecretpassword');
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT * FROM national_parks LIMIT 4 OFFSET ' . getOffset();
$parks = $dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);

$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

$numPages = ceil($count / 4);

$page= isset($_GET['page']) ? $_GET['page'] : 1;
$nextPge = $page + 1;
$prevPge = $page - 1;


?>
<!DOCTYPE html>
<html>
<head>

    <title>National Parks</title>
    <style>
    	.purple {
    		color:purple;
    		background-color: pink;
    	}
    	.brown {
    		color:white;
    		background-color: brown;
    	}

    </style>

</head>
<body>
    <span>
        <h1 class='purple'>National Parks</h1>
    </span>

        <table border="1";>
            <tr>
                <th class='purple'>Name</th>
                <th class='brown'>State</th>
                <th class='purple'>Date Established</th>
                <th class='brown'>Area in Acres</th>
            </tr>

            <?php foreach ($parks as $park): ?>
                <tr>
                    <td class='purple'><?= $park['name']; ?></td>
                    <td class='brown'><?= $park['location']; ?></td>
                    <td class='purple'><?= $park['date_established']; ?></td>
                    <td class='brown'><?= $park['area_in_acres']; ?></td>
                </tr>
            <? endforeach ?>
        </table>
        <ul>
        	<? if ($page == 1): ?>
        		<li>
          		<a href="">&larr; Previous</a>
          		</li>
    	<? else: ?>
    		<li>
    			<a href="?page=<?= $prevPge; ?>">&larr; Previous</a>
    		</li>
    	<? endif; ?>
          <li>
          	<a href="?page=<?= $nextPge; ?>">Next &rarr;</a>
          </li>
          
        </ul>
    
</body>
</html>
