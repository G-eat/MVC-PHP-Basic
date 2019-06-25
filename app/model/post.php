<?php

/**
 *  Post
 */
class Post extends Database {

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
