<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voting Results</title>
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

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #FF6600;
    color: #fff;
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
?>

<div class="container">
    <div class="card">
        <center><h3>Voting So Far</h3></center>
        <?php
        include "connection.php";
        $member = mysqli_query($con, 'SELECT * FROM languages' );
        if (mysqli_num_rows($member)== 0 ) {
            echo '<p><font color="red">No results found</font></p>';
        }
        else {
            echo '<div class="table-container">';
            echo '<table>';
            echo '<tr>
                    <th>ID</th>
                    <th>LANGUAGE</th>
                    <th>ABOUT</th>
                    <th>VOTE</th>
                  </tr>';
            while($mb=mysqli_fetch_object($member)) {  
                $id=$mb->lan_id;
                $name=$mb->fullname;
                $about=$mb->about;
                $vote=$mb->votecount;
                echo '<tr>';
                echo '<td>'.$id.'</td>';       
                echo '<td>'.$name.'</td>';
                echo '<td>'.$about.'</td>';
                echo '<td>'.$vote.'</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
        }
        ?>
    </div>
</div>



</body>
</html>
