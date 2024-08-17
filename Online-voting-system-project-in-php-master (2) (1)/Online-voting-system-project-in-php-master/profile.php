<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
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
}

.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    padding: 20px;
}

.profile-info {
    text-align: center;
    margin-bottom: 20px;
}

.avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
}

@media screen and (max-width: 600px) {
    .container {
        width: 90%;
    }
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
include "connection.php";
?>

<div class="container">
    <div class="card">
        <div class="profile-info">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJGOf4LHaEK4O12esy12AP9RqM2_4xYPrV3TulR7pauRPdXkRpPpotEqOEHgSBWMvHAxc&usqp=CAU" alt="Avatar" class="avatar">
            <h4>Welcome <?php echo $_SESSION['SESS_NAME']; ?></h4>
        </div>
        <?php
        $username = $_SESSION['SESS_NAME'];
        $query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
        if ($result = mysqli_query($con,$query)) {
            if (mysqli_num_rows($result) > 0) {
                $sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
                $row = mysqli_fetch_assoc($sql);
                echo "You have voted for: " . " " . $row['voted'];
            } else {
                echo "You have not voted yet. Please submit your vote!";
            }
        }
        ?>
    </div>
</div>


</body>
</html>
