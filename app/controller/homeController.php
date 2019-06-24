<?php
// include DATABASE . DIRECTORY_SEPARATOR . 'database.php';

/**
 * homeController
 */
class homeController extends Controller {
  private $pdo;

  public function index($id='') {

    if (empty($id)) {
      include VIEW.'error.php';
    } else {
      $mysql = 'SELECT * FROM home WHERE id = ?';
      $data = $this->pdo = Home::select($mysql,$id);
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
    $data = $this->pdo = Home::select($mysql);

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
