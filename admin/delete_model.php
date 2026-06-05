<?php
include("../config/db.php");

$id=$_GET['id'];

$conn->query("DELETE FROM models WHERE id=$id");

header("Location: manage_models.php");
?>