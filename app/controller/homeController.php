<?php

/**
 * homeController
 */
class homeController extends Controller {
  private $pdo;

  public function index($id='') {
    
    if (empty($id)) {
      include VIEW.'error.php';
    } else {
      $mysql = 'SELECT * FROM blog WHERE id = ?';
      $data = $this->pdo = Database::select($mysql,$id);

      $this->view('home\index',[
        'data' => $data
      ]);
      $this->view->render();
    }

  }

  public function aboutUs() {
    $mysql = 'SELECT * FROM blog';
    $data = $this->pdo = Database::select($mysql);

    $this->view('home\aboutUs',[
      'data' => $data
    ]);
    $this->view->render();
  }
}
