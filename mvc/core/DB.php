<?php

class DB{
    public $con;
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'jewellery';

    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password);
        mysqli_select_db($this->con, $this->database);
        mysqli_set_charset($this->con, 'utf8');
    }

    public function execute($sql){
        mysqli_query($this->con, $sql);
        
        return mysqli_insert_id($this->con);
    }

    public function executeResult($sql, $isSingle = false){
        $result = mysqli_query($this->con, $sql);
        $data = [];
        if($isSingle){
            $data = mysqli_fetch_array($result, 1);
        }else{
            while(($row = mysqli_fetch_array($result, 1)) != null){
                $data[] = $row;
            }
        }

        return $data;
    }
}