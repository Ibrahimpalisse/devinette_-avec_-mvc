<?php


class Routeur
{
    private $request;
    private $routes = [
        "home" => ["controller" => "Home", "method" => "showHome"],
        "contact" => ["controller" => "Home", "method" => "showContact"],
    ];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function renderController()
    {
        $request = $this->request;

        if (array_key_exists($request, $this->routes)) {
            $controllerName = $this->routes[$request]["controller"];
            $method = $this->routes[$request]["method"];

            include_once(CONTROLLER . $controllerName . ".php");

            $controller = new $controllerName();
            $controller->$method();

        } else {
            echo "404";
        }
    }
}
?>
