<?php
    class DB
    {
        protected $dsn = 'mysql:host=localhost;dbname=sql_vedepvietnam; charset=utf8';
        protected $username = 'root';
        protected $password = '';
        //protected $dsn = 'mysql:host=sql203.byethost7.com;dbname=b7_28397751_vietnamtravel; charset=utf8';
        //protected $username = 'b7_28397751';
        //protected $password = '123456';
        protected $conn;
        protected $option="PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'";
        function __construct()
        {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
        }   
    }
?>