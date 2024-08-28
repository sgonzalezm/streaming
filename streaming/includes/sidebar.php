<?php
include 'includes/db2.php';
try {
    // Consulta SQL para seleccionar todos los registros de la tabla mgmt_section
    $sql = "SELECT id, username, password, access_level, customer_id FROM mgmt_users";

    // Preparar y ejecutar la consulta
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Verificar si la consulta devolvió resultados
    if ($stmt->rowCount() > 0) {
        // Recorrer todos los resultados
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Almacenar cada columna en variables
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];         
        }
    } else {
        echo "No matches found.";
    }
} catch (PDOException $e) {
    echo "Query Error: " . $e->getMessage();
}

?>
<div class="sidebar">
<h3>Current user: <?php echo $username; ?></h3>
<ul>
    <li><a href="#dashboard">Dashboard</a></li>
    <li><a href="#content-management">Gestión de Contenido</a></li>
    <ul>
        <li><a href="#add-content">Agregar Contenido</a></li>
        <li><a href="#edit-content">Editar Contenido</a></li>
        <li><a href="#delete-content">Eliminar Contenido</a></li>
        <li><a href="#categories-genres">Categorías y Géneros</a></li>
    </ul>
    <li><a href="#user-management">Gestión de Usuarios</a></li>
    <ul>
        <li><a href="#all-users">Ver Todos los Usuarios</a></li>
        <li><a href="#subscriptions">Suscripciones</a></li>
        <li><a href="#block-suspend">Bloqueo y Suspensión</a></li>
        <li><a href="#roles-permissions">Roles y Permisos</a></li>
    </ul>
    <li><a href="#stream-management">Gestión de Streaming</a></li>
    <li><a href="#statistics-reports">Estadísticas y Reportes</a></li>
    <li><a href="#ad-management">Gestión de Publicidad</a></li>
    <li><a href="#system-settings">Configuraciones del Sistema</a></li>
    <li><a href="#support-docs">Soporte y Documentación</a></li>
    <li><a href="#notifications-alerts">Notificaciones y Alertas</a></li>
    <li><a href="#logout">Salir/Cerrar Sesión</a></li>
</ul>
</div>
<?php
?>