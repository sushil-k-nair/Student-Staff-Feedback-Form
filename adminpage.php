<?php
    session_start();
    //including file from classes floder 
    include("classes/connection.php");
    include("classes/login.php");
    include("classes/admins.php");
    include("classes/getfeedbackuser.php");



    $login = new Login();
    $user_data = $login->check_login($_SESSION['feedback_adminid']);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_1.css">
    <title><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?> | Admin</title>
</head>
<body>
    <div class="nav_bar">
        <h1><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></h1>
        <a href="adminlogout.php">Logout</a>
        <div id="newadmin">
            <a href="newadmin.php">Add New Admin ?</a>
        </div>
    </div>
    <?php
        error_reporting(0);
        foreach($result as $row){
            include("post.php");
        }
        
    ?>
    
</body>
</html>