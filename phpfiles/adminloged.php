<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../styles\print.css">
    <title>Kevikas Hotel | About</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="../index.html">
                    <img src="../images/logo.png" alt="logo">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="../index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../phpfiles/about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="../pages/service.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="../pages/booking.html" class="nav-link">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a href="../pages/contact.html" class="nav-link">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="../phpfiles/admin.php" class="nav-link">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="about">
            <div class="container">
                <h5 class="section-head h-head">
                    <span class="heading">Admin Page</span>
                    <span class="subheading">The information in this page is only for admin users</span>
                </h5>
                <div class="table-container">
                    <h4>Reservations: </h4>
                    <table class="table">
                        <tr>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Room</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Adults</th>
                            <th>Children</th>
                        </tr>
                        <?php
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
                        $sql = "SELECT firstname, lastname, email, phonenum, room, checkin, checkout, adults, children from booking";
                        $result = $conn -> query($sql);
                        if ($result -> num_rows>0){
                            while ($row = $result ->fetch_assoc()){
                                echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"] ."</td><td>".$row["email"]
                                ."</td><td>".$row["phonenum"]."</td><td>".$row["room"]."</td><td>".$row["checkin"] ."</td><td>".$row["checkout"]
                                ."</td><td>".$row["adults"]."</td><td>".$row["children"]."</td>";
                            }
                        }else{
                            echo "";
                        }
                        $conn-> close();
                        ?>
                    </table>
                </div>
                <div class="table-container">
                    <h4>People who contacted us: </h4>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>

                        <?php
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
                        $sql = "SELECT firstname, email, subjectc, messagec from contact";
                        $result = $conn -> query($sql);
                        if ($result -> num_rows>0){
                            while ($row = $result ->fetch_assoc()){
                                echo "<tr><td>".$row["firstname"] ."</td><td>".$row["email"] ."</td><td>".$row["subjectc"]."</td><td>".$row["messagec"]."</td><td>";
                            }
                        }else{
                            echo "";
                        }
                        $conn-> close();
                        ?>
                    </table>
                </div>
                <div class="table-container">
                    <h4>Guest's feedback: </h4>
                    <table class="table">
                        <tr>
                            <th>First Name</th>
                            <th>To be improved</th>
                            <th>Rate out of 10</th>
                            <th>Messege</th>
                        </tr>
                        <?php
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
                        $sql = "SELECT firstname, toimprove, rate, msg from feedback";
                        $result = $conn -> query($sql);
                        if ($result -> num_rows>0){
                            while ($row = $result ->fetch_assoc()){
                                echo "<tr><td>".$row["firstname"] ."</td><td>".$row["toimprove"] ."</td><td>".$row["rate"]."</td><td>".$row["msg"]."</td><td>";
                            }
                        }else{
                            echo "";
                        }
                        $conn-> close();
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <a href="../index.html" class="logo">
                        <img src="../images/logo.png" alt="" class="logo-image">
                    </a>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas minima recusandae alias quis
                        animi facere voluptates odio dolore ipsum eum, pariatur iste numquam, ab deserunt, neque impedit
                        earum quia officiis!
                    </p>
                </div>
                <div class="social-meida-wrap">
                    <h4 class="footer-heading">Follow us</h4>
                    <div class="social-media">
                        <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../main.js"></script>
</body>

</html>