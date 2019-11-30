<?php

    include_once "models/Post.php";

    class PostController {
        
        public function acao($routes) {
            switch($routes) {
                case "posts":
                    $this->listPosts();
                break;

                case "new-post":
                    $this->viewNewPost();
                break;

                case "send-post":
                    $this->sendPost();
                break;

                case "like":
                    $this->likePost();
                break;
            }
        }

        private function viewNewPost() {
            include "views/newPost.php";
        }


        private function viewPosts() {
            include "views/posts.php";
        }


        private function sendPost() {
            session_start();        
            
            $postText = $_POST['postText'];
            $username = $_SESSION['username'];

            $fileName = $_FILES["img"]["name"];
            $tempLink = $_FILES["img"]["tmp_name"];
            $filePath = "views/img/$fileName";
            move_uploaded_file($tempLink,$filePath);

            $post = new Post();
            $result = $post->createPost($filePath,$postText,$username);
            //var_dump($result);
            if($result) {
                header('Location:/DH_fakeInstagram/posts');
            } else {
                // header('Location:/DH_instagramMVC/posts');
               echo "Seu post não foi cadastrado. Tente novamente";
            }
        }

        private function listPosts() {
            $post = new Post;
            $listPosts = $post->listPosts();
            $_REQUEST['posts'] = $listPosts;
            $this->viewPosts();
        }
        
        private function likePost() {
            session_start();
            $post = new Post;
            $likes = $_SESSION['likes'];
            $postId = $_SESSION['id'];
            $result = $post->likePost($likes,$postId);
            if($result) {
                echo $_SESSION['id'];
                echo $_SESSION['likes'];
                header("Location:posts#$postId");
            }
        }

    }