<?php
session_start();
include './constants.php';
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) || !empty($password)) {
    

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_errno()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {

        try {
             
            $sql = "SELECT * FROM BookATour  WHERE username ='$username' AND Password ='$password'";
           
           echo '<br>';
           
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo 'Login successful';

                while ($row = $result->fetch_assoc()) {
                    echo 'here';
                    $_SESSION['id'] = $row["Id"];
                    $_SESSION['name'] = $row["FirstName"] . ' ' . $row["LastName"];

                    echo $_SESSION['id'] ;
                    echo $_SESSION['name'] ;
                }
                header('Location: index.php');

            } else {
                echo 'Login failed. Invalid credentials';
            }
            $conn->close();
        } catch (Exception $e) {
            echo 'Login failed. Invalid credentials';
            echo $e->getMessage();

        }
        //AM i running this code as it should? i can see its using port 5500 how did you run it in that port?
        // Honestly i dont know the port its running or how it got to be
        //Okay let me put in the htdocs folder and run from there

    }

} else {
    echo "All fields are required";
    die();
}
