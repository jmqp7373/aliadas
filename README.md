# 🎥 Aliadas Webcam - Sitio Web Oficial

Sitio web oficial de Aliadas Webcam con despliegue automático.

## 🚀 Despliegue Automático

El sitio se despliega automáticamente a GoDaddy usando GitHub Actions:
- ✅ Push a `main` → Despliegue automático
- ✅ FTP seguro a servidor de producción
- ✅ Actualización instantánea del sitio web

## 📁 Estructura del Proyecto

```
├── config/
│   └── config.php              # Configuración de base de datos
├── .github/workflows/
│   └── deploy.yml              # Configuración GitHub Actions
├── index.php                   # Página principal del sitio
├── db-test.php                 # Prueba de conexión DB (temporal)
├── .gitignore                  # Archivos a ignorar
└── README.md                   # Documentación del proyecto
```

## 🛠️ Tecnologías

- **Frontend**: HTML5, CSS3, PHP
- **Base de datos**: MySQL (GoDaddy cPanel)
- **Backend**: PHP con PDO
- **Despliegue**: GitHub Actions + FTP
- **Hosting**: GoDaddy

## 🗄️ Base de Datos

La configuración de base de datos se encuentra en `config/config.php`:

- **Servidor**: localhost
- **Puerto**: 3306 (MySQL)
- **Charset**: UTF-8 (utf8mb4)
- **Conexión**: PDO con prepared statements

### Configurar Base de Datos:

1. Accede al cPanel de GoDaddy
2. Ve a "MySQL Databases"
3. Crea la base de datos: `aliadaswebcam_db`
4. Crea un usuario y asígnalo a la DB
5. Actualiza las credenciales en `config/config.php`

## 📋 Comandos Útiles

```bash
# Desplegar cambios
git add .
git commit -m "Descripción del cambio"
git push origin main
```

---
**© 2025 Aliadas Webcam - Todos los derechos reservados**