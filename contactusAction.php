<?php
// Show PHP errors for debugging (disable in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Simple sanitization function
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// Get form data safely
$name        = $_POST['name'] ?? '';
$email       = $_POST['email'] ?? '';
$phone       = $_POST['phone'] ?? '';
$interests   = $_POST['interests'] ?? [];
$gender      = $_POST['gender'] ?? '';
$age         = $_POST['age'] ?? '';
$how_find_us = $_POST['how_find_us'] ?? '';
$questions   = $_POST['questions'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You | Fly2Fit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f8fb;
            padding: 30px;
        }

        .thank-you-container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #007BFF;
        }

        dl {
            margin-top: 20px;
        }

        dt {
            font-weight: bold;
            margin-top: 15px;
        }

        dd {
            margin-left: 20px;
        }

        .back-home {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            color: #007BFF;
        }

        .back-home:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank you, <?= h($name) ?>! 🎉</h1>
        <p>We appreciate you reaching out. Here's the info you shared with us:</p>

        <dl>
            <dt>Name:</dt>
            <dd><?= h($name) ?></dd>

            <dt>Email:</dt>
            <dd><?= h($email) ?></dd>

            <dt>Phone Number:</dt>
            <dd><?= h($phone) ?></dd>

            <dt>Interests:</dt>
            <dd>
                <?php if (!empty($interests)): ?>
                    <ul>
                        <?php foreach ($interests as $interest): ?>
                            <li><?= h($interest) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <em>None selected</em>
                <?php endif; ?>
            </dd>

            <dt>Gender:</dt>
            <dd><?= h(ucfirst($gender)) ?></dd>

            <dt>Age:</dt>
            <dd><?= h($age) ?></dd>

            <dt>How did you find us?</dt>
            <dd><?= h(ucwords(str_replace('_', ' ', $how_find_us))) ?></dd>

            <dt>Questions / Recommendations:</dt>
            <dd><?= $questions ? h($questions) : '<em>None</em>' ?></dd>
        </dl>

        <p>We'll be in touch soon with updates about Fly2Fit classes! 💪</p>
        <a href="index.html" class="back-home">⬅ Back to Home</a>
    </div>
</body>
</html>