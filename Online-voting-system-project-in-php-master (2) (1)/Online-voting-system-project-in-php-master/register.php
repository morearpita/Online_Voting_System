<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
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
        <legend><h3>Register</h3></legend>
    </center>
    <?php global $nam; echo $nam; ?> 
    <?php global $error; echo $error; ?>
    <form action= "reg_action.php" method= "post" id="myform" >
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" id="firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" id="lastname" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
        </div>
        <button type="submit" name="submit" class="submit-button">Next</button>
    </form>
</div>

<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter your firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter your lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter your username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter your password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>



</body>
</html>
