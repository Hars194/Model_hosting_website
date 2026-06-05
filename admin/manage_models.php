<?php
include("layout.php");
include("../config/db.php");

$result = $conn->query("SELECT * FROM models");
?>

<h2>Manage Models</h2>

<a href="upload_model.php" class="btn btn-add">Add Model</a>

<div class="table-container">

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Category</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()) { ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td>
<img src="../uploads/<?php echo $row['image']; ?>" width="50">
</td>

<td>

<a href="edit_model.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>

<a href="delete_model.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirmDelete()">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("footer.php"); ?>