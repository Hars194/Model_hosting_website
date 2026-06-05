<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

if(isset($_POST['submit'])){

$title=$_POST['title'];
$category=$_POST['category'];

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$image);

$stmt=$conn->prepare("INSERT INTO gallery(title,category,image) VALUES(?,?,?)");
$stmt->bind_param("sss",$title,$category,$image);
$stmt->execute();

$success="Gallery uploaded";

}
?>

<link rel="stylesheet" href="../css/style.css">

<div class="login-box">

<h2>Upload Gallery</h2>

<form method="POST" enctype="multipart/form-data">

<input name="title" placeholder="Title" required>

<select name="category">

<option value="model">Model</option>
<option value="orchestra">Orchestra</option>
<option value="event">Event</option>

</select>

<input type="file" name="image" onchange="previewImage(this,'preview')" required>
<img id="preview">

<button name="submit">Upload</button>

</form>

</div>