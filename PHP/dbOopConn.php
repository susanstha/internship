<?php
    class DbConn{

        protected $servername = 'localhost';
        protected $username = 'root';
        protected $password = '';
        protected $dbname = 'mydb';

        function connection(){
            $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            // if ($conn->connect_error) {
            //     die("Connection failed: " . $conn->connect_error);
            // }
            // echo "hello";
            return $conn;
        }
    }
?>