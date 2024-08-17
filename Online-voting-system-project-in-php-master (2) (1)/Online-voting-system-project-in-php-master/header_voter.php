<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <script src="jscript/validation.js" type="text/javascript"></script>
    <style>
        /* CSS for styling */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #EBE9E9;
        }

        .header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            overflow: hidden;
        }

        .header a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: #666;
            color: white;
        }

        @media screen and (max-width: 600px) {
            .header a {
                float: none;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <a class="active" href="voter.php">Home</a>
    <a href="lan_view.php">Vote Results</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
    <a href="change_pass.php">Change Password</a>
</div>

</body>
</html>
