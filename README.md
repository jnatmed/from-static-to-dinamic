# Proyecto Paw


## Instalacion y Ejecucion (local)

* `git clone https://github.com/lucasrueda01/PAW-2024.git`
* `cd composer install`
* cp .env.example .env # Editar el .env con los valores deseados
* Ejecutar migrations: `phinx migrate -e development`
* Ejecutar `php -S localhost:8080 -t public/`

### Instalacion de Librerias para el manejo de Base de datos

* [robmorgan/phinx](https://phinx.org/), 
    - en windows: hay q configurar la variable de entorno. 
    comandos: 
        (en el cmd del sistema, fuera de vs-code)
        - `composer global require robmorgan/phinx` 
#### Requerimientos

- Tener instalado un base de datos, ejemplo: MySQL (version 8.0.36.0), [link de descarga](https://dev.mysql.com/get/Downloads/MySQLInstaller/mysql-installer-community-8.0.36.0.msi)
- una vez instalado acceder desde linea de comandos con:

```shell
mysql -u root -p    


LICENSE.md
CHANGELOG.md
CONTRIBUTION.md
AUTORES.md