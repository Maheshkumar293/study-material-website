<?php
require_once 'config.php';

$stmt = $pdo->query("SELECT * FROM materials ORDER BY upload_date DESC");
$materials = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($materials);
?>