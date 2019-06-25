<?php

/**
 *  Post
 */
class Home extends Database {

  public function select($mysql , $data = array()) {
    self::getInstance();
    $query = self::$db->prepare($mysql);
    if (!empty($data)) {
      $query->execute([$data]);
    } else {
      $query->execute();
    }
    $data = $query->fetchAll();
    return $data;
  }

  public function delete($mysql , $data = array()) {
    self::getInstance();
    $query = self::$db->prepare($mysql);
    if (!empty($data)) {
      $query->execute([$data]);
    } else {
      $query->execute();
    }
    $data = $query->fetchAll();
    header("Location: /home/aboutus");
    return $data;
  }

}
