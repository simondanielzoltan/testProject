<?php
  class Db {
    private static $instance = null;
    private static $hostname = 'localhost';
    private static $userName = 'root';
    private static $userPassword = 'rootpasswordgiven';
    private static $databaseName = 'test';
    private static $port = 3600;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = mysqli_connect(self::$hostname, self::$userName, self::$userPassword, self::$databaseName,self::$port);
        }
        return self::$instance;
    }
}
?>