<?php

    include_once 'Connection.php';

    class User extends Connection {

        public function registerUser($username, $userpassword, $profileimg) {
            $db = parent::createConnection();
            $query = $db->prepare("INSERT INTO users (username, userpassword, profileimg) values(?,?,?) ");
            $result = $query->execute([$username, $userpassword, $profileimg]);
            return $result;
        }

    }