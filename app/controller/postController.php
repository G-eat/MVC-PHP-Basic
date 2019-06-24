<?php

/**
 * postController
 */
class postController extends Controller {
  private $pdo;

  public function all() {
    $mysql = 'SELECT * FROM blog';
    $data = $this->pdo = Database::select($mysql);

    $this->view('post\all',[
      'data' => $data
    ]);
    $this->view->render();
  }
}
