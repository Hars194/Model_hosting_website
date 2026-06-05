<?php include("includes/header.php"); ?>
<?php include("config/db.php"); ?>

<h2 style="text-align:center;">Gallery</h2>

<div class="grid">

<?php

$result=$conn->query("SELECT * FROM gallery ORDER BY id DESC");

while($row=$result->fetch_assoc()){

echo "

<div class='card'>

<img src='uploads/".$row['image']."'>
<h3>".$row['title']."</h3>

</div>

";

}

?>

</div>

<?php include("includes/footer.php"); ?>