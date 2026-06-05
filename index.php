
<?php include("includes/header.php"); ?>

<?php
include("config/db.php");

$slider = $conn->query("SELECT * FROM slider");
?>

<div class="slider">

<?php while($row = $slider->fetch_assoc()){ ?>

<img src="uploads/<?php echo $row['image']; ?>" class="slide">

<?php } ?>

</div>

<section class="hero">

<div>

<h1>Orange Glow Models</h1>

<p>Professional Modelling & Orchestra Agency</p>

</div>

</section>

<h2 style="text-align:center;margin-top:30px;">Featured Models</h2>

<div class="grid">

<?php

include("config/db.php");

$result=$conn->query("SELECT * FROM models ORDER BY id DESC LIMIT 6");

while($row=$result->fetch_assoc()){

echo "

<div class='card'>

<img src='uploads/".$row['image']."'>
<h3>".$row['name']."</h3>

</div>

";

}

?>

</div>

<?php include("includes/footer.php"); ?>