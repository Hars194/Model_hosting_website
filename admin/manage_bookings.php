<?php
include("layout.php");
include("../config/db.php");

$result=$conn->query("SELECT * FROM bookings ORDER BY id DESC");
?>

<h2>Manage Bookings</h2>

<div class="table-container">

<table>

<tr>
<th>Name</th>
<th>Phone</th>
<th>Service</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['service']; ?></td>

<td><?php echo $row['message']; ?></td>

<td><?php echo $row['created_at']; ?></td>

<td>

<a href="delete_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-delete">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("footer.php"); ?>