<?php
include("layout.php");
include("../config/db.php");

// Handle upload
if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$target = "../uploads/" . $image;

// upload file
if(move_uploaded_file($tmp,$target)){

$stmt = $conn->prepare("INSERT INTO slider(image) VALUES(?)");
$stmt->bind_param("s",$image);
$stmt->execute();

echo "<div style='color:green;'>Slider uploaded successfully</div>";

}else{
echo "<div style='color:red;'>File upload failed</div>";
}

}else{
echo "<div style='color:red;'>Please select image</div>";
}

}
?>

<link rel="stylesheet" href="../css/style.css">

<div class="login-box">

<h2>Upload Slider Image</h2>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="image" required>

<br><br>

<button type="submit">Upload Slider</button>

</form>

<?php include("footer.php"); ?>

</div>