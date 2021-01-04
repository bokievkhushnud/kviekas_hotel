<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    
    // Data extraction from the Feedback form

    $firstname = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['con_text'];
    // $message_ = implode(',',$_REQUEST['con_text']);
 

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
    $sql = "INSERT INTO contact (firstname, email, subjectc, messagec )
    VALUES ('$firstname', '$email', '$subject', '$message' )";

    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location: ../pages/succes_contact.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>