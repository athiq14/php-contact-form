<?php

$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize inputs
    $name = trim(htmlspecialchars($_POST["name"] ?? ""));
    $email = trim(htmlspecialchars($_POST["email"] ?? ""));
    $message = trim(htmlspecialchars($_POST["message"] ?? ""));

    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If no errors
    if (empty($errors)) {
        // Normally you would store this in DB or send email
        $success = "Message sent successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }
        .container {
            max-width: 500px;
            background: #fff;
            padding: 20px;
            margin: auto;
            border-radius: 5px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #0073aa;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Status</h2>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="success">
            <?= $success ?>
        </div>
    <?php endif; ?>

    <a href="index.php">Go Back</a>
</div>

</body>
</html>
