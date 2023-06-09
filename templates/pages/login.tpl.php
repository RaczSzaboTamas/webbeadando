
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="./main.images/login_logo.png" class="brand_logo" alt="loginlogo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container" >
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user fa-2x"></i></span>                                
                                </div>
                                <input type="text" name="username" id="username" class="form-control input_user" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-key fa-2x"></i></span>                                
                                </div>
                                <input type="password" name="password" id="password" class="form-control input_pass" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                        
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="button" name="button" id="login" class="btn login_btn">Login</button>
                    </div>
                    </form>
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="index.php?page=registration" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $('#login').click(function(e){
                var valid=this.form.checkValidity();
                if(valid){
                    var username=$('#username').val();
                    var password=$('#password').val();
                }

                e.preventDefault();
                $.ajax({

                    type: 'POST',
                    url: './user_login/jslogin.php',
                    data:{username: username,password: password},
                    success: function(data){
                        alert(data);
                        if($.trim(data)=="1"){
                            setTimeout('window.location.href= "./index.php?page=cars"',2000);
                        }
                    },
                    error: function(data){
                        alert('There were some errors while doing the operation.');
                    }
                });

            });
        });
    </script>
    </body>
</html>