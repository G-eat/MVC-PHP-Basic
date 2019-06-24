<?php

/**
 *  Database
 */
class Database {
  private static $user = 'root';
  private static $pass = '';
  private static $db_name = 'blog';

  public static $db;

  public function __construct() {
    try {
       self::$db = new PDO('mysql:host=localhost;dbname='.self::$db_name, self::$user, self::$pass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  }

  public static function getInstance() {
        if (!self::$db) {
            new Database();
        }
        return self::$db;
    }

  public function select($mysql , $data = array()) {
    self::getInstance();
    $query = self::$db->prepare($mysql);
    if (!empty($data)) {
      $query->execute([$data]);
    } else {
      $query->execute();
    }
    $datas = $query->fetchAll();
    return $datas;
  }


}
