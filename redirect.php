<?php
require 'config.php';

$code = $_GET['code'] ?? '';

// Fetch the original URL from the database
$stmt = $pdo->prepare("SELECT original_url FROM urls WHERE short_code = :code");
$stmt->execute(['code' => $code]);
$url = $stmt->fetchColumn();

if ($url) {
    header("Location: $url");
    exit;
} else {
    echo "Invalid or expired URL.";
}
