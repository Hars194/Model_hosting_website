<?php include("includes/header.php"); ?>
<?php include("config/db.php"); ?>

<h2>Our Models</h2>

<div class="grid">

<?php

$result=$conn->query("SELECT * FROM models");

while($row=$result->fetch_assoc()){

echo "
<div class='card'>
<img src='uploads/".$row['image']."'>
<h3>".$row['name']."</h3>
<p>".$row['category']."</p>
</div>
";

}

?>

</div>

<?php include("includes/footer.php"); ?>