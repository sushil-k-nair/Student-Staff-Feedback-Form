<?php
session_start();
    include("classes/connection.php");
    include("classes/login.php");

    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $login = new Login();
        $result = $login->evaluate($_POST);

        if($result != ""){
            echo "<div class='feedback_error'>";
            echo "<h3>The Following Error! Occured</h3>";
            echo $result;
            echo "</div>";
        }else{
            header("Location: adminpage.php");
            die;
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];
    }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_1.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="nav_bar">
        <h1>ADMIN LOGIN</h1>
        <a href="index.php">Feedback Form</a>
    </div>
    <div class="loginpage">
        <form method="post" action="">
            <input id="username" type="text" placeholder="User Name *" name="email" value="<?php echo $email ?>" required>
            <input id="password" type="password" placeholder="Password *" name="password" value="<?php echo $password ?>" required>
            <button type="submit" class="btn">Sign-Up</button><br>
            
        </form>
    </div>
</body>
</html>