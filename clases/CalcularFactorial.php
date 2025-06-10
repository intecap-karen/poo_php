<?php
    class CalcularFactorial {
        public $numero;
        private $resultado;

        // Método para calcular el factorial
        public function calcularFactorial() {
            if ($this->numero < 0) {
                return "El factorial no está definido para números negativos.";
            }
            $this->resultado = 1;
            for ($i = 1; $i <= $this->numero; $i++) {
                $this->resultado *= $i;
            }
            return "El factorial de " . $this->numero . " es " . $this->resultado . ".";
        }
    }