<?php
include("layout.php");
include("../config/db.php");

$result=$conn->query("SELECT * FROM slider ORDER BY id DESC");
?>

<h2>Manage Slider</h2>

<a href="upload_slider.php" class="btn btn-add">Add Slider</a>

<div class="table-container">

<table>

<tr>
<th>ID</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td>
<img src="../uploads/<?php echo $row['image']; ?>" width="120">
</td>

<td>

<a href="delete_slider.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirmDelete()">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("footer.php"); ?>