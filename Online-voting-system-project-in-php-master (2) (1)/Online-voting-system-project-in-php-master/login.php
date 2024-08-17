<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login for Voting</title>
<style>
/* CSS for styling */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.center {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group input[type="text"],
.form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.submit-button:hover {
    background-color: #45a049;
}

@media screen and (max-width: 600px) {
    .container {
        width: 90%;
    }
}
</style>
</head>
<body>

<?php include "header.php"; ?>
<?php
if(!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
    header("Location: voter.php");
}
?>
<div class="container">
    <center>
        <legend><h3>Login for Voting</h3></legend>
    </center>
    <form action="login_action.php" method="post" id="myform">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" name="login" class="submit-button">Login</button>
    </form>
</div>

<script type="text/javascript"> 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username", "req", "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req", "Please Enter Password");
</script>


</body>
</html>
