<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
<style>
/* CSS for styling */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('https://www.devon.gov.uk/news/wp-content/uploads/sites/146/2023/04/voting-ballot-box.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed; /* Keeps the background image fixed */
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow for a subtle effect */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.center {
    text-align: center;
}

.right {
    text-align: right;
}

.login-button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.login-button:hover {
    background-color: #45a049; /* Darker shade of green on hover */
}
</style>
</head>
<body>

<?php include "header.php"; ?>
<?php
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
    header("Location: voter.php");
}
?>
<?php global $msg; echo $msg; ?>

<div class="container">
    <center>
        <legend><font color='#008000' size='6'>This system allows all registered users to vote for their favorite POLITICAL PARTY.</font></legend>
        <font color='#008000' size='5'>In order to make a vote you have to register first and then login.</font>
    </center>
    <br>
    <div>
        <a href="login.php" class="login-button">Login</a>
    </div>
</div>

</body>
</html>
