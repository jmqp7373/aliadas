<?php
/**
 * Ejemplo de uso de la configuración de base de datos
 * 
 * Este archivo muestra cómo usar la configuración de base de datos
 * en otros archivos del proyecto
 */

// Incluir la configuración
require_once 'config/config.php';

try {
    // Obtener conexión a la base de datos
    $db = getDBConnection();
    
    // Ejemplo de consulta simple
    $stmt = $db->prepare("SELECT 1 as test");
    $stmt->execute();
    $result = $stmt->fetch();
    
    if ($result) {
        echo "✅ Conexión exitosa a la base de datos<br>";
        echo "🔗 Servidor: " . DB_HOST . "<br>";
        echo "🗄️ Base de datos: " . DB_NAME . "<br>";
        echo "👤 Usuario: " . DB_USER . "<br>";
        echo "🕒 Fecha: " . date('Y-m-d H:i:s');
    }
    
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>