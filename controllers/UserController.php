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

            if($result) {
                //$_SESSION['registered'] = "Usuário cadastrado com sucesso! Entre na sua conta";
                $_SESSION['username'] = $username;
                include "views/posts.php";
            } else {
               echo "Usuário não cadastrado. Tente novamente";
            }
        }
        
    }


