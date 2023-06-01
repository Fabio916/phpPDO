<?php

    namespace App\Model;

    class Aluno{

        private $id;
        private $nome;
        private $idade;

        public function setId($id){
            $this->id = $id;
        }
        public function getId($id){
            return $this->id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome($nome){
            return $this->nome;
        }

        public function __toString(): String
        {
            return $this->nome. " ID ".$this->id;
        }
        
    }

?>