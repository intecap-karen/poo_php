<?php
    class CalcularVocales {
        public $texto;
        private $resultado;
        // Método para contar las vocales en el texto
        public function contarVocales() {
            $vocales = ['a', 'e', 'i', 'o', 'u'];
            $conteo = 0;
            $textoMinuscula = strtolower($this->texto);
            
            // Recorremos cada carácter del texto
            for ($i = 0; $i < strlen($textoMinuscula); $i++) {
                // Si el carácter es una vocal, incrementamos el conteo
                if (in_array($textoMinuscula[$i], $vocales)) {
                    $conteo++;
                }
            }
            return "El número de vocales en el texto es: " . $conteo;
        }
    }