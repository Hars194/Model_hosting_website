<?php
include("../config/db.php");

$id=$_GET['id'];

$conn->query("DELETE FROM gallery WHERE id=$id");

header("Location: manage_gallery.php");
?>