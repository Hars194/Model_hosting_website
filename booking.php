<?php
include("includes/header.php");
include("config/db.php");

if(isset($_POST['submit'])){

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$service=$_POST['service'];
$message=$_POST['message'];

// Save to database
$stmt=$conn->prepare("INSERT INTO bookings(name,phone,email,service,message) VALUES(?,?,?,?,?)");
$stmt->bind_param("sssss",$name,$phone,$email,$service,$message);
$stmt->execute();


// EMAIL NOTIFICATION
$to = "harshalrokade194@gmail.com"; // change to your email

$subject = "New Booking Request - Orange Glow Models";

$message_body = "
New booking received:

Name: $name
Phone: $phone
Email: $email
Service: $service
Message: $message
";

$headers = "From: noreply@orangeglow.com";

mail($to,$subject,$message_body,$headers);


// WHATSAPP AUTO OPEN
$whatsapp_number = "+919325894663"; // replace with your number

$whatsapp_message = "Hello Orange Glow Models,%0A%0A".
"New Booking Request:%0A".
"Name: $name%0A".
"Phone: $phone%0A".
"Email: $email%0A".
"Service: $service%0A".
"Message: $message";

$whatsapp_link = "https://wa.me/".$whatsapp_number."?text=".$whatsapp_message;

echo "<script>
window.open('$whatsapp_link','_blank');
</script>";

echo "<div class='success-box'>Booking request sent successfully!</div>";

}
?>

<link rel="stylesheet" href="css/style.css">

<div class="booking-container">

<div class="booking-card">

<h2>Book Our Service</h2>

<p class="booking-subtitle">
Hire professional models and orchestra for your events
</p>

<form method="POST" class="booking-form">

<div class="form-group">

<input type="text" name="name" placeholder="Full Name" required>

<input type="text" name="phone" placeholder="Phone Number" required>

</div>

<div class="form-group">

<input type="email" name="email" placeholder="Email Address">

<select name="service">

<option value="Model Booking">Model Booking</option>
<option value="Orchestra Booking">Orchestra Booking</option>

</select>

</div>

<textarea name="message" placeholder="Tell us about your event..."></textarea>

<button type="submit" name="submit" class="booking-btn">
Submit Booking Request
</button>

</form>

</div>

</div>

<?php include("includes/footer.php"); ?>