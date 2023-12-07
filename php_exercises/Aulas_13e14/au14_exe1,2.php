<?php
    class computer{
        private $estadoAtual;

        public function liga() {
            $this-> estadoAtual = "Ligado";
        }

        public function desliga() {
            $this->estadoAtual = "Desligado";
        }

        public function getEstadoAtual() {
            return $this->estadoAtual;
        }
    }
    $comp = new computer();
    $comp->liga();
    echo "Estado Atual: " . $comp->getEstadoAtual() . "<br>";
    $comp->desliga();
    echo "Estado Atual: " . $comp->getEstadoAtual() . "<br>";
?>
