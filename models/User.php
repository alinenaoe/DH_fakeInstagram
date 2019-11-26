<?php

    include_once 'Connection.php';

    class User extends Connection {

        public function registerUser($username, $useremail, $userpassword, $profileimg) {
            $db = parent::createConnection();
            $query = $db->prepare("INSERT INTO users (username, useremail, userpassword, profileimg) values(?,?,?,?) ");
            $result = $query->execute([$username, $useremail, password_hash($userpassword,PASSWORD_BCRYPT), $profileimg]);
            return $result;
        }

        //verificar se está correto este método
        public function listUsers() {
            $db = parent::createConnection();
            $query = $db->query('SELECT * FROM users');
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }

    }