<?php
require 'includes/header.php';
include 'includes/db2.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<button class="menu-toggle">☰</button> <!-- Botón de menú para pantallas pequeñas -->

<?php include 'includes/sidebar.php'; ?>

<h1>System management</h1>


<?php

// Logica de consulta de los esquemas de gestion con URLs de los servicios disponibles
// Apto para crecimiento del sistema de gestion o nuevas funciones

try {
    // Consulta SQL para seleccionar todos los registros de la tabla mgmt_section
    $sql = "SELECT id, title, description, url, poster_url, access_level, client_id FROM mgmt_section";

    // Preparar y ejecutar la consulta
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Verificar si la consulta devolvió resultados
    if ($stmt->rowCount() > 0) {
        echo '<div class="card-container">'; // Contenedor para las tarjetas
        // Recorrer todos los resultados
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Almacenar cada columna en variables
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $url = $row['url'];
            $poster_url = $row['poster_url'];
            $access_level = $row['access_level'];
            $client_id = $row['client_id'];

            // Generar HTML para cada tarjeta
            echo '<div class="card">';
            echo '<div class="card-image"><a href="' . htmlspecialchars($url) . '"><img src="' . htmlspecialchars($poster_url) . '" alt="' . htmlspecialchars($title) . '"></a></div>';
            echo '<div class="card-content">';
            echo '<h3>' . htmlspecialchars($title) . '</h3>';
            echo '<p>' . htmlspecialchars($description) . '</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>'; // Cerrar contenedor de tarjetas
    } else {
        echo "No se encontraron resultados.";
    }
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>

<div class="metrics-banner">
    <div class="metric">
        <h3>Network BW</h3>
        <p>10.5 Gbps / 20 Gbps</p>
    </div>
    <div class="metric">
        <h3>CPU Usage</h3>
        <p>65% Utilizado</p>
    </div>
    <div class="metric">
        <h3>RAM</h3>
        <p>8 GB / 16 GB</p>
    </div>
    <div class="metric">
        <h3>Active Users</h3>
        <p>350</p>
    </div>
    <div class="metric">
        <h3>History Sessions</h3>
        <p>15,000</p>
    </div>
</div>

<?php
include 'includes/footer.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');

    menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('active'); // Toggle la clase 'active' para mostrar/ocultar el sidebar
    });
});
</script>
