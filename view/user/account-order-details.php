<?php
    $idHoaDon = $_GET['id'];
    $hoadon = getInvoice($idHoaDon);
    $chiTietHoaDon = getInvoiceDetail($idHoaDon);
?>
<div class="col-12 col-lg-9 mt-4 mt-lg-0">
    <div class="card">
        <div class="order-header">
            <div class="order-header__actions"><a href="user/history" class="btn btn-xs btn-secondary">Trở về danh sách</a></div>
            <h5 class="order-header__title">Mã hóa đơn #<?=$hoadon['idHoaDon'];?></h5>
            <div class="order-header__subtitle">Đã được đặt lúc <mark class="order-header__date">19 October, 2020</mark> và hiện đang <mark class="order-header__status">Đang chờ</mark>.</div>
        </div>
        <div class="card-divider"></div>
        <div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tổng cộng</th>
                        </tr>
                    </thead>
                    <tbody class="card-table__body card-table__body--merge-rows">
                        <tr>
                            <td>Electric Planer Brandix KL370090G 300 Watts × 2</td>
                            <td>$1,398.00</td>
                        </tr>
                        <tr>
                            <td>Undefined Tool IRadix DPS3000SY 2700 watts × 1</td>
                            <td>$849.00</td>
                        </tr>
                        <tr>
                            <td>Brandix Router Power Tool 2017ERXPK × 3</td>
                            <td>$3,630.00</td>
                        </tr>
                    </tbody>
                    <tbody class="card-table__body card-table__body--merge-rows">
                        <tr>
                            <th>Tổng phụ</th>
                            <td>$5,877.00</td>
                        </tr>
                        <tr>
                            <th>Tín dụng lưu trữ</th>
                            <td>$-20.00</td>
                        </tr>
                        <tr>
                            <th>Đang giao</th>
                            <td>$25.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tổng cộng</th>
                            <td>$5,882.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="row mt-3 no-gutters mx-n2">
        <div class="col-sm-6 col-12 px-2">
            <div class="card address-card address-card--featured">
                <div class="address-card__body">
                    <div class="address-card__badge address-card__badge--muted">Địa chỉ giao hàng
                    </div>
                    <div class="address-card__name">Helena Garcia</div>
                    <div class="address-card__row">Random Federation<br>115302, Moscow<br>ul.
                        Varshavskaya, 15-2-178</div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Số điện thoại</div>
                        <div class="address-card__row-content">38 972 588-42-36</div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Địa chỉ Email</div>
                        <div class="address-card__row-content">stroyka@example.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
            <div class="card address-card address-card--featured">
                <div class="address-card__body">
                    <div class="address-card__badge address-card__badge--muted">Địa chỉ thanh toán
                    </div>
                    <div class="address-card__name">Helena Garcia</div>
                    <div class="address-card__row">Random Federation<br>115302, Moscow<br>ul.
                        Varshavskaya, 15-2-178</div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Số điện thoại</div>
                        <div class="address-card__row-content">38 972 588-42-36</div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Địa chỉ Email</div>
                        <div class="address-card__row-content">stroyka@example.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>