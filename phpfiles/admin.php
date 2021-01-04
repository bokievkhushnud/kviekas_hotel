<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
    <title>Kevikas Hotel | Feedback</title>
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
                        <a href="about.php" class="nav-link">About</a>
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
                        <a href="admin.php" class="nav-link">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="login">
            <div class="container">
                <h5 class="section-head h-head">
                    <span class="heading">Admin</span>
                    <span class="sub-heading">LogIn page </span>
                </h5>
                <form action="./admin.php" method="post" class="login-form">
                    <div class="error-message">
                        <?php   
                        if (isset($_POST['submit'])){
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            // Create connection
                            $con = new mysqli('localhost', 'root', '', 'kivekas');
                                //to prevent from mysqli injection  
                            $username = stripcslashes($username);  
                            $password = stripcslashes($password);  
                            $username = mysqli_real_escape_string($con, $username);  
                            $password = mysqli_real_escape_string($con, $password);  
                            
                            $sql = "SELECT *FROM login where username = '$username' and password = '$password'";  
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);
                            if($count == 1){  
                            header('Location: adminloged.php');
                            }else{
                            echo "<h3>Invalid username or password !</h3>";  
                            };
                        }
                        ?>
                    </div>
                    <div class="input-group ">
                        <label for="" class="input-label">Username</label>
                        <input type="text" class="input" id="username" name="username" onkeydown="loginValidate()" onchange="loginValidate()">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small></small>
                    </div>
                    <div class="input-group ">
                        <label for="" class="input-label">Password</label>
                        <input type="password" class="input" id="password" name="password" onkeydown="loginValidate()" onchange="loginValidate()">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small></small>
                    </div>
                    <button type="submit" class="login-btn" name="submit" onclick="loginValidate(event)">
                        Submit
                    </button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <a href="../index.html" class="logo">
                        <img src="../images/logo.png" alt="logo" class="logo-image">
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
