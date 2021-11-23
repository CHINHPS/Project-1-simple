<?php
include_once 'PDO.php';

function get_All_Products(){
   $sql= "SELECT * FROM san_pham"; 
   return pdo_query($sql);
}

function get_All_Products_BC(){
   $sql= "SELECT * FROM san_pham LIMIT 0,15"; 
   return pdo_query($sql);
}

function get_All_Products_mv(){
   $sql= "SELECT * FROM san_pham LIMIT 0,9"; 
   return pdo_query($sql);
}

function get_All_Products_HOT(){
   $sql= "SELECT * FROM san_pham LIMIT 0,10"; 
   return pdo_query($sql);
}
function get_detail_product_id($id_pro){
    $sql="SELECT * FROM san_pham WHERE idSP=?";
    return pdo_query_one($sql,$id_pro);
}

function get_All_category_product(){
   $sql = "SELECT * FROM loai_san_pham ORDER BY thuTu ASC";
   return pdo_query($sql);
}

function set_view_product($idSP){
   $sql = "UPDATE san_pham SET luotXem = luotXem + 1 WHERE idSP=?";
   return pdo_execute($sql, $idSP);
}

function get_name_category($idCategory){
   $sql = "SELECT * FROM loai_san_pham Where idLoai=?";
   return pdo_query_one($sql,$idCategory);
}

?>