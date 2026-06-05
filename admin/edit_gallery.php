<?php
include("layout.php");
include("../config/db.php");

$id=$_GET['id'];

$data=$conn->query("SELECT * FROM gallery WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){

$title=$_POST['title'];

$conn->query("UPDATE gallery SET title='$title' WHERE id=$id");

echo "<p class='alert'>Updated</p>";

}
?>

<h2>Edit Gallery</h2>

<form method="POST">

<input name="title" value="<?php echo $data['title']; ?>">

<button name="update">Update</button>

</form>

<?php include("footer.php"); ?>