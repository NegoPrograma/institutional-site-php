<?php


class HomeController extends Controller {

    /**
     * 
     */
    private $data = array();

    
    public function index(){
        $portfolio = new PortfolioModel();
        
        $this->data = [
            "portfolio" => $portfolio->getPictures(8)
        ];

        $this->loadTemplate("home",$this->data);
    }

    public function fotos(){
        $pictures = new PictureModel();
        $this->data = $pictures->getPictures();
        
        $this->loadTemplate("fotos",$this->data);
    }

    public function sobre(){
        $this->loadTemplate('sobre',$this->data);
    }
    
};