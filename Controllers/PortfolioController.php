<?php


class PortfolioController extends Controller {

    /**
     * 
     */
    private $data = array();

    
    public function index(){
        $portfolio = new PortfolioModel();
        
        $this->data = [
            "portfolio" => $portfolio->getPictures()
        ];

        $this->loadTemplate("portfolio",$this->data);
    }
    

    
};