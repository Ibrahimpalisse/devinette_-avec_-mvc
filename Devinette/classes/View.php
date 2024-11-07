<?php 
Class View {
        private $template;

        public function __construct($template)
        {
            $this->template = $template;
        }

        public function render($devinettes = NULL) 
        {
            $template =  $this->template;
            ob_start();
            $content = ob_get_contents();
            include_once(VIEW.'_gabarit.php');
            include(VIEW.$template.'.php');
        }
    }