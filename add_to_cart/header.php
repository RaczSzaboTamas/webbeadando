<?php
  
  require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">

</head>
<body>
     <header>
        <div id="lgo">
        <h1><a href="../index.php"><img style="width: 200px; height: 40px;" src="loggo.png" alt="lgo"></a></h1>
        </div>        
         <div id="main_tabs">
         <a href="home.php">Cars for Sale</a>    
         <a href="upload.php">Upload your car</a>
         <a href="../user_login/index.php">Log out</a>                 
         </div>
         <a href="cart.php">Cart<span id="badge"><?php echo mysqli_num_rows($all_cart);  ?></span></a>
     </header>
</body>
</html>