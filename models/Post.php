<?php

    include_once 'Conexao.php';

    class Post extends Conexao {

        //parent para informar que a função é do 'pai' - o método é protegido
        public function criarPost($imagem, $descricao) {
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO posts (img, descricao) values(?,?) ");
            $resultado = $query->execute([$imagem, $descricao]);
            return $resultado;
        }

        public function listarPosts () {
            $db = parent::criarConexao();
            //para mostrar do mais recente para o mais antigo, select com id DESC
            $query = $db->query('SELECT * FROM posts order by id DESC');
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

    }