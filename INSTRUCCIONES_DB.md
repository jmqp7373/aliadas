# 🗄️ Instrucciones para configurar la Base de Datos en cPanel GoDaddy

## 📋 Pasos para crear la base de datos:

### 1. 🔐 Acceder a cPanel
- Ve a tu panel de control de GoDaddy
- Busca la sección **"Databases"** o **"Bases de datos"**
- Haz clic en **"MySQL Databases"**

### 2. 🆕 Crear nueva base de datos
- En **"Create New Database"**
- Nombre: `aliadaswebcam_db` (o el que prefieras)
- Haz clic en **"Create Database"**
- **IMPORTANTE:** Anota el nombre completo (puede tener un prefijo como `cpanel_aliadaswebcam_db`)

### 3. 👤 Crear usuario de base de datos
- En **"MySQL Users"** 
- Busca **"Add New User"**
- Username: `aliadaswebcam_user` (o el que prefieras)
- Password: `Reylondres7373.` (o una nueva contraseña segura)
- Haz clic en **"Create User"**
- **IMPORTANTE:** Anota el nombre completo del usuario (puede tener prefijo)

### 4. 🔗 Asignar usuario a la base de datos
- En **"Add User To Database"**
- Selecciona el usuario creado
- Selecciona la base de datos creada
- Haz clic en **"Add"**
- **Selecciona todos los privilegios** y guarda

### 5. ⚙️ Actualizar config.php
Una vez creados, actualiza el archivo `config/config.php` con los datos reales:

```php
define('DB_NAME', 'tu_prefijo_aliadaswebcam_db'); // Nombre completo de la DB
define('DB_USER', 'tu_prefijo_aliadaswebcam_user'); // Nombre completo del usuario
define('DB_PASS', 'tu_contraseña_real'); // Contraseña que asignaste
```

### 6. 🧪 Probar la conexión
- Accede a: `https://aliadaswebcam.com.co/test-config.php`
- Verifica que todos los elementos aparezcan en ✅ verde

## 🚨 Problemas comunes:

### Error "Access denied"
- ✅ Verificar nombre de usuario completo (con prefijo)
- ✅ Verificar contraseña correcta
- ✅ Verificar que el usuario tenga privilegios en la DB

### Error "Database does not exist"
- ✅ Verificar nombre de base de datos completo (con prefijo)
- ✅ Verificar que la base de datos esté creada

### Error de conexión
- ✅ En algunos casos GoDaddy usa un host diferente a 'localhost'
- ✅ Verificar en cPanel si hay un host específico para MySQL

## 📞 Datos típicos de GoDaddy:
- **Host**: `localhost` o `IP específica`
- **Puerto**: `3306`
- **Nombres**: Suelen tener prefijo del cPanel (ej: `cpanel123_nombredb`)

---
**💡 Tip:** Algunos proveedores muestran los datos exactos de conexión en el mismo cPanel, busca una sección como "Connection Strings" o "Información de conexión".