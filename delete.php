<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methos: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization, Accept, X-Requested-With, x-xsrf-token");
header("Content-Type: application/json; charset=utf-8");

    include "config.php";
    $data = array();

    $query = mysqli_query($kon, "DELETE FROM tbl_cmb_mochashaa where kd='$_POST[nama_lengkap]'");
        
    if($query){
        $result = json_encode(array('success'=>true, 'result'=>$data));
    }else{
        $result = json_encode(array('success'=>false));
    }
    echo $result;
    
?>  