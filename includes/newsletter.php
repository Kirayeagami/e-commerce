<?php
session_start();
include 'db.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $stmt = $conn->prepare("INSERT INTO newsletter_subscriptions (email) VALUES (?)");
            $stmt->bind_param("s", $email);
            
            if ($stmt->execute()) {
                $message = 'Thank you for subscribing to our newsletter!';
            } else {
                if ($conn->errno === 1062) { // Duplicate entry error
                    $message = 'You are already subscribed!';
                } else {
                    throw new Exception('Database error: ' . $conn->error);
                }
            }
        } catch (Exception $e) {
            $error = 'An error occurred while processing your subscription. Please try again later.';
        }
    } else {
        $error = 'Please enter a valid email address.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscription</title>
    <link rel="stylesheet" href="css/newsletter.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="newsletter-container">
        <h2>Subscribe to Our Newsletter</h2>
        
        <?php if ($message): ?>
            <div class="message success"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <?php if ($error): ?>
            <div class="message error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="newsletter.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Subscribe</button>
        </form>
        
        <p class="privacy-notice">
            We respect your privacy. Your email will only be used to send you our newsletter.
        </p>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
