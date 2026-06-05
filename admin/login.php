<?php
session_start();
include("../config/db.php");

if($_POST){

$username=$_POST['username'];
$password=$_POST['password'];

$stmt=$conn->prepare("SELECT * FROM admin WHERE username=?");
$stmt->bind_param("s",$username);
$stmt->execute();

$result=$stmt->get_result();

if($result->num_rows==1){

$row=$result->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['admin']=$username;

header("Location: dashboard.php");

}else{
echo "Wrong password";
}

}else{
echo "Wrong username";
}

}
?>

<link rel="stylesheet" href="../css/style.css">

<div class="login-box">
<h2>Admin Login</h2>

<form method="post">

<input name="username" placeholder="Username">

<input name="password" type="password" placeholder="Password">

<button>Login</button>

</form>