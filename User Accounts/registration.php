<!DOCTYPE html>
<html>
    <head>
        <title>User registration</title>
    </head>
    <body>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up the registration form with the correct values.</p>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" required>

                <label for="email">E-mail Address</label>
                <input type="email" name="email" required>

                <label for="nickname">Nickname</label>
                <input type="text" name="nickname" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <label for="phonenumber">Phone Number</label>
                <input type="text" name="phonenumber" required>

                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>
    </div>    





















    </body>
</html>