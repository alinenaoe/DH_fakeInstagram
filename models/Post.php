<?php

    include_once 'Connection.php';

    class Post extends Connection {

        //parent para informar que a função é do 'pai' - o método é protegido
        public function createPost($img, $postText) {
            $db = parent::createConnection();
            $query = $db->prepare("INSERT INTO posts (img, postText) values(?,?) ");
            //dúvida: por que esse formato do execute? não lembro!
            $result = $query->execute([$img, $postText]);
            return $result;
        }

        public function listPosts () {
            $db = parent::createConnection();
            //aqui não precisa do prepare?
            //para mostrar do mais recente para o mais antigo, select com id DESC
            $query = $db->query('SELECT * FROM posts order by id DESC');
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }


    }