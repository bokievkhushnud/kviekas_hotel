<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php
    
    // Data extraction from the Feedback form

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $rating = $_POST['rate'];
    $feedback = $_POST['feedback'];

    $toBeImproved = implode(',',$_REQUEST['improved']);
    // Connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kivekas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO feedback (firstname, lastname, email, gender, toimprove,rate,msg)
    VALUES ('$firstname', '$lastname', '$email','$gender','$toBeImproved','$rating', '$feedback' )";

    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location: ../pages/success.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>