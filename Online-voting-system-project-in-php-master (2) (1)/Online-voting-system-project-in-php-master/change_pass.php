<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Password</title>
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

.error {
    color: red;
}

form {
    margin-top: 20px;
}

input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>

<div class="container">
    <center><h3>Change Password</h3></center>
    
    <h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
    <?php global $error; echo $error;?>                  
    
    <form action="change_pass_action.php" method="post" id="myform">
        <div class="center">
            Current Password :
            <input type="password" name="cpassword" value="">
            <br><br>
            New Password:
            <input type="password" name="npassword" value="">
            <br><br>
            Confirm New Password:
            <input type="password" name="cnpassword" value="">
            <br><br>
            <input type="submit" name="cpass" value="UPDATE">
        </div>
    </form>
</div>

<script type="text/javascript">
    var frmvalidator = new Validator("myform"); 
    frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
    frmvalidator.addValidation("cpassword","maxlen=50");
    frmvalidator.addValidation("npassword","req","Please enter New Password"); 
    frmvalidator.addValidation("npassword","maxlen=50");
    frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
    frmvalidator.addValidation("cnpassword","maxlen=50");
</script>



</body>
</html>
