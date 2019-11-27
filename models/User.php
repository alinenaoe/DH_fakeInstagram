<?php

    include_once 'Connection.php';

    class User extends Connection {

        public function registerUser($username, $useremail, $userpassword, $profileimg) {
            $db = parent::createConnection();
            $query = $db->prepare("INSERT INTO users (username, useremail, userpassword, profileimg) values(?,?,?,?) ");
            $result = $query->execute([$username, $useremail,password_hash($userpassword,PASSWORD_BCRYPT), $profileimg]);
            return $result;
        }

        public function checkUser($username) {
            $db = parent::createConnection();
           
            $query = $db->prepare("SELECT * FROM users WHERE username=?");
            $query->execute([$username]);
            
            //ele fez a consulta no banco de dados, mas precisa colocar isso em fetch para poder usar
            //não entendi pq tem que ser associativa e não objeto
            if ($query != false) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return $result;             
            } 
        }

    }

