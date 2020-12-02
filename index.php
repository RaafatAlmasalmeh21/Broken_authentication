<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost;dbname=brokenauth;",$username,$password);



if (isset($_POST['send'])){
$email    = $_POST['email'];
$password = $_POST['password'];
}

$addData = $database->prepare("INSERT INTO brokenauth(id,email,password) VALUES('$email','$password') ");
var_dump($addData);
if ($addData->execute ()){
echo "gedaan";
}
?>

<form method="POST">

email :  <input type="text" name "Email" required/>
<br>
password :  <input type="password" name "Password" required/>
<button type="submit" name "send"> Send </button>



</form>
