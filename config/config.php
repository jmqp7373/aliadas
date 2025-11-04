<?php
/**
 * Configuración de Base de Datos - Aliadas Webcam
 * 
 * Este archivo contiene los datos de conexión a la base de datos MySQL
 * Configurado para el servidor de GoDaddy
 */

// Datos de conexión a la base de datos
define('DB_HOST', 'localhost'); // Servidor de base de datos
define('DB_NAME', 'aliadaswebcam_db'); // Nombre de la base de datos
define('DB_USER', 'aliadaswebcam_user'); // Usuario de la base de datos
define('DB_PASS', ''); // Contraseña de la base de datos
define('DB_CHARSET', 'utf8mb4'); // Codificación de caracteres

// Configuración adicional
define('DB_PORT', 3306); // Puerto MySQL (por defecto 3306)
define('DB_COLLATE', 'utf8mb4_unicode_ci'); // Collation

/**
 * Clase para manejo de conexión a la base de datos
 */
class Database {
    private $connection;
    private static $instance = null;
    
    /**
     * Constructor privado para patrón Singleton
     */
    private function __construct() {
        $this->connect();
    }
    
    /**
     * Obtener instancia única de la base de datos
     */
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    /**
     * Establecer conexión con la base de datos
     */
    private function connect() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET . " COLLATE " . DB_COLLATE
            ]);
            
        } catch (PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
    
    /**
     * Obtener la conexión PDO
     */
    public function getConnection() {
        return $this->connection;
    }
    
    /**
     * Verificar si la conexión está activa
     */
    public function isConnected() {
        return $this->connection !== null;
    }
    
    /**
     * Cerrar la conexión
     */
    public function closeConnection() {
        $this->connection = null;
    }
}

/**
 * Función helper para obtener la conexión de base de datos
 * 
 * @return PDO Conexión a la base de datos
 */
function getDBConnection() {
    return Database::getInstance()->getConnection();
}

/**
 * Verificar conexión a la base de datos
 * 
 * @return bool True si la conexión es exitosa
 */
function testDBConnection() {
    try {
        $db = Database::getInstance();
        return $db->isConnected();
    } catch (Exception $e) {
        return false;
    }
}
?>