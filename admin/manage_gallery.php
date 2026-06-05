<?php
include("layout.php");
include("../config/db.php");

$result = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
?>

<h2>Manage Gallery</h2>

<a href="upload_gallery.php" class="btn btn-add">Add Image</a>

<div class="table-container">

<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()) { ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['title']; ?></td>

<td>
<img src="../uploads/<?php echo $row['image']; ?>" width="60">
</td>

<td>

<a href="edit_gallery.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>

<a href="delete_gallery.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirmDelete()">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("footer.php"); ?>