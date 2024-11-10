# 📝 Task Management API - Backend

Esta es la API backend para una aplicación de gestión de tareas, desarrollada con **Laravel 10** y **JWT** para la autenticación. La API permite gestionar usuarios y tareas mediante peticiones REST.

## 🚀 Requisitos

- **PHP >= 8.1**
- **Composer**
- **PostgreSQL** (puedes ajustar las configuraciones si prefieres MySQL)
- **[jwt-auth](https://github.com/tymondesigns/jwt-auth)** para autenticación JWT en Laravel

## 📥 Instalación

Sigue estos pasos para instalar y configurar el proyecto.

1. **Clona el repositorio y navega a la carpeta del backend.**

   ```bash
   git clone <repositorio_url>
   cd backend
   
2. ** Instala las dependencias de PHP **
   ```bash
   composer install

3. ** Crea el archivo .env copiando el archivo de ejemplo y configura tu base de datos. **
    ```bash
    cp .env.example .env

4. ** Configura las credenciales de las bases de datos. **
    ```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nombre_base_datos
    DB_USERNAME=usuario
    DB_PASSWORD=contraseña
5. ** Genera las claves de aplicación y JWT. **
    ```bash
    php artisan key:generate
    php artisan jwt:secret
6. ** Ejecuta las migraciones para crear los usuarios de prueba. ** 
    ```bash
    php artisan migrate
    

7. ** Inicia el servidor. **
    ```bash
    php artisan serve






    
