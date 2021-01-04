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
                    <span class="heading">About Us</span>
                </h5>
                <div class="about-content">
                    <img src="../images/hotel_1.jpg" alt="hotel 'Kivekas'" class="about-img">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At nihil officiis repudiandae,
                        perspiciatis delectus rem ipsa dolore modi quisquam voluptates libero tempore dolorem
                        consequatur tenetur! Aperiam quae perferendis aut nulla. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Ullam doloremque, officiis similique rem repellat illum temporibus atque
                        placeat, odio aliquam ex nihil consequatur praesentium maiores. Delectus officia harum odio
                        facere alias ea corrupti pariatur minus laboriosam nisi aliquam omnis sed magni veritatis,
                        deleniti vel, incidunt voluptate aspernatur quas eveniet, similique sint enim dolore. Vel, culpa
                        quasi magnam illo assumenda enim fugiat facere accusamus quaerat aliquid dignissimos mollitia
                        fugit sapiente delectus officiis aut aspernatur incidunt possimus quas dolorem non numquam rem?
                        Exercitationem architecto cupiditate minima expedita doloribus et non ratione, qui saepe eaque
                        hic dolore incidunt similique nulla voluptatum culpa adipisci molestias esse atque fugiat porro
                        minus harum quasi voluptas! Vel eligendi dignissimos, culpa earum sunt vitae ipsam incidunt et
                        dolorum dolor pariatur harum iusto illum ipsa quibusdam atque alias quaerat odio provident velit
                        soluta ab aspernatur, libero adipisci. Deserunt, vitae? Perferendis, repellat? Pariatur in
                        possimus minima ipsam, laudantium rerum. Dicta maiores totam exercitationem saepe beatae id
                        ipsa, sapiente sequi porro commodi! .</p>
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