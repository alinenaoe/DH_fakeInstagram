<?php
    include_once "models/User.php";

    class UserController {
        
        public function acao($routes) {
            switch($routes) {
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

        private function viewNewUser() {
            include "views/newUser.php";
        }

        private function registerUser() {
            $username = $_POST['username'];
            $userpassword = $_POST['userpassword'];
            $useremail = $_POST['useremail'];

            $fileName = $_FILES["profileimg"]["name"];
            $tempLink = $_FILES["profileimg"]["tmp_name"];
            $filePath = "views/img/$fileName";
            move_uploaded_file($tempLink,$filePath);

            $user = new User();
            $result = $user->registerUser($username, $useremail, $userpassword, $filePath);
            //var_dump($result);
            if($result) {
                //echo "Usuário cadastrado com sucesso!";
                $_SESSION['registered'] = "Usuário cadastrado com sucesso! Entre na sua conta";
                include "views/login.php";
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
            //guarda na variável $login a lista de usuários do banco de dados
            $users = $login->listUsers();
            //guarda na global Request a lista de usuários
            $_REQUEST['users'] = $users;
            //var_dump($users);

            foreach ($users as $user) {
                //var_dump($user->username);
                if ($_POST['username'] == $user->username && password_verify($_POST['userpassword'],$user->userpassword)) {
                    $_SESSION['username'] = $user->username;
                    $_SESSION['userid'] = $user->id;
                    //var_dump($_SESSION['userid']);
                    header('Location:/DH_fakeInstagram/posts');
                    break;
                } else {
                    $_SESSION['loginError'] = "Usuário ou senha incorretos";  
                    header('Location:/DH_fakeInstagram/login');
                }
            }
        }   
    }


