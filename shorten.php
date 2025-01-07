<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $original_url = $_POST['original_url'] ?? '';

    // Validate the URL
    if (!filter_var($original_url, FILTER_VALIDATE_URL)) {
        die("Invalid URL provided.");
    }

    // Generate a unique short code
    $short_code = substr(md5(uniqid()), 0, 6);

    // Save to the database
    $stmt = $pdo->prepare("INSERT INTO urls (original_url, short_code) VALUES (:original_url, :short_code)");
    $stmt->execute(['original_url' => $original_url, 'short_code' => $short_code]);

    echo "Shortened URL: <a href='http://localhost/url_shortner/redirect.php?code=$short_code' >http://shorturl/$short_code</a>";
}
