<?php

if(!isset($_SESSION['userlogin'])){
    session_start();
    header("Location: ../../index.php?page=login");
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header("Location: ../../index.php?page=login");
}

?>
<h1>Welcome to the Log-out page</h1>

<a href= "./templates/pages/logout.tpl.php? logout=true" class="lgout">Click here to Log-out!</a>
