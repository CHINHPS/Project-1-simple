<div class="card">
    <div class="card-body">
        <h4 class="card-title">Bình luận</h4>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>User bình luận</th>
                                <th>Ẩn hiện</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng</th>
                                <th>ID Sản phẩm</th>
                                <th style="text-align: center;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $binhLuan = getAllComment();
                            foreach ($binhLuan as $binh_luan) { 
                                $user = getUser($binh_luan['idUser'])?>
                                <tr>
                                    <td><?= $user['tenDangNhap']; ?></td>
                                    <td><?php if ($binh_luan['anHien'] == 1) echo "Ẩn";
                                        else echo "Hiện"; ?></td>
                                    <td><?= $binh_luan['noiDung']; ?></td>
                                    <td><?= date("d/m/Y", strtotime($binh_luan['ngayDang'])); ?></td>
                                    <td><?= $binh_luan['idSP']; ?></td>
                                    <td style="text-align: center;">
                                        <a href="?page=hideComment&idBL=<?= $binh_luan['idBL']; ?>"><button class="btn btn-outline-primary" <?php if($binh_luan['anHien']==1) $anHien="ẩn"; else $anHien="hiện";  ?>  onclick="return confirm('Bạn có muốn <?=$anHien?> bình luận này ?')"><?php if($binh_luan['anHien']==0) echo "Ẩn"; else echo "Hiện";?></button></a>
                                        <a href="?page=deleteComment&idBL=<?= $binh_luan['idBL']; ?>"><button class="btn btn-outline-primary" onclick="return confirm('Bạn có muốn xóa bình luận này ?')">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>