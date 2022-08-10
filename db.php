<?php
  class Db {
    private static $instance = null;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = mysqli_connect("localhost", "root", "rootpasswordgiven", "test",3600);
        }
        return self::$instance;
    }
}
?>