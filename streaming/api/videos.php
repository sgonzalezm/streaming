<?php
header('Content-Type: application/json');

// Configuración de la base de datos
$host = 'localhost';
$dbname = 'streaming_db';
$username = 'root';
$password = 'Shevchenko.1';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar la lista de videos
    $stmt = $pdo->query('SELECT * FROM videos');
    $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($videos) {
        echo json_encode($videos);
    } else {
        echo json_encode([]);
    }
    
} catch (PDOException $e) {
    http_response_code(500); // Devolver un código de respuesta HTTP 500
    echo json_encode(['error' => $e->getMessage(), 'code' => $e->getCode()]);
}
?>


