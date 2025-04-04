<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin-login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file = $_FILES['file'];
    
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $new_filename = uniqid() . '.' . $file_extension;
    $target_file = $target_dir . $new_filename;
    
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        $stmt = $pdo->prepare("INSERT INTO materials (title, description, filename) VALUES (?, ?, ?)");
        $stmt->execute([$title, $description, $new_filename]);
        
        header('Location: admin-dashboard.html?success=1');
        exit();
    } else {
        header('Location: admin-dashboard.html?error=1');
        exit();
    }
}
?>