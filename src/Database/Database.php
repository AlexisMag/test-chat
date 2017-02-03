<?php
namespace Database;

class Database{
    private static $config;
    private static $pdo;
    
    public static function setConfig($config){
        static::$config = $config;
    }
    
    public static function getInstance(){        
        if(!isset(self::$pdo)){
            self::$pdo = new \PDO(
                    'mysql:dbname=' . self::$config['db']['database'] . ';host=' . self::$config['db']['host'],
                    self::$config['db']['username'],
                    self::$config['db']['password'],
                    array(
                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                    )
            );
        }
        return self::$pdo;
    }
}

