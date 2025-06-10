<?php
    class CalcularNumeroPerfecto {
        public $numero;
        private $resultado;
        // Método para calcular si un número es perfecto
        public function calcularNumeroPerfecto() {
            $sum = 0;
            for ($i = 1; $i < $this->numero; $i++) {
                if ($this->numero % $i == 0) {
                    $sum += $i;
                }
            }
            if ($sum == $this->numero) {
                return "El número " . $this->numero . " es un número perfecto.";
            } else {
                return "El número " . $this->numero . " no es un número perfecto.";
            }
        }
    }