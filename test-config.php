<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Configuración DB - Aliadas Webcam</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white; 
            padding: 20px; 
            margin: 0;
            min-height: 100vh;
        }
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            background: rgba(255,255,255,0.1); 
            padding: 30px; 
            border-radius: 15px; 
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        .success { color: #90EE90; font-weight: bold; }
        .error { color: #FFB6C1; font-weight: bold; }
        .info { color: #ADD8E6; }
        .test-item { 
            margin: 15px 0; 
            padding: 10px; 
            background: rgba(255,255,255,0.05); 
            border-radius: 8px; 
        }
        h1 { text-align: center; margin-bottom: 30px; }
        h2 { color: #FFF; border-bottom: 1px solid rgba(255,255,255,0.3); padding-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Prueba de Configuración de Base de Datos</h1>
        
        <?php
        echo "<h2>📋 1. Verificación de archivo config.php</h2>";
        
        // Verificar si el archivo existe
        if (file_exists('config/config.php')) {
            echo "<div class='test-item'><span class='success'>✅</span> Archivo config/config.php existe</div>";
            
            // Incluir el archivo
            try {
                require_once 'config/config.php';
                echo "<div class='test-item'><span class='success'>✅</span> Archivo config.php incluido correctamente</div>";
                
                echo "<h2>⚙️ 2. Verificación de constantes</h2>";
                
                // Verificar constantes definidas
                $constants = ['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'DB_CHARSET', 'DB_PORT', 'DB_COLLATE'];
                
                foreach ($constants as $const) {
                    if (defined($const)) {
                        $value = ($const === 'DB_PASS') ? str_repeat('*', strlen(constant($const))) : constant($const);
                        echo "<div class='test-item'><span class='success'>✅</span> $const = <span class='info'>$value</span></div>";
                    } else {
                        echo "<div class='test-item'><span class='error'>❌</span> Constante $const no definida</div>";
                    }
                }
                
                echo "<h2>🏗️ 3. Verificación de clase Database</h2>";
                
                // Verificar si la clase existe
                if (class_exists('Database')) {
                    echo "<div class='test-item'><span class='success'>✅</span> Clase Database existe</div>";
                    
                    // Verificar métodos de la clase
                    $methods = ['getInstance', 'getConnection', 'isConnected', 'closeConnection'];
                    foreach ($methods as $method) {
                        if (method_exists('Database', $method)) {
                            echo "<div class='test-item'><span class='success'>✅</span> Método Database::$method() existe</div>";
                        } else {
                            echo "<div class='test-item'><span class='error'>❌</span> Método Database::$method() no existe</div>";
                        }
                    }
                } else {
                    echo "<div class='test-item'><span class='error'>❌</span> Clase Database no existe</div>";
                }
                
                echo "<h2>🔌 4. Prueba de conexión a la base de datos</h2>";
                
                // Verificar funciones helper
                if (function_exists('getDBConnection')) {
                    echo "<div class='test-item'><span class='success'>✅</span> Función getDBConnection() existe</div>";
                    
                    try {
                        // Intentar conectar
                        $db = getDBConnection();
                        if ($db instanceof PDO) {
                            echo "<div class='test-item'><span class='success'>✅</span> Conexión PDO establecida correctamente</div>";
                            
                            // Hacer una consulta simple
                            $stmt = $db->prepare("SELECT 1 as test, NOW() as fecha");
                            $stmt->execute();
                            $result = $stmt->fetch();
                            
                            if ($result) {
                                echo "<div class='test-item'><span class='success'>✅</span> Consulta de prueba exitosa</div>";
                                echo "<div class='test-item'><span class='info'>🕒 Fecha del servidor DB: " . $result['fecha'] . "</span></div>";
                            }
                            
                            // Verificar información de la conexión
                            $version = $db->getAttribute(PDO::ATTR_SERVER_VERSION);
                            echo "<div class='test-item'><span class='info'>📊 Versión MySQL: $version</span></div>";
                            
                        } else {
                            echo "<div class='test-item'><span class='error'>❌</span> La conexión no es un objeto PDO válido</div>";
                        }
                        
                    } catch (Exception $e) {
                        echo "<div class='test-item'><span class='error'>❌</span> Error de conexión: " . htmlspecialchars($e->getMessage()) . "</div>";
                    }
                    
                } else {
                    echo "<div class='test-item'><span class='error'>❌</span> Función getDBConnection() no existe</div>";
                }
                
                if (function_exists('testDBConnection')) {
                    echo "<div class='test-item'><span class='success'>✅</span> Función testDBConnection() existe</div>";
                    
                    if (testDBConnection()) {
                        echo "<div class='test-item'><span class='success'>✅</span> Test de conexión exitoso</div>";
                    } else {
                        echo "<div class='test-item'><span class='error'>❌</span> Test de conexión falló</div>";
                    }
                } else {
                    echo "<div class='test-item'><span class='error'>❌</span> Función testDBConnection() no existe</div>";
                }
                
                echo "<h2>🎯 5. Resumen final</h2>";
                echo "<div class='test-item'><span class='success'>🎉</span> <strong>Configuración completada - Fecha: " . date('Y-m-d H:i:s') . "</strong></div>";
                
            } catch (Exception $e) {
                echo "<div class='test-item'><span class='error'>❌</span> Error al incluir config.php: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
            
        } else {
            echo "<div class='test-item'><span class='error'>❌</span> Archivo config/config.php no encontrado</div>";
        }
        ?>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="index.php" style="color: #ADD8E6; text-decoration: none;">← Volver al sitio principal</a>
        </div>
    </div>
</body>
</html>