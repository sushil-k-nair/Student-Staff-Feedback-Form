<?php
    include("classes/connection.php");
    include("classes/signup.php");

    $first_name = "";
    $last_name = "";
    $email = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Addadmin();
        $result = $signup->evaluate($_POST);

        if($result != "")
        {
            echo "<div class='feedback_error'>";
            echo "<h3>The Following Error! Occured</h3>";
            echo $result;
            echo "</div>";
        }else
        {
            header("Location: adminlogin.php");
            die;
        }
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
    }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_1.css">
    <title>Adding Admin</title>
</head>
<body>
    <div class="nav_bar">
        <h1>NEW ADMIN</h1>
        <a href="index.php">Feedback Form</a>
        <div id="newadmin">
            <a href="adminpage.php">Admin Page</a>
        </div>
    </div>
    <div class="registerpage">
        <form method="post" action="">
            <input id="username" type="text" placeholder="First Name *" name="first_name" value="<?php echo   $first_name ?>" required>
            <input id="username" type="text" placeholder="Last Name *" name="last_name" value="<?php echo   $last_name ?>" required>
            <input id="username" type="text" placeholder="Email-Id*" name="email" value="<?php echo $email ?>" required>
            <input id="password" type="password" placeholder="Password *" name="password" required>
            <button type="submit" class="btn">Sign-Up</button>
        </form>
    </div>
</body>
</html>