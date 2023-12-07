<?php
    require_once "au13_contato.php";
    require_once "au13_endereco.php";

    class pessoa {
        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private $cpfCnpj;
        //1-fisica ou 2- jurídica
        private $tipo;
        private $telefone;
        private $endereco;

        public function __construct(){
            $this->inicializaClasse();
        }

        public function toJson() {
            return json_encode(get_object_vars($this));
        }

        private function inicializaClasse() {
            $this->tipo = 1;
            $this->telefone = new contato;
            $this->endereco = new endereco;
        }
        public function getDataNascimento() {
            return $this->dataNascimento;
        }
  
          public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }
  
        public function getNomeCompleto() {
            return $this->nome . " " . $this->sobrenome;
        } 
  
        public function getIdade() {
            if(isset($this->dataNascimento)) {
              $idade = $this->dataNascimento->diff( new \DateTime( date('Y-m-d') ) );
              return $idade->y; 
            }
            return false;
        }
  
        public function getTelefone() {
            return $this->telefone;
        }
  
        public function getEndereco() {
            return $this->endereco;
        }
  
        public function getNome() {
            return $this->nome;
        }
  
        public function setNome($nome) {
            $this->nome = $nome;
        }
  
        public function getSobrenome() {
            return $this->sobrenome;
        }
  
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
    }
?>