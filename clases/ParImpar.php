<?php
    class ParImpar {
        public $numero;

        // Método para determinar si el número es par o impar
        public function determinarParImpar() {
            if ($this->numero % 2 == 0) {
                return "El número " . $this->numero . " es par.";
            } else {
                return "El número " . $this->numero . " es impar.";
            }
        }	
    }
?>