
# Proyecto Laravel

Este es un proyecto desarrollado en Laravel. A continuación, se describen los pasos para clonar, configurar y ejecutar el proyecto en un entorno local.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes programas:

- [PHP](https://www.php.net/downloads) >= 8.2
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/) y [NPM](https://www.npmjs.com/get-npm)
- [Git](https://git-scm.com/downloads)

## Instalación

### 1. Clonar el repositorio

Clona este repositorio en tu máquina local usando Git:

```bash
git clone https://github.com/ytucayasi/proj-pachu.git
```

### 2. Navegar al directorio del proyecto

```bash
cd proj-pachu
```

### 3. Instalar dependencias de PHP

Usa Composer para instalar las dependencias de PHP necesarias:

```bash
composer install
```

### 4. (OPCIONAL) Copiar el archivo de entorno

Copia el archivo `.env.example` y renómbralo a `.env`:

```bash
cp .env.example .env
```

### 5. Generar la clave de la aplicación

Genera una nueva clave de aplicación para Laravel:

```bash
php artisan key:generate
```

### 6. (OPCIONAL) Configurar el archivo .env

Abre el archivo `.env` y configura los siguientes valores según tu entorno:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

### 7. (OPCIONAL) Crear la base de datos

Asegúrate de crear la base de datos en tu servidor MySQL o gestor de bases de datos que estés utilizando. Usa el nombre de la base de datos que configuraste en el archivo `.env`.

### 8. (OPCIONAL) Ejecutar migraciones

Ejecuta las migraciones para crear las tablas en la base de datos:

```bash
php artisan migrate
```

### 9. Instalar dependencias de Node.js

Usa NPM para instalar las dependencias de Node.js necesarias:

```bash
npm install
```

### 10. Compilar los assets

Compila los assets del frontend con Laravel Mix:

```bash
npm run dev
```

### 11. Ejecutar el servidor de desarrollo

Finalmente, ejecuta el servidor de desarrollo de Laravel:

```bash
npm run dev
```

Luego, abre tu navegador y navega a la ruta que te aparece al ejecutar el comando antes mencionado.