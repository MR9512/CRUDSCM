<?php 
class homeController{

    public function __construct(){
        $this->bulmaCSS = "../assets/css/bulma.min.css"; 
        $this->estilosCSS = "../assets/css/estilos.css";
        $this->js = "assets/js/nabvar.js";
    }

    public function dashboard(){
        require_once("views/templates/header.php");
        require_once("views/home/nabvar.php");
        require_once("views/home/dashboard.php");
        require_once("views/templates/footer.php");
    }
}
?>
