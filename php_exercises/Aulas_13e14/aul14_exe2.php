<?php
    class time {
        private $nome;
        private $anoFundacao;
        private $jogadores = Array();

        public function getJogadores() {
            return $this->$jogadores;
        }

        public function addJogador($oJogador) {
            array_push($this->jogadores, $oJogador);
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome() {
            $this->nome = $nome;
        }
    }

    class jogador {
        private $nome;
        private $posicao;
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getPosicao(){
            return $this->posicao;
        }
        public function setPosicao(){
            $this->$posicao = $posicao;
        }
    }

    $team = new time();
    $team->setNome("Adsumus Futsal");

    $jogador = new jogador();
    $jogador->setNome("Ramon");
    $jogador->setPosicao("Fixo");
    
    $team->addJogador($jogador);

    $jogador = new jogador();
    $jogador->setNome("Marlon");
    $jogador->setPosicao("Goleiro");

    $team->addJogador($jogador);
    var_dump($team);
?>