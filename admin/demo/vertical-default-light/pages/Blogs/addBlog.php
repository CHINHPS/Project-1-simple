<?php
$UserLogin = $_SESSION['login_user'];
if (isset($_POST['btn'])) {
    $tieuDe = $_POST['tieuDe'];
    $tomTat = $_POST['tomTat'];
    $noiDung = $_POST['noiDung'];
    $hinhAnh = $_POST['hinhAnh'];
    $anHien = $_POST['anHien'];
    $tieuDe = trim(strip_tags($tieuDe));
    $tomTat = trim(strip_tags($tomTat));
    $hinhAnh = trim(strip_tags($hinhAnh));
    $kq = addBlog($tieuDe,$tomTat,$noiDung,$hinhAnh,$UserLogin['idUser'],0,$anHien);
}
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">THÊM TIN</h4>
        <p class="card-description">
        </p>
        <form class="forms-sample" method="post">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tiêu Đề" name="tieuDe" required>
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tóm tắt" name="tomTat" required>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea id="" cols="150" rows="10" name="noiDung"></textarea>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Hình ảnh" name="hinhAnh" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ẩn Hiện</label><br>
                <input type="radio" id="anHien1" name="anHien" value="0" checked>
                <label for="anHien1">Hiện</label>
                <input type="radio" id="anHien2" name="anHien" value="1">
                <label for="anHien2">Ẩn</label>
            </div>
            <input type="submit" class="btn btn-primary me-2" name="btn" value="Thêm"></input>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>