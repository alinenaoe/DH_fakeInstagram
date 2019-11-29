<?php
    include_once "models/User.php";

    class UserController {
        
        public function acao($routes) {
            switch($routes) {
                case "login":
                    $this->viewLogin();
                break;

                case "logUser":
                    $this->logUser();
                break;

                case "logout":
                    $this->logout();
                break;
            }
        }

 
        private function viewLogin() {
            include "views/login.php";
        }


        private function logUser() {
            session_start();

            $username = $_POST['username']; 
            $user = new User;
            //cria objeto com a classe User para poder usar seu método checkUser

            $userOk = $user->checkUser($username);
            //guarda na variável $userOk o retorno da função de checar se há o usuário digitado
            
            $userpassword = password_verify($_POST['userpassword'], $userOk[0]['userpassword']);       
            //guarda em $userpassword o resultado true ou false se a verificação da senha está ok
            
            if($userpassword) {
                $_SESSION['username'] = $username;
                //var_dump($_SESSION['userid']);
                header('Location:/DH_fakeInstagram/posts');
            } else {
                $_SESSION['loginError'] = "Usuário ou senha incorretos";  
                header('Location:/DH_fakeInstagram/login');
            }            
        }   

        private function logout() {
            session_start();
            session_destroy();
            header('Location:login');
        }
    }


