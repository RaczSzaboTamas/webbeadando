<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/reg.css">       
    </head>
    <body>
    <div class="Main-Container">
        <section class="header">
            <nav>
                <a href="../index.php"><img src="img/loggo.png"></a>
                <div class="nav-links" id="NavLinks">
                    <ul>
                        <li><a href="../index.php">HOME</a></li>
                        <li><a href="../about.php">ABOUT</a></li>
                        <li><a href="../blog.php">BLOG</a></li>
                        <li><a href="../gallery.php">GALLERY</a></li>
                        <li><a href="../contact.php">CONTACT</a></li>
                        <li><a href="../user_login/login.php">LOGIN</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </div>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the registration form with the correct values.</p>
                        <hr class="mb-3 opacity-0">

                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" id="firstname" type="text" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" id="lastname" type="text" name="lastname" required>

                        <label for="email"><b>E-mail Address</b></label>
                        <input class="form-control" id="email" type="email" name="email" required>

                        <label for="nickname"><b>Nickname</b></label>
                        <input class="form-control" id="nickname" type="text" name="nickname" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

                        <hr class="mb-3 opacity-0">

                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">              
                    </div>                    
                </div>
            </div>
        </form>
    </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            
           $('#register').click(function(e){

                var valid = this.form.checkValidity();

                if(valid){

                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var nickname = $('#nickname').val();
                    var password = $('#password').val();
                    var phonenumber = $('#phonenumber').val();

                    e.preventDefault();
                    $.ajax({
                        type:'POST', 
                        url:'process.php', 
                        data: {firstname: firstname, lastname: lastname, email: email, nickname: nickname, password: password, phonenumber: phonenumber},
                        success: function(data){
                            Swal.fire(
                            'Your account has been saved!',
                            'click the button!',
                            'success'
                            )
                        },
                        error: function(data){
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: '<a href="">Why do I have this issue?</a>'
                            })
                        }
                    });
                }

            });
            
        });

    </script>




















    </body>
</html>