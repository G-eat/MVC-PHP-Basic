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
    $datas = $query->fetchAll();
    return $datas;
  }

  public function delete($mysql , $data = array()) {
    self::getInstance();
    $query = self::$db->prepare($mysql);
    if (!empty($data)) {
      $query->execute([$data]);
    } else {
      $query->execute();
    }
    $datas = $query->fetchAll();
    header("Location: /home/aboutus");
    return $datas;
  }

}
