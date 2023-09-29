<?php
class router{

    private $controller;
    private $method;

      public function __construct(){
        $this->bulmaCSS = "../assets/css/bulma.min.css"; 
        $this->matchRoute();
      }
        
          public function show404Error() {
            require_once("views/templates/header.php");
            require_once("views/404/404.php");
            require_once("views/templates/footer.php");
            exit;
          }

         public function matchRoute(){
            $url = explode("/", URL);
            $this->controller = $url[1];
            $metodo = explode("?", $url[2]);
               if ($url[2] == "") {
                  $this->method = "dashboard";
               } else {
                  $this->method = $metodo[0];
               }
            $this->controller = $this->controller . "Controller";
            if (file_exists("Controllers/" . $this->controller . ".php")) {
                require_once "Controllers/" . $this->controller . ".php";
            } else {
                $this->show404Error();
            }
        }

         public function run(){
            $controller = new $this->controller();
               if (method_exists($controller, $this->method)) {
                  $method = $this->method;
                  $controller->$method();
               } else {
                  $this->show404Error();
               }
          }
 
}
?>