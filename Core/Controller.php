<?php

class Controller{

    public function loadView($viewName,$viewData = array()){
        extract($viewData);
        include_once './views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName,$viewData = array()){
        include_once "./views/template.php";
    }

  
}