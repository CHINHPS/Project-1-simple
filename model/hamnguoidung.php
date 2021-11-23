<?php
include_once 'PDO.php';

function check_login($email,$pass){
  $sql="SELECT * FROM  tai_khoan WHERE email = '$email'  AND  matKhau ='$pass'";
  return pdo_query_one($sql);
}

function register_user($email , $pass){
    $sql="INSERT INTO tai_khoan(email,matKhau) VALUES('$email','$pass')";
    return pdo_execute($sql);
}

function Kiem_Tra_Email_Tontai($email){
  $sql="SELECT email FROM tai_khoan WHERE email ='$email'";
  return pdo_query($sql);
}





?>