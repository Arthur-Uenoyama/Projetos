<?php
    class Imagem{
        private $idImagem;
        private $nomeImagem;
        private $tipo;
        private $eventoImagem;
        private $localizacao;
        private $idcriarevento;

        public function __construct($id, $nome, $tipo, $categoriaImagem,
        $localizacao, $idperfiel)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->categoriaImagem = $categoriaImagem;
            $this->localizacao = $localizacao;
            $this->idperfiel = $idperfiel;
        }
        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}
        public function setNome($nome){$this->nome = $nome;}
        public function getNome(){return $this->nome;}
        public function setTipo($tipo){$this->tipo = $tipo;}
        public function getTipo(){return $this->tipo;}
        public function setCategoriaImagem($categoriaImagem)
        {$this->categoriaImagem = $categoriaImagem;}
        public function getCategoriaImagem()
        {return $this->categoriaImagem;}
        public function setLocalizacao($localizacao){$this->localizacao = $localizacao;}
        public function getLocalizacao(){return $this->localizacao;}
        public function setIDPerfil($idperfiel){$this->idperfiel = $idperfiel;}
        public function getIDPerfil(){return $this->idperfiel;}
        //Método Específico
        public function gerarCodigoImagem(){
            return 
            $this->getLocalizacao().$this->getNome().$this->getTipo();
        }

    }
?>