<?php
// contactusAction.php

// Simple sanitizer
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// Grab POST data
$name          = $_POST['name'] ?? '';
$email         = $_POST['email'] ?? '';
$phone         = $_POST['phone'] ?? '';
$interests     = $_POST['interests'] ?? [];
$gender        = $_POST['gender'] ?? '';
$age           = $_POST['age'] ?? '';
$how_find_us   = $_POST['how_find_us'] ?? '';
$discount_code = $_POST['discount_code'] ?? '';

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You | Fly2Fit</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #215b8e; color: #333; padding: 20px; }
        .container { background:#fff; max-width:600px; margin:auto; padding:20px; border-radius:8px; box-shadow:0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #007BFF; text-align:center; }
        dl dt { font-weight:bold; margin-top:10px; }
        dl dd { margin-left:20px; }
        a { color: #007BFF; text-decoration:none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank you, your message has been submitted!</h1>
        <p>Here’s what we received:</p>
        <dl>
            <dt>Name:</dt>
            <dd><?= h($name) ?></dd>

            <dt>Email:</dt>
            <dd><?= h($email) ?></dd>

            <dt>Phone:</dt>
            <dd><?= h($phone) ?></dd>

            <dt>Interests:</dt>
            <dd>
                <?php if ($interests): ?>
                    <ul>
                        <?php foreach ($interests as $i): ?>
                            <li><?= h($i) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <em>None selected</em>
                <?php endif; ?>
            </dd>

            <dt>Gender:</dt>
            <dd><?= h($gender) ?></dd>

            <dt>Age:</dt>
            <dd><?= h($age) ?></dd>

            <dt>How did you find us?</dt>
            <dd><?= h($how_find_us) ?></dd>

            <dt>Discount Code:</dt>
            <dd><?= $discount_code ? h($discount_code) : '<em>None</em>' ?></dd>
        </dl>

        <p style="text-align:center;">
            <a href="index.html">⬅ Back to Home</a>
        </p>
    </div>
</body>
</html>
