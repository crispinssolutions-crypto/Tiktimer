<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "youremail@example.com"; // replace with your email
  $subject = "Contact Form Submission - Tiktimer";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    header("Location: thankyou.html");
    exit();
  } else {
    echo "Sorry, something went wrong. Please try again later.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact - Tiktimer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Contact Crispins Solution</h1>

    <nav>
      <a href="index.html">Home</a>
      <a href="privacy.html">Privacy Policy</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <form action="contact.php" method="post" class="contact-form">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="message">Message:</label>
      <textarea name="message" id="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 Tiktimer. All rights reserved.</p>
  </footer>
</body>
</html>
