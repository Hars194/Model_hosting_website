<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

if(isset($_POST['submit'])){

$title=$_POST['title'];
$date=$_POST['date'];
$location=$_POST['location'];

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$image);

$stmt=$conn->prepare("INSERT INTO events(title,event_date,location,image) VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$title,$date,$location,$image);
$stmt->execute();

$success="Event uploaded";

}
?>

<link rel="stylesheet" href="../css/style.css">

<div class="login-box">

<h2>Upload Event</h2>

<form method="POST" enctype="multipart/form-data">

<input name="title" placeholder="Event Title" required>

<input type="date" name="date" required>

<input name="location" placeholder="Location" required>

<input type="file" name="image" onchange="previewImage(this,'preview')" required>
<img id="preview">

<button name="submit">Upload</button>

</form>

</div>