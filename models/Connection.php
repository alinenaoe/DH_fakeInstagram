<?php

    class Connection {
        private $host = 'mysql:host=localhost;dbname=fakeInstagram;port=3306';
        private $user = 'root';
        private $pass = '';

        protected function createConnection() {
            return new PDO($this->host,$this->user,$this->pass);
        }
        
    }