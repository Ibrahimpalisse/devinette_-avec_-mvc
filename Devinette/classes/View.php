<?php 
Class View {
        private $template;

        public function __construct($template = null) 
        {
            $this->template = $template;
        }

        public function render($params = array()) 
        {
           /* foreach ($params as $name => $value) {
                ${$name} = $value;
            }*/

            extract($params);
            
            $template =  $this->template;
            ob_start();
            $content = ob_get_contents();
            include_once(VIEW.'_gabarit.php');
            include(VIEW.$template.'.php');
        }

        public function redirect($route)
        {
            header("Location: ".HOST.$route);
        }
    }  
