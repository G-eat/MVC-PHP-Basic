<?php

/**
 * postController
 */
class postController extends Controller {

  public function all() {
    $mysql = 'SELECT * FROM blog';
    $data = $this->pdo = Post::select($mysql);

    $this->view('post\all',[
      'data' => $data
    ]);
    $this->view->render();
  }

  public function individual( $id='') {
    $mysql = 'SELECT * FROM blog WHERE id = ?';
    $data = $this->pdo = Post::select($mysql,$id);
    if (count($data) <= 0) {
      include VIEW.'errorlink.php';
    } else {
      $this->view('post\individual',[
        'data' => $data
      ]);
      $this->view->render();
    }
  }
}
