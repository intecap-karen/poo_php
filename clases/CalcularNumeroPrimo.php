<?php
    class CalcularNumeroPrimo{
        public $numero;
        private $resultado;

        // Método para calcular si el número es primo
        public function calcularNumeroPrimo(){
            if ($this->numero < 2) {
                return "El número debe ser mayor o igual a 2.";
            }
            for ($i = 2; $i <= sqrt($this->numero); $i++) {
                if ($this->numero % $i == 0) {
                    return "El número " . $this->numero . " no es primo.";
                }
            }
            return "El número " . $this->numero . " es primo.";
        }
    }
?>