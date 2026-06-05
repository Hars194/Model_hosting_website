<?php
include("../config/db.php");

$id=$_GET['id'];

$conn->query("DELETE FROM orchestra WHERE id=$id");

header("Location: manage_orchestra.php");
?>