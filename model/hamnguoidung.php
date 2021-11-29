<?php
include_once 'PDO.php';

function check_login($email,$pass){
  $sql="SELECT * FROM  tai_khoan WHERE email = '$email'  AND  matKhau ='$pass'";
  return pdo_query_one($sql);
}

function register_user($email , $pass,$hoVaTen,$soDienThoai){
    $sql="INSERT INTO tai_khoan(email,matKhau,ten,soDienThoai) VALUES('$email','$pass','$hoVaTen','$soDienThoai')";
    return pdo_execute($sql);
}

function Kiem_Tra_Email_Tontai($email){
  $sql="SELECT email FROM tai_khoan WHERE email ='$email'";
  return pdo_query($sql);
}
function getUserByIDUser($idUser){
  $sql="SELECT * FROM tai_khoan WHERE idUser=?";
  return pdo_query_one($sql,$idUser);
}
//Lấy tất cả email User
function getEmailUser(){
  $sql="SELECT email FROM  tai_khoan";
  return pdo_query($sql);
}
//Kích hoạt tài khoản
function activeUser($email){
  $sql="UPDATE tai_khoan SET kichHoat=1 where email=?";
  return pdo_execute($sql,$email);
}
//Cập nhật mật khẩu
function updatePasswordUser($password,$email){
  $sql="UPDATE tai_khoan SET matKhau=? where email=?";
  return pdo_execute($sql,$password,$email);
}
//Lấy hóa đơn bằng idUser
function getInvoiceByIDUser($idUser){
  $sql="SELECT * FROM  hoa_don WHERE idUser=?";
  return pdo_query($sql,$idUser);
}
//Cập nhật tên và sdt
function updateNameAndPhoneNumber($ten,$sdt,$email){
  $sql="UPDATE tai_khoan SET ten=?,soDienThoai=? where email=?";
  return pdo_execute($sql,$ten,$sdt,$email);
}
?>