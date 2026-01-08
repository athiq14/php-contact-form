<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Contact Form</title>
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
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            padding: 10px;
            background: #0073aa;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Us</h2>
    <form method="post" action="process.php">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" placeholder="Your Message"></textarea>
        <button type="submit">Send</button>
    </form>
</div>

</body>
</html>
