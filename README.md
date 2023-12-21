# Getting started

## Installation

Consulte la guía de instalación oficial de Laravel para conocer los requisitos del servidor antes de iniciar la VERSIÓN LARAVEL (8.83.27).

Clonar el repositorio

    git clone https://github.com/Clara-giraldo/pruebaConocimiento.git

Cambiar a la carpeta del repositorio

    cd NewsHub

Instale todas las dependencias usando Composer.

    composer install

Copie el archivo env de ejemplo y realice los cambios de configuración necesarios en el archivo .env

    cp .env.example .env


Ejecute las migraciones de la base de datos (**Establezca la conexión de la base de datos en .env antes de migrar**)

    php artisan migrate

Inicie el servidor de desarrollo local

    php artisan serve

Ahora puede acceder al servidor por http://localhost:8000 or http://127.0.0.1:8000


----------
