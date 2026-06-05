<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Panel - Orange Glow Models</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../css/admin.css">

<script src="../js/script.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body>

<div class="admin-container">

<!-- Sidebar -->

<div class="sidebar">

<div class="sidebar-header">

<img src="../images/admin_logo.png" class="admin-logo">

<h2>Orange Glow</h2>

</div>

<a href="dashboard.php">Dashboard</a>

<hr>

<h3>Models</h3>

<a href="upload_model.php">Upload Model</a>
<a href="manage_models.php">Manage Models</a>

<hr>

<h3>Gallery</h3>

<a href="upload_gallery.php">Upload Gallery</a>
<a href="manage_gallery.php">Manage Gallery</a>

<hr>

<h3>Orchestra</h3>

<a href="upload_orchestra.php">Upload Orchestra</a>
<a href="manage_orchestra.php">Manage Orchestra</a>

<hr>

<h3>Events</h3>

<a href="upload_event.php">Upload Event</a>
<a href="manage_events.php">Manage Events</a>

<hr>

<h3>Slider</h3>

<a href="upload_slider.php">
<i class="fa fa-plus"></i> Upload Slider
</a>

<a href="manage_slider.php">
<i class="fa fa-list"></i> Manage Slider
</a>

<hr>

<h3>Bookings</h3>

<a href="manage_bookings.php">
<i class="fa fa-calendar"></i> Manage Bookings
</a>

<hr>

<a href="logout.php">Logout</a>

</div>

<!-- Main Content -->

<div class="main-content">