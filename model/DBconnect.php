<?php
    function connect(){
        $conn = new mysqli("localhost", "root", "", "webbase");
        if ($conn->connect_errno) {
            die("Database connection failed......" . $conn->connect_error);
        }
        return $conn;
    }

    function searchAllCpu(){
        $conn = connect();
        $sql = $conn->prepare("SELECT * FROM cpu");
        $sql->execute();
        $res = $sql->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }
?>