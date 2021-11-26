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

function get_All_product_by_category($idCategory, $page_num, $page_size){
   $start_now = ($page_num-1)*$page_size;
   $sql = "SELECT * FROM san_pham WHERE idLoai=? LIMIT $start_now,$page_size ";
   return pdo_query($sql,$idCategory);
}

function get_All_product_by_category_COUNT($idCategory){
   $sql = "SELECT count(idSP) FROM san_pham WHERE idLoai=?";
   $data = pdo_query_one($sql,$idCategory);
   return $data['count(idSP)'];
}


function set_view_product($idSP){
   $sql = "UPDATE san_pham SET luotXem = luotXem + 1 WHERE idSP=?";
   return pdo_execute($sql, $idSP);
}

function get_name_category($idCategory){
   $sql = "SELECT * FROM loai_san_pham Where idLoai=?";
   return pdo_query_one($sql,$idCategory);
}

function taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size=5) {
   $offset=3;
   if($base_url == Get_current_link()) $get_defaut = '?'; else $get_defaut = '&';
   if ($page_num<=0) return "";
   $total_pages= ceil($total_rows/$page_size); //tính tổng số trang
   if ($total_pages<=1) return "";

   $links="<ul class='pagination'>";
   if ($page_num>1) {//chỉ hiện 2 link đầu, trước khi user từ trang 2 trở đi
      $first ="<li><a href='{$base_url}'><i class='fa fa-angle-double-left'></i></a></li>";    
      $page_prev= $page_num-1;
      $prev ="<li><a href='{$base_url}{$get_defaut}page_num={$page_prev}'><i class='fa fa-angle-left'></i></a></li>";
      $links .= $first. $prev;
   }

   $form = $page_num-$offset;
   $to = $page_num + $offset;
   if($form<1) $form =1;
   if($to > $total_pages) $to = $total_pages;

   for ($i=$form; $i < $to; $i++) { 
       if($i==$page_num) $str = "<li class='page-item active'><a> $i</a></li>";
       else $str = "<li><a href='{$base_url}{$get_defaut}page_num={$i}'> $i</a></li>";
       $links .=$str;
   }

   //aaa
   if ($page_num<$total_pages){ //chỉ hiện link cuối, kế khi user kô ở trang cuối 
      $page_next= $page_num + 1;
      $next ="<li><a href='{$base_url}{$get_defaut}page_num={$page_next}'><i class='fa fa-angle-right'></i></a></li>";        
      $last ="<li><a href='{$base_url}{$get_defaut}page_num={$total_pages}'><i class='fa fa-angle-double-right'></i></a></li>";
      $links .=$next.$last;
   }
   $links .="</ul>";
   return $links;
}