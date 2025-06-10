<?php
    class Potencia{
        public $base;
        public $exponente;
        private $resultado;
        
        // Método para calcular la potencia
        public function calcularPotencia(){
            $this->resultado = pow($this->base, $this->exponente);
            return "El resultado de " . $this->base . " elevado a la " . $this->exponente . " es " . $this->resultado . ".";
        }
    }