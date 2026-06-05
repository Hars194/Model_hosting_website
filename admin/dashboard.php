<?php
include("layout.php");
include("../config/db.php");

$modelCount = $conn->query("SELECT COUNT(*) as total FROM models")->fetch_assoc()['total'];
$galleryCount = $conn->query("SELECT COUNT(*) as total FROM gallery")->fetch_assoc()['total'];
$eventCount = $conn->query("SELECT COUNT(*) as total FROM events")->fetch_assoc()['total'];
?>

<h2>Dashboard</h2>

<div class="stats-grid">

<div class="stat-card">
<h3>Total Models</h3>
<p><?php echo $modelCount; ?></p>
</div>

<div class="stat-card">
<h3>Total Gallery</h3>
<p><?php echo $galleryCount; ?></p>
</div>

<div class="stat-card">
<h3>Total Events</h3>
<p><?php echo $eventCount; ?></p>
</div>

</div>

<?php include("footer.php"); ?>