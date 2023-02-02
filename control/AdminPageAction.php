<?php
 include "../model/DBconnect.php";
 if(!empty($_POST["action"])){
    if($_POST["action"] == "Del-Cpu"){
        $cpuId = $_POST["productId"];
        delCpu($cpuId);
    }
 }
?>