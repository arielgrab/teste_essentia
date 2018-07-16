# teste Essentia Pharma

Getting Started
--------------------------------------------------

Rodar o arquivo db/dump.sql no mysql.

--------------------------------------------------

Alterar as credenciais do banco de dados no arquivo db/Connection.php:

~~~ php
<?php

class Connection extends \PDO 
{
 
    const HOST = 'localhost';
    const DB = 'teste_essentia';
    const USER = 'phpmyadmin';
    const PASS = 'some_pass';


?>
~~~ 

--------------------------------------------------

E finalmente rodar o servidor do PHP:

```
php -S localhost:8000
```
