<?php
require_once('config.php');
?>
<?php
  if(isset($_POST)){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $nickname  = $_POST['nickname'];
    $password  = $_POST['password'];//sha1 titkositas
    $phonenumber = $_POST['phonenumber'];

    $sql = "INSERT INTO users (firstname, lastname, email, nickname, password, phonenumber) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname,$lastname,$email,$nickname,$password,$phonenumber]);
    if($result){
        echo 'User submitted!';
    }else{
        echo 'There was an error while saving the data!';
    }
 }else{
    echo 'No data found';
 }      
?>