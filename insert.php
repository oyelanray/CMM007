<?php
session_start();
include './constants.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['Phone'];

if (!empty($username) || !empty($password) || !empty($email) || !empty($phone)) {
    

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_errno()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {

        try {

            $fname = $_POST['FirstName'];
            $lname = $_POST['LastName'];
            $dob = $_POST['Year'] . '-' . $_POST['Month'] . '-' . $_POST['Date'];
            $package = $_POST['package'];

            $sql = "INSERT INTO BookATour (username,Password,Email,Phone,FirstName,LastName,DateofBirth,Package)
VALUES('$username','$password','$email','$phone','$fname','$lname','$dob','$package')";

            if ($conn->query($sql) == true) {
                echo 'Inserted uccessfully';

                header('Location: index.php');

            } else {
                echo 'Failed to insert record ' . $conn->error;
            }
            $conn->close();
        } catch (Exception $e) {
            echo 'Failed to insert';
            echo $e->getMessage();

        }
        

    }

} else {
    echo "All fields are required";
    die();
}
