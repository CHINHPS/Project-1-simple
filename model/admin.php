<?php
include_once 'pdo.php';
//Lấy danh sách loại sản phẩm
function getAllProductType()
{
   $sql = "select idLoai,tenLoai,anHien from loai_san_pham order by idLoai asc";
   return pdo_query($sql);
}
//Lấy 1 loại sản phẩm
function getProductType($idLoai)
{
   $sql = "select idLoai,tenLoai,anHien,thuTu from loai_san_pham where idLoai=?";
   return pdo_query_one($sql, $idLoai);
}
//Thêm loại sản phẩm
function addProductType($tenLoai, $anHien, $thuTu)
{
   $sql = "INSERT INTO loai_san_pham (tenLoai,anHien,thuTu) VALUES (?,?,?)";
   return pdo_execute($sql, $tenLoai, $anHien, $thuTu);
}
//Sửa loại sản phẩm
function updateProductType($tenLoai, $anHien, $thuTu, $idLoai)
{
   $sql = "UPDATE loai_san_pham SET tenLoai=?,anHien=?,thuTu=? WHERE idLoai=?";
   return pdo_execute($sql, $tenLoai, $anHien, $thuTu, $idLoai);
}
//Xóa loại sản phẩm
function deleteProductType($idLoai)
{
   $sql = "DELETE FROM loai_san_pham WHERE idLoai=?";
   return pdo_execute($sql, $idLoai);
}
// Lấy danh sách user từ bảng tai_khoan
function getAllUser()
{
   $sql = "select idUser,tenDangNhap,matKhau,ten,email,soDienThoai,ngayTao,nhom from tai_khoan order by idUser asc";
   return pdo_query($sql);
}
//Thêm user
function addUser($tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom)
{
   $sql = "INSERT INTO tai_khoan (tenDangNhap,matKhau,ten,email,soDienThoai,nhom) VALUES (?,?,?,?,?,?)";
   return pdo_execute($sql, $tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom);
}
//Lấy 1 User
function getUser($idUser)
{
   $sql = "select tenDangNhap,matKhau,ten,email,soDienThoai,ngayTao,nhom from tai_khoan where idUser=?";
   return pdo_query_one($sql, $idUser);
}
//Xóa user
function deleteUser($idUser)
{
   $sql = "DELETE FROM tai_khoan WHERE idUser=?";
   return pdo_execute($sql, $idUser);
}
//Sửa user
function updateUser($tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom, $idUser)
{
   $sql = "UPDATE tai_khoan SET tenDangNhap=?,matKhau=?,ten=?,email=?,soDienThoai=?,nhom=? WHERE idUser=?";
   return pdo_execute($sql, $tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom, $idUser);
}
//Lấy danh sách sản phẩm
function getAllProduct()
{
   $sql = "select idSP,tenSP,donGia,giamGia,ngayNhap,hinhAnh,luotXem,thongSo,moTa,anHien,idLoai from san_pham order by idSP asc";
   return pdo_query($sql);
}
//Lấy 1 sản phẩm
function getProduct($idLoai)
{
   $sql = "select idSP,tenSP,donGia,giamGia,ngayNhap,hinhAnh,luotXem,thongSo,moTa,anHien,idLoai from san_pham where idSP=?";
   return pdo_query_one($sql, $idLoai);
}
//Thêm sản phẩm
function addProduct($tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai)
{
   $sql = "INSERT INTO san_pham (tenSP,donGia,giamGia,hinhAnh,luotXem,thongSo,moTa,anHien,idLoai) VALUES (?,?,?,?,?,?,?,?,?)";
   return pdo_execute($sql, $tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai);
}
//Sửa sản phẩm
function updateProduct($tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai, $idSP)
{
   $sql = "UPDATE san_pham SET tenSP=?,donGia=?,giamGia=?,hinhAnh=?,luotXem=?,thongSo=?,moTa=?,anHien=?,idLoai=? WHERE idSP=?";
   return pdo_execute($sql, $tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai, $idSP);
}
//Xóa sản phẩm
function deleteProduct($idLoai)
{
   $sql = "DELETE FROM san_pham WHERE idSP=?";
   return pdo_execute($sql, $idLoai);
}
//Lấy danh sách bình luận
function getAllComment()
{
   $sql = "select idBL,idUser,anHien,noiDung,ngayDang,idSP from binh_luan order by idBL desc";
   return pdo_query($sql);
}
//Lấy 1 bình luận
function getComment($idBL)
{
   $sql = "select idBL,idUser,anHien,noiDung,ngayDang,idSP from binh_luan where idBL=?";
   return pdo_query_one($sql, $idBL);
}
//Xóa sản phẩm
function deleteComment($idBL)
{
   $sql = "DELETE FROM binh_luan WHERE idBL=?";
   return pdo_execute($sql, $idBL);
}
//Ẩn hiện comment
function hideComment($anHien, $idBL)
{
   $sql = "UPDATE binh_luan SET anHien=? WHERE idBL=?";
   return pdo_execute($sql, $anHien, $idBL);
}
//Lấy danh sách tin
function getAllBlog()
{
   $sql = "select idTin,tieuDe,tomTat,noiDung,ngayDang,hinhAnh,idUser,idLoaiTin,luotXem,anHien from tin order by idTin desc";
   return pdo_query($sql);
}
//Lấy 1 tin
function getBlog($idTin)
{
   $sql = "select idTin,tieuDe,tomTat,noiDung,ngayDang,hinhAnh,idUser,idLoaiTin,luotXem,anHien from tin where idTin=?";
   return pdo_query_one($sql, $idTin);
}
//Thêm tin
function addBlog($tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai)
{
   $sql = "INSERT INTO tin (tieuDe,tomTat,noiDung,hinhAnh,idUser,idLoaiTin,luotXem,anHien) VALUES (?,?,?,?,?,?,?,?)";
   return pdo_execute($sql, $tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai);
}
//Sửa tin
function updateBlog($tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai, $idTin)
{
   $sql = "UPDATE tin SET tieuDe=?,tomTat=?,noiDung=?,hinhAnh=?,idUser=?,idLoaiTin=?,luotXem=?,anHien=? WHERE idTin=?";
   return pdo_execute($sql, $tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai, $idTin);
}
//Xóa tin
function deleteBlog($idTin)
{
   $sql = "DELETE FROM tin WHERE idTin=?";
   return pdo_execute($sql, $idTin);
}
    //  // Lấy username và password từ bảng admin_users
    // function checkAdminUser($username,$pass){
    //     $sql="select idAdmin, username from admin_users where username=? && password=?";
    //     return pdo_query_one($sql,$username,$pass);
    //  }
    //  // Lấy tất cả User
    // function getUser(){
    //     $sql="select idAdmin, username, password from admin_users";
    //     return pdo_query($sql);
    // }
    // //Sửa User
    // function editUser($username,$password,$id){
    //     $sql="UPDATE admin_users SET username=?, password=? WHERE idAdmin=?";
    //     return pdo_execute($sql,$username,$password,$id);
    // }
    // //Lấy thông tin User
    // function getInfoUser($id){
    //     $sql="SELECT username, password from admin_users  WHERE idAdmin=?";
    //     return pdo_query_one($sql,$id);
    // }
    // //Xóa User
    // function deleteUser($id){
    //     $sql="DELETE FROM admin_users WHERE idAdmin=?";
    //     return pdo_execute($sql,$id);
    // }
    // //Thêm User
    // function addUser($username,$password){
    //     $sql="INSERT INTO admin_users (username, password) VALUES (?,?)";
    //     return pdo_query_one($sql,$username,$password);
    // }

    // function getFeaturePro(){
    //     $sql="select id, name, images, price from products order by updated_at desc limit 8";
    //     return pdo_query($sql);
    //  }
    //  // Lấy sản thông tin sản phẩm từ database
    //  function getInfoProductByID($id){
    //    $sql="select name, price, intro, tag, r_intro, review,images from products where id=?";
    //    return pdo_query_one($sql,$id);
    // }
    // // Lấy sản thông số kỹ thuật từ database
    //  function getProductDetailByID($id){
    //      $sql="select cpu, ram, screen, vga, storage, exten_memmory, cam1, cam2, sim, connect, pin, os from pro_details where pro_id=?";
    //      return pdo_query_one($sql,$id);
    //   }
    //   // Lấy sản phẩm bán chạy từ database, chỉ hiện 6 sản phẩm
    //   function getBestSellPro(){
    //    $sql="select id, name, images, price from products limit 6";
    //     return pdo_query($sql);
    // }
    // // Lấy sản phẩm mới nhất từ database, chỉ hiện 4 sản phẩm
    // function getLastestPro(){
    //    $sql="select id, name, images, price from products order by intro desc limit 4";
    //     return pdo_query($sql);
    // }
