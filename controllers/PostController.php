<?php

    include_once "models/Post.php";
    include_once "models/User.php";

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

                case "new-user":
                    $this->viewNewUser();
                break;
                
                case "register-user":
                    $this->registerUser();
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

            $fileName = $_FILES["img"]["name"];
            $tempLink = $_FILES["img"]["tmp_name"];
            $filePath = "views/img/$fileName";
            move_uploaded_file($tempLink,$filePath);

            $post = new Post();
            $result = $post->createPost($filePath,$postText);
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

        private function viewNewUser() {
            include "views/newUser.php";
        }

        private function registerUser() {
            $username = $_POST['username'];
            $userpassword = $_POST['userpassword'];

            $fileName = $_FILES["profileimg"]["name"];
            $tempLink = $_FILES["profileimg"]["tmp_name"];
            $filePath = "views/img/$fileName";
            move_uploaded_file($tempLink,$filePath);

            $user = new User();
            $result = $user->registerUser($username, $userpassword, $filePath);
            //var_dump($result);
            if($result) {
                echo "Usuário cadastrado com sucesso!";
            } else {
               echo "Usuário não cadastrado. Tente novamente";
            }
        }
        


    }
