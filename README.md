<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<b>Proyecto Laravel para practica 3 unidad 3 TPI</b>
</p>

## Requisitos para ejecutar este proyecto
**Tener instalado los siguientes programas**

- Composer
- Node
- Laravel
- MariaDB

## Pasos antes compilar el proyecto
- Crear una base de datos vacia en mariadb
- crear un archivo llamado .env en la raiz del proyecto siguiendo el ejemplo de .env.example
- reemplazar los valores siguientes
	- DB_DATABASE=**{{Nombre de la base de datos}}**
	- DB_USERNAME=**{{Nombre de usuario del motor de base de datos (root por deferto)}}**
	- DB_PASSWORD= **{{Contraseña del motor de base de datos}}**

## Pasos para compilar el proyecto
Los siguientes pasos deben ser ejecutados desde la consola apuntando a la ruta raiz de este proyecto

- npm install
- composer install
- php artisan migrate

## Para ejecutarlo en un servidor de desarrollo ejecutar el siguiente comando

- **php artisan serve**

### Integrantes del equipo

- **Natalia Sofia Martinez Lima - [ML17002](mailto:ml17002@ues.edu.sv)**
- **Rafael Edgardo Garcia Estrada - [GE17001](mailto:ge17001@ues.edu.sv)**
- **Mario Edgardo Vanegas Cardoza - [VC17018](mailto:vc17018@ues.edu.sv)**
