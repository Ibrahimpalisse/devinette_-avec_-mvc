<?php

class Routeur
{
    private $request;
    private $routes = [
        "home" => "home",
    ];

    public function __construct($request)
    {
        $this->request = $request; // Correction ici
    }

    public function renderController()
    {
        $request = $this->request;

        if (array_key_exists($request, $this->routes)) {
            $controller = $this->routes[$request];
            include_once(CONTROLLER . $controller . ".php");

            
        } else {
            echo "404";
        }
    }
}
?>
