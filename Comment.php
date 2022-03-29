<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMENT</title>
    <link rel="icon" href="waterfall.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
session_start();
echo ' <h2> welcome ' . $_SESSION['name'] . '</h2>';
?>

<Br>
    <h1>COMMENTS</h1>

    <?php
session_start();
include './constants.php';
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_errno()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    // echo 'connection succeeded';
    $sql = "SELECT * FROM Comments C  join BookATour B on C.userId=B.Id";
    echo '<div> <table><tr><th>Name</th><th>Comment</th></tr>';

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row["FirstName"] . ' ' . $row["LastName"] . '</td><td>' . $row["comment"] . '</td></tr>';

        }
    }
    echo '</table></div>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['message'];
    if (empty($comment)) {

        echo '<div style="color: red;"> <p> Comment cannot be blank</p></div>';

    } else {
        $userId = $_SESSION['id'];

        $sql = "INSERT INTO Comments (userId,comment)
        VALUES('$userId','$comment')";
        if ($conn->query($sql) == true) {
            echo '<div style="color: green;"> <p> Comment added successfully</p></div>';

        } else {
            echo '<div style="color: red;"> <p> Failed to add comment' . $conn->error . ' </p></div>';

        }

    }
}

?>



    <form
    method="POST">
    <fieldset>
    <legend>LEAVE A COMMENT </legend>
    <!-- <p></p>
    <label for="FirstName">First Name:</label>
    <input type="text" name="FirstName"
    id="FirstName" placeholder="John" required>
    <p>
    <label for="LastName">Last Name:</label>
    <input type="text" name="LastName"
    id="LastName" placeholder="Johnson" required>
    </p>
    <p>
        <label for="phone">Phone:</label>
        <input type="tel" name="Phone"
        id="Phone" placeholder="55555-555555" required>
        </p>
        <p>
            <label for="Email">Email</label>
            <input type="email" name="Email">
        </p> -->
        <label for="message">Your Comment</label>
        <br>
        <textarea name="message" id="message" cols="60" rows="8"placeholder="type your comment here"></textarea>
        <p></p>
        <button type="submit">submit</button>
        <button type="reset">reset</button>

        </fieldset>


</body>
</html>
