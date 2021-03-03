
# Instrucciones para levantar el proyecto

El proyecto esta hecho con Laravel 7. Para levantar el proyecto, desde la carpeta raíz del proyecto ejecutar por la consola lo siguiente: 


```bash
composer update
```

```bash
npm install
```
Luego, es necesario crear un archivo .env en la raíz del proyecto. Para ello, se copia el que ya viene armado con el proyecto.
```bash
cp .env.example .env
```
Luego, se ejecuta lo siguiente para generar la llave de aplicación:
```bash
php artisan key:generate
```

Para la base de datos, es necesario cambiar la configuración en el archivo .env. En este caso, se usó SQLite, por lo es necesario reemplazar por lo siguiente: 
```bash
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/db/database.sqlite
DB_FOREIGN_KEYS=true
```

Después, se corren las migraciones para crear las tablas, con los datos de prueba:
```bash
php artisan migrate:refresh --seed 
```

Finalmente, se levanta la aplicación:
```bash
php artisan serve
```

# Aplicación
Solo se alcanzó a implementar la funcionalidad del punto A. Ésto es: Autenticación, registro y roles de usuarios, y formulario de quiz.
Para acceder a la app una vez que esté corriendo, dirigirse a la ruta que indica (por ejemplo http://127.0.0.1:8000). A la  esquina superior derecha abrá un botón para ir al login, en el cual se permite acceder al sitio. Se encuentran precargadas dos cuentas, una de administrador y una usuario común. Si quiere registrar más usuarios comúnes, puede ir a la ruta **/register**.


- Email: admin@site.com
- Password: secret 


- Email: user@site.com
- Password: secret 

