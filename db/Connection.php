<?php
namespace Database;

class Connection extends \PDO 
{
 
    const HOST = 'localhost';
    const DB = 'teste_essentia';
    const USER = 'root';
    const PASS = 'some_pass';


    private static $instance;
 
    public function Connection($dsn, $username = "", $password = "") 
    {
        parent::__construct($dsn, $username, $password);
    }
 
    public static function getInstance() 
    {
        if(!isset( self::$instance )){
            try {
                self::$instance = new Connection("mysql:host=".self::HOST.";dbname=".self::DB, self::USER, self::PASS);
            } catch ( Exception $e ) {
                echo 'Erro ao conectar';
                exit ();
            }
        }
        return self::$instance;
    }
}