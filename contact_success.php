<?php
session_start();

// Check if the form submission was successful
if (isset($_SESSION['form_success']) && $_SESSION['form_success'] === true) {
    // Clear the success flag
    unset($_SESSION['form_success']);
} else {
    // Redirect to the contact page if accessed directly
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Success - Fastline</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your message has been successfully sent. We will get back to you shortly.</p>
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</body>
</html>