<?php 
class loginController{

    public function __construct(){
        $this->bulmaCSS = "../assets/css/bulma.min.css"; 
        $this->estilosCSS = "../assets/css/estilos.css";
    }

    public function ingreso(){
        require_once("views/templates/header.php");
        require_once("views/login/login.php");
        require_once("views/templates/footer.php");
    }
}
?>
