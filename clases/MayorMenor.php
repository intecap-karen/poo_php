<?php
    class MayorMenor {
        public $numero1;
        public $numero2;
        public $numero3;

        // Método para encontrar el mayor y menor de los tres números
        public function encontrarMayorMenor() {
            $mayor = $this->numero1;
            $menor = $this->numero1;

            if ($this->numero2 > $mayor) {
                $mayor = $this->numero2;
            }
            if ($this->numero3 > $mayor) {
                $mayor = $this->numero3;
            }

            if ($this->numero2 < $menor) {
                $menor = $this->numero2;
            }
            if ($this->numero3 < $menor) {
                $menor = $this->numero3;
            }

            return "El número mayor es " . $mayor . " y el número menor es " . $menor . ".";
        }
    }
?>