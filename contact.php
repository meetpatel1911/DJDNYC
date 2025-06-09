<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "MEETPATEL191120@GMAIL.com"; // Replace with your email
  $subject = "New DJDNYC Contact Form Submission";
  
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $venue = htmlspecialchars($_POST['venue']);
  $date = htmlspecialchars($_POST['event_date']);
  $time = htmlspecialchars($_POST['event_time']);
  $city = htmlspecialchars($_POST['city']);
  $message = htmlspecialchars($_POST['message']);

  $body = "You received a new inquiry from DJDNYC:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Phone: $phone\n";
  $body .= "Venue: $venue\n";
  $body .= "Event Date: $date\n";
  $body .= "Event Time: $time\n";
  $body .= "City: $city\n";
  $body .= "Message:\n$message\n";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<p style='color: #fff; background-color: #111; padding: 20px; text-align: center;'>Thank you! Your message has been sent.</p>";
  } else {
    echo "<p style='color: red; background-color: #111; padding: 20px; text-align: center;'>Sorry, there was a problem sending your message.</p>";
  }
}
?>
