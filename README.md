# Repo básico para ejecutar tests TDD

### Instalación

Se basa en el lenguaje de programación PHP.

Debes instalar composer globalmente. [Instrucciones de instalación](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos).

Los requerimientos de la Kata son princopalmente dos
- Librería de testing PHPUnit
- PHP 7.2 o superior

Después de descargar el código ejecuta:

````
composer install
````

### Ejecución  de los tests

Puedes ejecutar el test de prueba con este comando:

````
./vendor/bin/phpunit --bootstrap vendor/autoload.php --colors tests
````

El resultado debería ser algo similar a:

````
PHPUnit 8.2.3 by Sebastian Bergmann and contributors.

.                   1 / 1 (100%)

Time: 31 ms, Memory: 4.00 MB

OK (1 test, 1 assertion)
````

### Advertencias

**Al añadir nuevos ficheros**

Si quieres crear nuevas clases en la carpeta `/src` debes decirle a composer que precargue en su _autoload_ esos ficheros. 

Basta con lanzar este comando

````
composer dumpautoload
````

**Versiones anteriores de PHP**

No está comprobado pero para versiones anteriores de PHP, para que los tests funcionen correctamente hay que hacer los siguientes cambios.

- Eliminar o cambiar la dependencia de la versión de PHP en `composer.json`

- Cambiar la dependencia de PHPUnit por la aconsejada según versión de PHP. [Ver documentación](https://phpunit.de/getting-started/phpunit-8.html)

Más info en https://www.danielprimo.io/
