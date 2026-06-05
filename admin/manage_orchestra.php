<?php
include("layout.php");
include("../config/db.php");

$result=$conn->query("SELECT * FROM orchestra");
?>

<h2>Manage Orchestra</h2>

<a href="upload_orchestra.php" class="btn btn-add">Add Orchestra</a>

<div class="table-container">

<table>

<tr>
<th>Name</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['name']; ?></td>

<td>
<img src="../uploads/<?php echo $row['image']; ?>" width="60">
</td>

<td>

<a href="delete_orchestra.php?id=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("footer.php"); ?>