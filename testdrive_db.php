<?php
 session_start();
 include('server.php');
 
 $errors = array();
 if (isset($_POST['reg_user'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $testDrive = mysqli_real_escape_string($conn, $_POST['testDrive']);
    $timeToBuy = mysqli_real_escape_string($conn, $_POST['timeToBuy']);

    if (empty($fname)) {
        array_push($errors, "Name is required")
    }
    if (empty($email)) {
        array_push($errors, "Email is required")
    }
    if (empty($tel)) {
        array_push($errors, "Phone number is required")
    }
    
    $_SESSION['fname'] = $fname;
    $_SESSION['success'] = "we got your form tahnks";
    header('locastion: index.php');
 }

?>