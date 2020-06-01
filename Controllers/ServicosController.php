<?php


class ServicosController extends Controller {

    /**
     * 
     */
    private $data = array();

    
    public function index(){
        $this->loadTemplate("servicos",$this->data);
    }
    

    
};