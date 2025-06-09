<?php
    class OperacionesBasicas {
        // Atributos = caracteristicas = variables
        public $valor1;
        public $valor2;
        private $resultado;
        // metodos = acciones = funciones
        public function sumar(){
            $this->resultado = $this->valor1 + $this->valor2;
            return "La suma es: " . $this->resultado;
        }
        public function restar(){
            $this->resultado = $this->valor1 - $this->valor2;
            return "La resta es: " . $this->resultado;
        }
        public function multiplicar(){
            $this->resultado = $this->valor1 * $this->valor2;
            return "La multiplicacion es: " . $this->resultado;
        }
        public function dividir(){
            $this->resultado = $this->valor1 / $this->valor2;
            return "La division es: " . $this->resultado;
        }
    }
?>