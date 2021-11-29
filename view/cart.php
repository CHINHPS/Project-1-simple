<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                
            </div>
            <div class="page-header__title">
                <h1>Giỏ hàng</h1>
            </div>
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                    <tr class="cart-table__row">
                        <th class="cart-table__column cart-table__column--image">Ảnh</th>
                        <th class="cart-table__column cart-table__column--product">Sản phẩm</th>
                        <th class="cart-table__column cart-table__column--price">Đơn giá</th>
                        <th class="cart-table__column cart-table__column--quantity">Số lượng</th>
                        <th class="cart-table__column cart-table__column--total">Tổng cộng</th>
                        <th class="cart-table__column cart-table__column--remove">Xóa</th>
                    </tr>
                </thead>
                <tbody class="cart-table__body">

                    <?php
                    $tongc=0;
                    if(sizeof($_SESSION['mycart']) > 0){
                            $i=0;
                            foreach($_SESSION['mycart'] as $cart){
                                    $thanhtien = $cart[1] * $cart[4];
                                    $tongc += $thanhtien; 
                                    echo'                 <tr class="cart-table__row">
                                    <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="'.$cart[3].'" alt=""></a></div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="#" class="cart-table__product-name">'.$cart[2].'</a>
                                    <ul class="cart-table__options">
                                        <li>Color: Yellow</li>
                                        <li>Material: Aluminium</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">'.$cart[1].'$</td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="'.$cart[4].'">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">'.$thanhtien.'</td>
                                <td><a href="controller/?act=delete_prod_cart&id='.$i.'">XÓA</a></td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>';
                            }
                    }else{
                        echo'Bạn chưa có sản phẩm nào !';
                    }
                    
                    echo'  </tbody>
                    </table>
                    <div class="cart__actions">
                        <div class="cart__buttons"><a href="index.php" class="btn btn-light">Tiếp tục mua sắm</a> <a href="?act=delete_all_prod_cart" class="btn btn-primary cart__update-button">Xóa toàn bộ giỏ hàng</a></div>
                    </div>
                    <div class="row justify-content-end pt-5">
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Tổng tiền giỏ hàng</h3>
                                    <table class="cart__totals">
                                       
                                        <tfoot class="cart__totals-footer">
                                            <tr>
                                                <th>Tổng cộng</th>
                                                <td>'.$tongc.'</td>
                                            </tr>
                                        </tfoot>
                                    </table><a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="checkout.php">Tiến hành đặt hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
        ';
                    
                    ?>
                    
                    
              

        </div>
    </div>
</div><!-- site__body / end -->