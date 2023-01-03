<?php
    class connection
    {
        var $conn;
        function __construct()
        {
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $database_name = 'trawind';

            $this->conn =  new mysqli($server,$username,$password,$database_name);
            $this->conn->set_charset('utf8');

            if ($this->conn->connect_error)
            {
                die("Ket noi khong thanh cong!");
            }
        }
    }
?>