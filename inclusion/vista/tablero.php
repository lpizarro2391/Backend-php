<?php

    class Visualizador
    {
        private $mensaje;

        function __construct($mensaje)
        {
            $this ->mensaje = $mensaje;
        }

        public function MostrarNorma(){
            echo "<p>". $this->mensaje. "</p>";
        }

        public function mostrarTitulo(){
            echo "<h1>".$this->mensaje. "</h1>";
        }
    }

?>