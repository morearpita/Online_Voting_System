<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vote</title>
<style>
/* CSS for styling */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.center {
    text-align: center;
}

.vote-form {
    width: 80%;
    margin: 0 auto;
}

.vote-form input[type="radio"] {
    margin-right: 10px;
}

.card {
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.submit-button {
    height: 30px;
    width: 100px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth transition effect */
}

.submit-button:hover {
    background-color: #45a049; /* Darker shade of green on hover */
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
    <h4>Welcome <?php echo $_SESSION['SESS_NAME']; ?></h4>
    <h3>Make a Vote</h3>
    <div class="card">
        <form action="submit_vote.php" name="vote" method="post" class="vote-form">
            <center><font size='6'> What is your favorite political party?</font></center><br>
            <center>
                <input type="radio" name="lan" value="BJP">  BJP
                <input type="radio" name="lan" value="CONGRESS">CONGRESS
                <input type="radio" name="lan" value="AAP">   AAP
                <input type="radio" name="lan" value="NOTA">  NOTA
                <input type="radio" name="lan" value="NIRDLIY">  NIRDLIY
            </center><br>
            <?php global $msg; echo $msg; ?>
            <?php global $error; echo $error; ?>
            <center><input type="submit" value="Submit Vote" name="submit" class="submit-button" /></center>
        </form>
    </div>
</div>



</body>
</html>
