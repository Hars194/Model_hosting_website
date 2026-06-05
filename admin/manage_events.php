<?php
include("layout.php");
include("../config/db.php");

$result=$conn->query("SELECT * FROM events");
?>

<h2>Manage Events</h2>

<a href="upload_event.php" class="btn btn-add">Add Event</a>

<div class="table-container">

<table>

<tr>
<th>Title</th>
<th>Date</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['title']; ?></td>

<td><?php echo $row['event_date']; ?></td>

<td>
<img src="../uploads/<?php echo $row['image']; ?>" width="60">
</td>

<td>

<a href="delete_event.php?id=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("footer.php"); ?>