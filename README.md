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
|tabla|columna_nombre|columna_defecto|columna_nulo|columna_tipo_dato|columna_longitud|columna_descripcion|
|-----|--------------|---------------|------------|-----------------|----------------|-------------------|
|categorias|id||NO|bigint|20||
|failed_jobs|id||NO|bigint|20||
|favoritos|id||NO|bigint|20||
|noticias|id||NO|bigint|20||
|password_resets|email||NO|varchar|255||
|posts|id||NO|int|10||
|preferencias|id||NO|bigint|20||
|users|id||NO|bigint|20||
|categorias|nombre||NO|varchar|255||
|failed_jobs|uuid||NO|varchar|255||
|favoritos|id_usuario||NO|bigint|20||
|noticias|titulo||NO|varchar|255||
|password_resets|token||NO|varchar|255||
|posts|user_id||NO|int|10||
|preferencias|id_usuario||NO|bigint|20||
|users|name||NO|varchar|255||
|categorias|created_at|NULL|YES|timestamp|||
|failed_jobs|connection||NO|text|65535||
|favoritos|id_noticia||NO|bigint|20||
|noticias|descripcion||NO|text|65535||
|password_resets|created_at|NULL|YES|timestamp|||
|posts|title||NO|varchar|255||
|preferencias|id_categoria||NO|bigint|20||
|users|email||NO|varchar|255||
|categorias|updated_at|NULL|YES|timestamp|||
|failed_jobs|queue||NO|text|65535||
|favoritos|created_at|NULL|YES|timestamp|||
|noticias|id_categoria||NO|bigint|20||
|posts|body||NO|text|65535||
|preferencias|created_at|NULL|YES|timestamp|||
|users|email_verified_at|NULL|YES|timestamp|||
|failed_jobs|payload||NO|longtext|4294967295||
|favoritos|updated_at|NULL|YES|timestamp|||
|noticias|fecha||NO|date|||
|posts|created_at|NULL|YES|timestamp|||
|preferencias|updated_at|NULL|YES|timestamp|||
|users|password||NO|varchar|255||
|failed_jobs|exception||NO|longtext|4294967295||
|noticias|created_at|NULL|YES|timestamp|||
|posts|updated_at|NULL|YES|timestamp|||
|users|remember_token|NULL|YES|varchar|100||
|failed_jobs|failed_at|current_timestamp()|NO|timestamp|||
|noticias|updated_at|NULL|YES|timestamp|||
|users|created_at|NULL|YES|timestamp|||
|users|updated_at|NULL|YES|timestamp|||
