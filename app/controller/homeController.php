<?php

/**
 * homeController
 */
class homeController extends Controller {

  public function index($id='') {
    if (empty($id)) {
      header("Location: /home/aboutus");
    } else {
      $mysql = 'SELECT * FROM home WHERE id = ?';
      $data = Home::select($mysql,$id);
      if (count($data) <= 0) {
        include VIEW.'errorlink.php';
      } else {
        $this->view('home\index',[
          'data' => $data
        ]);
        $this->view->render();
      }
    }
  }

  public function aboutUs() {
    $mysql = 'SELECT * FROM home';
    $data = Home::select($mysql);

    $this->view('home\aboutUs',[
      'data' => $data
    ]);
    $this->view->render();
  }

  public function delete($id='') {
    $mysql = 'DELETE FROM home WHERE id = ?';
    $data = $this->pdo = Home::delete($mysql,$id);

    $this->view('home\aboutUs',[
      'data' => $data
    ]);
    $this->view->render();
  }
}
