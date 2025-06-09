<?php
    class Area{
        public $base;
        public $altura;
        private $resultado;
        // Método para calcular el área de un triángulo

        public function calcularArea() {
            $this->resultado = ($this->base * $this->altura) / 2;
            if (fmod($this->resultado, 1) == 0) {
                // Es un número entero, sin decimales
                return "El área del triángulo es: " . intval($this->resultado);
            } else {
                // Tiene decimales, mostramos con 2
                return "El área del triángulo es: " . number_format($this->resultado, 2);
            }
        }
    }
    // fmod() devuelve el resto de la división de dos números
    // intval() convierte un número a entero
    // number_format() formatea el número a dos decimales
    // Si el resultado es un número entero, se muestra sin decimales
    // Si el resultado tiene decimales, se muestra con dos decimales
?>