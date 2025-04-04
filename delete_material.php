<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    http_response_code(403);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    
    $stmt = $pdo->prepare("SELECT filename FROM materials WHERE id = ?");
    $stmt->execute([$id]);
    $material = $stmt->fetch();
    
    if ($material) {
        $file_path = 'uploads/' . $material['filename'];
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        
        $stmt = $pdo->prepare("DELETE FROM materials WHERE id = ?");
        $stmt->execute([$id]);
        
        echo json_encode(['success' => true]);
    } else {
        http_response_code(404);
    }
}
?>