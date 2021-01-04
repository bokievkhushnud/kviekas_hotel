<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    
    // Data extraction from the Booking form

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['emailb'];
    $phone = $_POST['phone'];
    $room = $_POST['room'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

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

    $sql = "INSERT INTO booking (firstname, lastname, email, phonenum, room,checkin, checkout, adults, children)
    VALUES ('$firstname', '$lastname', '$email','$phone','$room','$checkin', '$checkout', '$adults','$children' )";

    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location: ../pages/success_booking.html');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>