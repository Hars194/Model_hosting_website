<?php

session_start();
include("../config/db.php");

if($_POST){

$name=$_POST['name'];
$category=$_POST['category'];

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$image);

$stmt=$conn->prepare("INSERT INTO models(name,category,image) VALUES(?,?,?)");

$stmt->bind_param("sss",$name,$category,$image);

$stmt->execute();

echo "Uploaded";

}
?>

<link rel="stylesheet" href="../css/style.css">

<div class="login-box">

<form method="POST" enctype="multipart/form-data">

<input name="name" placeholder="Model Name" required>

<input name="category" placeholder="Category">

<div class="upload-box" id="uploadBox">

<p>Drag & Drop Image Here or Click to Select</p>

<input type="file" name="image" id="fileInput" required>

<img id="preview">

</div>

<button name="submit">Upload</button>

</form>
</div>