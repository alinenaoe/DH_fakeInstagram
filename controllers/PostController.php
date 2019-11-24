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

                case "login":
                    $this->viewLogin();
                break;

                case "check-user":
                    $this->checkUser();
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
        
        private function viewLogin() {
            include "views/login.php";
        }

        private function checkUser() {
            session_start();

            $login = new User;
            $users = $login->listUsers();
            $_REQUEST['users'] = $users;

            if(isset($_POST['username']) && isset($_POST['userpassword'])) {
                foreach ($users as $user) {
                    if ($_POST['username'] == $user['username'] && password_verify($_POST['userpassword'],$user['userpassword'])) {
                        $_SESSION['username'] = $user['username'];
                        header('Location:/DH_fakeInstagram/posts');
                    } else {
                        $_SESSION['loginError'] = "Usuário ou senha incorretos";  
                        include "views/login.php";
                        break;
                    }
                }
            } else {
              $_SESSION['loginError'] = "Usuário ou senha incorretos";  
              include "views/login.php";
            };


            }

    }


