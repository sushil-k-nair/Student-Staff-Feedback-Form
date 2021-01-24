<?php
    include("classes/connection.php");
    include("classes/feedback.php");

    $name = "";
    $class = "";
    $year = "";
    $academic_year = "";
    $Q1 = "";
    $Q2 = "";
    $Q3 = "";
    $Q4 = "";
    $Q5 = "";
    $Q6 = "";
    $Q7 = "";
    $Q8 = "";
    $Q9 = "";
    $Q10 = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $feedback = new Feedback();
        $result = $feedback->evaluate($_POST);

        if($result != "")
        {
            echo "<div class='feedback_error'>";
            echo "<h3>The Following Error! Occured</h3>";
            echo $result;
            echo "</div>";
        }else
        {
            header("Location: index.php");
            die;
        }
        
        $name = $_POST['name'];
        $class = $_POST['class'];
        $year = $_POST['year'];
        $academic_year = $_POST['academic_year'];
        $Q1 = $_POST['Q1'];
        $Q2 = $_POST['Q2'];
        $Q3 = $_POST['Q3'];
        $Q4 = $_POST['Q4'];
        $Q5 = $_POST['Q5'];
        $Q6 = $_POST['Q6'];
        $Q7 = $_POST['Q7'];
        $Q8 = $_POST['Q8'];
        $Q9 = $_POST['Q9'];
        $Q10 = $_POST['Q10'];
    }  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_1.css">
    <title>Studen Staff Feedback</title>
</head>

<body>
    <div class="nav_bar">
        <h1>Student Staff Feedback</h1>
        <a href="adminpage.php">Admin Login</a>
    </div>
    <div class="feedbackbody">
        <form method="post" action="" id="form">
            <div id="userdetails">
                <input id="userarea" value="<?php echo $name ?>" type="text" placeholder="Your Name *" name="name" required>
                <input id="userarea" value="<?php echo $class ?>" type="text" placeholder="Course *" name="class" required>
                <input id="userarea" value="<?php echo $year ?>" type="text" placeholder="Class : FY / SY / TY *" name="year" required>
                <input id="userarea" value="<?php echo $academic_year ?>" type="text" placeholder="Academic Year : YYYY-YYYY *" name="academic_year" required>
            </div>
            <div id="question">
                <text>1. Are you satisfied with the teaching staff and their teaching methods?</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q1" value="Poor">
                    <label for="poor">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q1" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q1" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>2. How supportive were the faculty members?</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q2" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q2" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q2" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>3. How about your overall experience with this college?</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q3" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q3" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q3" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>4. Pace of the Teaching/lecture</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q4" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q4" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q4" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>5. Office staff are cooperative</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q5" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q5" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q5" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>6. Notes Quality</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q6" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q6" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q6" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>7. Project Guidance (if applicable)</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q7" value="poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q7" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q7" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>8. Grievances are redressed / problems are solved well in time</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q8" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q8" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q8" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>9. Toilets and Washrooms are clean and well maintained </text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q9" value="Poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q9" value="Good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q9" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <div id="question">
                <text>10. Classes are clean and well maintained</text><br>
                <div id="qspace">
                    <input type="radio" id="poor" name="Q10" value="poor">
                    <label for="bad">Poor</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="good" name="Q10" value="good">
                    <label for="good">Good</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="execellent" name="Q10" value="Execellent">
                    <label for="execellent">Execellent</label>
                </div>
            </div>
            <!-- Please provide us with additional feedback on areas that need improvement -->
            <button type="submit" class="btn">SUBMIT</button>
        </form>
        
    </div>
</body>

</html>