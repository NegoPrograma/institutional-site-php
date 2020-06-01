<?php


class ContatoController extends Controller {

    /**
     * 
     */
    private $data = array();

    
    public function index(){
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['message']);

            $destiny = "isaacsms@id.uff.br";
            $title = "Teste!";
            $msg = "Name:".$name."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;

            $msgHeader = "From: {$destiny}"."\r\n".
                'Reply-To: '.$email."\r\n".
                'X-Mailer: PHP/'.phpversion();
            print_r($_POST);
            mail($destiny,$msg,$msgHeader);
            $this->data['warning'] = "E-mail enviado!";
        }
        
        $this->loadTemplate("contato",$this->data);
    }
    

    
};