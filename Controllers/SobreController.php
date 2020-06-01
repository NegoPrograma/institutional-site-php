<?php


class SobreController extends Controller {

    /**
     * 
     */
    private $data = array();

    
    public function index(){
        $this->loadTemplate("sobre",$this->data);
    }
    

    
};