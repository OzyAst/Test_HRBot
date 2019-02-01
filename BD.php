<?php

Class BD{
  const USERNAME="root";
  const PASSWORD="";
  const HOST="localhost";
  const DB="hr-bot";
  private static $instance;

  private function __construct() {}

  public static function getConnection(){
    if (!empty(self::$instance)) {
      return self::$instance;
    }

    $username = self::USERNAME;
    $password = self::PASSWORD;
    $host = self::HOST;
    $db = self::DB;

    self::$instance = new PDO("mysql:dbname=$db;host=$host", $username, $password);
    return self::$instance;
  }
}
