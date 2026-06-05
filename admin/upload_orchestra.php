<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

if(isset($_POST['submit'])){

$name=$_POST['name'];
$description=$_POST['description'];

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$image);

$stmt=$conn->prepare("INSERT INTO orchestra(name,description,image) VALUES(?,?,?)");
$stmt->bind_param("sss",$name,$description,$image);
$stmt->execute();

$success="Orchestra uploaded successfully";

}
?>

<link rel="stylesheet" href="../css/style.css">

<div class="login-box">

<h2>Upload Orchestra</h2>

<?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

<form method="POST" enctype="multipart/form-data">

<input name="name" placeholder="Orchestra Name" required>

<textarea name="description" placeholder="Description"></textarea>

<input type="file" name="image" onchange="previewImage(this,'preview')" required>
<img id="preview">

<button name="submit">Upload</button>

</form>

</div>