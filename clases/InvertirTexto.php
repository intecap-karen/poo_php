<?php
    class InvertirTexto {
    public $texto;
    private $resultado;
    // Método para invertir el texto (soporta caracteres especiales)
    public function invertir() {
        $this->resultado = $this->mb_strrev($this->texto);
        return "El texto invertido es: " . $this->resultado;
    }

    // Función para invertir cadenas multibyte (UTF-8)
    private function mb_strrev($string) {
        $result = '';
        for ($i = mb_strlen($string); $i >= 0; $i--) {
            $result .= mb_substr($string, $i, 1);
        }
        return $result;
    }
}
// mb_strrev() es una función personalizada para invertir cadenas multibyte
    // strrev() invierte el texto   
    // El resultado se almacena en la propiedad $resultado
    // Se devuelve el texto invertido
?>