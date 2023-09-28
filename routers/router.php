<?php
class router{

    private $controller;
    private $method;

      public function __construct(){
        $this->matchRoute();
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

    private function show404Error() {
        echo "Error 404 - Página no encontrada";
        exit;
    }
 
}
?>