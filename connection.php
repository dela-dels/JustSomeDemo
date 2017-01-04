<?php
class dbConnection{
    function __construct(){
        require_once('config.php');

        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
        mysqli_select_db($con,'login_db');
        if (!$con) {
            # code...
            die("Can not establish connection");
        }
        return $con;
    }
    public function closeConnection(){
        mysqli_close();
    }
}

 ?>
