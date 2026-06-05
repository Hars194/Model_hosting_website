<?php
include("../config/db.php");

$id=$_GET['id'];

$conn->query("DELETE FROM slider WHERE id=$id");

header("Location: manage_slider.php");
?>