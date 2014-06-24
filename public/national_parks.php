<?php
$limit = 4;

function getOffset() {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    return ($page - 1) * 4;
}


$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'amanda', 'mysecretpassword');
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', getOffset(), PDO::PARAM_INT);
$stmt->execute();


$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();


$numPages = ceil($count / 4);

$page= isset($_GET['page']) ? $_GET['page'] : 1;
$nextPge = $page + 1;
$prevPge = $page - 1;

if($_POST) {
    $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':Description', $_POST['Description'], PDO::PARAM_STR);
    $stmt->execute();
}




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
  
        <h1 class='purple'>National Parks</h1>
    

        <table border="1";>
            <tr>
                <th class='purple'>Name</th>
                <th class='brown'>State</th>
                <th class='purple'>Date Established</th>
                <th class='brown'>Area in Acres</th>
                <th class='purple'>Description</th>
            </tr>

            <?php foreach ($parks as $park): ?>
                <tr>
                    <td class='purple'><?= $park['name']; ?></td>
                    <td class='brown'><?= $park['location']; ?></td>
                    <td class='purple'><?= $park['date_established']; ?></td>
                    <td class='brown'><?= $park['area_in_acres']; ?></td>
                    <td class='purple'><?= $park['Description']; ?></td>
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

        <h1>Input Form for National Parks</h1>

<form action="#" method="POST">

    <p>
     <label for="name">Name: </label>
     <input name="name" id="name" type="text" placeholder="Required">
    </p>

     <p>
     <label for="location">Location: </label>
     <input id="location" name="location" type="text" placeholder="Required">
    </p>

     <p>
     <label for="date_established">Date Established: </label>
     <input id="date_established" name="date_established" type="text" placeholder="YYYY-MM-DD">
    </p>

     <p>
     <label for="area_in_acres">Area in Acres: </label>
     <input id="area_in_acres" name="area_in_acres" type="text" placeholder="Required">
    </p>
     <p>
     <label for="Description">Description: </label>
     <input id="Description" name="Description" type="text" placeholder="Required">
    </p>
     <input type="submit">
</form>
    
</body>
</html>
