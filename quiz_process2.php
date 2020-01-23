<?php include 'quiz_database.php'; ?>
<?php session_start(); ?>
<?php
    //Check to see if score is set_error_handler
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

    if(isset($_POST["submit"])){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;

        /*
        *   Get total questions
        */
        $query = "SELECT * FROM `questions`";
        //Get result
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;

        /*
        *   Get correct choice
        */

        $query = "SELECT * FROM `choices`
                    WHERE question_number = $number AND is_correct = 1";

        //Get result
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

        //Get row
        $row = $result->fetch_assoc();

        //Set correct choice
        $correct_choice = $row['id'];

        //Compare
        if($correct_choice == $selected_choice){
            //Answer is correct
            $_SESSION['score']++;
        }

        //Check if last question
        /*
        if($number == $total){
            $user_update = "SELECT * FROM users WHERE username='".$_SESSION['username'] ."'";
            $result = mysqli_query($mysqli2, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            if ($user) { // if user exists
                if ($user['username'] === $_SESSION['username'] ) {
                $query = "UPDATE users SET score = ($_SESSION['score']) WHERE username='".$_SESSION['username'] ."'";
                mysqli_query($mysqli2 , $query);
                }
            }
            header("Location: quiz_final.php");
            exit();
        } else {
            header("Location: quiz_question.php?n=".$next);
        }
        */

        if($number == $total){
            $user_update = "SELECT * FROM users WHERE username=\"NenikGamer\";
            $result = mysqli_query($mysqli2, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            if ($user) { // if user exists
                if ($user['username'] === "NenikGamer" ) {
                $query = "UPDATE users SET score = ($_SESSION['score']) WHERE username=\"NenikGamer\"";
                mysqli_query($mysqli2 , $query);
                }
            }
            header("Location: quiz_final.php");
            exit();
        } else {
            header("Location: quiz_question.php?n=".$next);
        }
