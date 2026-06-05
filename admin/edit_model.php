<?php
include("layout.php");
include("../config/db.php");

$id=$_GET['id'];

$result=$conn->query("SELECT * FROM models WHERE id=$id");
$model=$result->fetch_assoc();

if(isset($_POST['update'])){

$name=$_POST['name'];
$category=$_POST['category'];

$conn->query("UPDATE models SET name='$name', category='$category' WHERE id=$id");

echo "Updated successfully";

}
?>

<h2>Edit Model</h2>

<form method="POST">

<input name="name" value="<?php echo $model['name']; ?>">

<input name="category" value="<?php echo $model['category']; ?>">

<button name="update">Update</button>

</form>

<?php include("footer.php"); ?>