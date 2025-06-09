<?php
    class Promedio {
        public $valor1;
        public $valor2;
        public $valor3;
        private $resultado;

        // Método para calcular el promedio de tres valores 
        // y retornar el resultado como una cadena de texto
        public function calcularPromedio() {
            $this->resultado = ($this->valor1 + $this->valor2 + $this->valor3) / 3;
            return "El promedio es: " .  number_format($this->resultado, 2); 
            //el number_format() formatea el número a dos decimales
        }
    }
?>