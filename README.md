<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Examen parcial práctico

## Instalación y Uso

### Usuarios externos autorizados en el repositorio
vdcriollo@espe.edu.ec

### 1. Clonar el repositorio
Ejecutar la clonación del proyecto y acceder al directorio:https://github.com/andy031002/pry_auth_microservice.git
git clone https://github.com/andy031002/pry_auth_microservice.git

### 2. Instalar dependencias
Instalar las librerías requeridas mediante Composer:
composer install

### 3. Configurar el entorno
Crear el archivo de entorno a partir del archivo base:
cp .env.example .env

Actualizar el archivo .env con la siguiente configuración:

DB_CONNECTION=mysql
DB_HOST= tu host
DB_PORT=3306
DB_DATABASE=db_authentication_post
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

### 4. Generar la clave
Generar la clave interna para la aplicación:
php artisan key:generate

### 5. Ejecutar migraciones
Aplicar las migraciones de base de datos para crear las tablas necesarias:
php artisan migrate

### 6. Desplegar el servicio
Iniciar el servidor de la aplicación indicando la dirección y el puerto deseado:
php artisan serve --host ip --port puerto
