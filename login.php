<?php
// Your server-side authentication logic goes here
// For demonstration purposes, let's check if the provided credentials match a hardcoded value
error_reporting(E_ALL);
ini_set('display_errors', 1);

$storedUsername = 'user';
$storedPassword = 'pass';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $storedUsername && $password === $storedPassword) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
}
?>
