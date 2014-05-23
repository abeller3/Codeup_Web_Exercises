<?php
var_dump($_GET);
var_dump($_POST);
?>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder= "username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="password">
    </p>
    <p>
        <!-- <input type="submit" value="Oh YEAH!!!"> -->
        <button type="submit">Login</button>

    </p>
</form>
</body>
</html>
