<?php

    include_once 'Conexao.php';

    class Post extends Conexao {

        public function criarPost($imagem, $descricao) {
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO post (img, descricao) values(?,?) ");
            $query->execute([$imagem, $descricao]);
        }

    }