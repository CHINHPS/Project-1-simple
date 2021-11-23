<?php
include_once 'PDO.php';

function get_All_list_news(){
   $sql="SELECT * FROM tin ";
   return pdo_query($sql);
}

function get_All_list_news_nb(){
    $sql="SELECT * FROM tin LIMIT 2,6";
    return pdo_query($sql);
 }

function get_Detail_new($id_post){
    $sql="SELECT * FROM tin WHERE idTin = '$id_post'";
    return pdo_query_one($sql);
}





?>