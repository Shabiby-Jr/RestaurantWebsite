<!DOCTYPE html>
<html height=100%>
    <head>
        <title> Contact Us </title>
        <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body height=100%>
        <header>
            <div class="contact">
                    <div class="logo">
                            <img src="logo.jpg">
                    </div>
                <ul>
                    <li><a href="MyWebsite.html">Home</a></li>
                    <li><a href="Menu.html">Menu</a></li>
                    <li><a href="Services.html">Services</a></li>
                    <li><a href="AboutUs.html">About Us</a></li>
                    <li class="active"><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <a href="LogIn.html"><img class="login-icon" src="login-icon.jpg"></a>
            <div class="title">
                <h1>CONTACT US</h1>
                <h2>We are always ready to serve you. Let's Talk!</h2>
            </div>
            <div class="contact-form">
                <?php 
                    $conn = new  mysqli('localhost','root','','restaurant') or 
                    die(mysqli_error($conn));
                ?>
                <form id="contact-form" method="post" action="ContactUs.php">
                <input name="name" type="text" class="form-control" placeholder="Your Name" autocomplete="off" required> <br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" autocomplete="off" required> <br>
                <textarea name="message" class="form-control" placeholder="Enter Message" rows="4" autocomplete="off" required></textarea> <br>
                <input type="submit" name="talk" class="form-control submit" value="LET'S TALK">
                </form>
            </div>
        </header>
    </body>
</html>