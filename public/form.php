<?php
var_dump($_GET);
var_dump($_POST);
?>
<html>
<head>
	<title></title>
</head>
<body>
    <h2>User Login</h2>
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
        <label for="body">Post Body</label>
        <textarea name="post_body" rows="5" cols="60"></textarea>
    </p>



    <p>
        <!-- <input type="submit" value="Oh YEAH!!!"> -->
        <button type="submit">Login</button>
    </p>
<h2>Compose an Email</h2>
<form method="POST">
    <p>
        <label for="To">To: </label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="From">From: </label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="Subject">Subject: </label>
        <input id="Subject" name="Subject" type="text">
    </p>
    <p>
        <label for="body">Email</label>
        <textarea name="post_body" rows="5" cols="50"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>    
</form>
</body>
</html>
