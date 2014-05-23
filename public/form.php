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

<form method="POST">
    <h2>Compose an Email</h2>
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
          <label>Do you want to save a copy to their sent folder?</label>
    <label for"signup" type="checkbox" value="yes">
    <input id="signup" name="signup" type="checkbox" value="yes" checked>

    </p>
    
    
    <p>
       <h3>Multiple Choice Test</h3>
    </p>
    <p>
        Did you enjoy this form?
        <label>Yes<input type="radio" name="survey1" value="yes"></label>
        <label>No<input type="radio" name="survey1" value="no"></label>
    </p>
        Do you think this form should be longer?
        <label>Yes<input type="radio" name="surveyq2" value="yes"></label>
        <label>No<input type="radio" name="surveyq2" value="no"></label>
    <p>
        Do you think a reset button would improve this form?
        <label>Yes<input type="radio" name="survey3" value="yes"></label>
        <label>No<input type="radio" name="survey3" value="no"></label>
    </p>
    <p>
        Who is your favorite teacher at codeup?<br>
        <label>Ben<input id="signup" name="panda[]" type="checkbox" value="yes"></label><br>
        <label>Chris<input id="signup" name="panda[]" type="checkbox" value="yes"></label><br>
        <label>Jason<input id="signup" name="panda[]" type="checkbox" value="yes"></label><br>
        <label>Issac<input id="signup" name="panda[]" type="checkbox" value="yes"></label><br>
        <label>Omar<input id="signup" name="panda[]" type="checkbox" value="yes"></label><br>
    </p>

      <p>
        <input type="submit">
    </p> 
</label>
</form>
</body>
</html>
