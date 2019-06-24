<?php

  /**
   * Controller
   */
class Controller {

    protected $view;

    public function view($name , $data=[]) {
        $this->view = new View($name,$data);
        // var_dump($this->view);
        return $this->view;
    }

}
