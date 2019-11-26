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
            }
        }

        private function viewNewPost() {
            include "views/newPost.php";
        }


        private function viewPosts() {
            include "views/posts.php";
        }


        private function sendPost() {
            $postText = $_POST['postText'];
            $userid = $_SESSION['userid'];

            $fileName = $_FILES["img"]["name"];
            $tempLink = $_FILES["img"]["tmp_name"];
            $filePath = "views/img/$fileName";
            move_uploaded_file($tempLink,$filePath);

            $post = new Post();
            $result = $post->createPost($filePath,$postText,$userid);
            var_dump($result);
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


    }


