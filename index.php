<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title>Best Car Sales and Trades Ltd.</title>
        <link rel="stylesheet" href="main.css/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
 <body>
    <div class="Main-Container">
        <section class="header">
            <nav>
                <a href="index.php"><img src="main.images/loggo.png"></a>
                <div class="nav-links" id="NavLinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="user_login/login.php">LOGIN</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
                <div class="text-box">
                    <h1>One of the best car sales company in Hungary!</h1>
                    <br>
                    <p>Come and look around to discover various brands, with various equipments.
                        Widely spread in every county and price range. <br>You can buy or sell, it's up to you! 
                        Hurry up and get a great deal!
                    </p>
                    <a href="user_registration/registration.php" class="main-button">Klick here to begin!</a> 
                </div>
        </section>
<section class="Main-footer">  
    <footer>
        <div class="logo">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-linkedin" aria-hidden="true"></i>
            &nbsp;&copy;&nbsp; Copyright 2023. Best Car Sales and Trades Ltd.
        </div> 
    </footer>
</section>
  

            <!--------Javascript for Toggle Menu--------->
            <script>
                var NavLinks=document.getElementById("NavLinks");
                function showmenu(){
                    NavLinks.style.right="0";
                }
                function hidemenu(){
                    NavLinks.style.right="-200px"
                }
            </script>       
    </div>
 </body>
</html>