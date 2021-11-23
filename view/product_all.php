<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
    
        </div>
    </div>
    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Filters</div><button class="block-sidebar__close" type="button"><svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                </svg></button>
                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Bộ lọc</h4>
                                <div class="widget-filters__list">


                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title" data-collapse-trigger>Danh mục <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <?php foreach($danhmuc as $danhmucs){ ?>
                                                            <li class="filter-categories-alt__item" data-collapse-item><a href="#"><?php echo $danhmucs['tenLoai'] ?></a></li>     
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title" data-collapse-trigger>Giá <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1130">
                                                        <div class="filter-price__slider"></div>
                                                        <div class="filter-price__title">Giá: $<span class="filter-price__min-value"></span> – $<span class="filter-price__max-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                


                                </div>
                            </div>
                        </div>
                        <div class="block-sidebar__item d-none d-lg-block">
                            <div class="widget-products widget">
                                <h4 class="widget__title">Latest Products</h4>
                                <div class="widget-products__list">
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/products/iphone.jpg" alt=""></a></div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name"><a href="product.php">Điện thoại Iphone 12 Pro Max 256 GB</a></div>
                                            <div class="widget-products__prices">$1500</div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options view-options--offcanvas--mobile">
                                <div class="view-options__filters-button"><button type="button" class="filters-button"><svg class="filters-button__icon" width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#filters-16"></use>
                                        </svg> <span class="filters-button__title">Filters</span> <span class="filters-button__counter">3</span></button></div>
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list"><button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button layout-switcher__button--active"><svg width="16px" height="16px">
                                                    <use xlink:href="../libary/images/sprite.svg#layout-grid-16x16"></use>
                                                </svg></button> <button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button"><svg width="16px" height="16px">
                                                    <use xlink:href="../libary/images/sprite.svg#layout-grid-with-details-16x16"></use>
                                                </svg></button> <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button"><svg width="16px" height="16px">
                                                    <use xlink:href="../libary/images/sprite.svg#layout-list-16x16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                                <div class="view-options__legend">Kiểu xem</div>
                                <div class="view-options__divider"></div>
                                <div class="view-options__control"><label for="">Xắp sếp theo</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">Mặc định</option>
                                            <option value="">Tên (A-Z)</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                            <div class="products-list__body">


                        <?php foreach($sanpham as  $sanphams){?>
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                <use xlink:href="../libary/images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="<?php echo $sanphams['hinhAnh'] ?>" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="?act=detail_prod&id_source=<?php echo $sanphams['idSP'] ?>"><?php echo $sanphams['tenSP'] ?></a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Đánh giá</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Màn hình:</li>
                                                <li>Hệ điều hành:</li>
                                                <li>Chip:</li>
                                                <li>Ram:</li>
                                                <li>Camera trước:</li>
                                                <li>Camera sau:</li>
                                                <li>Pin:</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                            <div class="product-card__prices"><?php echo $sanphams['donGia'] ?></div>
                                            <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Thêm giỏ hàng</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Thêm giỏ hàng</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="../libary/images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="../libary/images/sprite.svg#compare-16"></use>
                                                    </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                        </div>
                                    </div>
                                </div>             
                                <?php }?>

                            
                
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link page-link--with-arrow" href="#" aria-label="Previous"><svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                            <use xlink:href="../libary/images/sprite.svg#arrow-rounded-left-8x13"></use>
                                        </svg></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link--with-arrow" href="#" aria-label="Next"><svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                            <use xlink:href="../libary/images/sprite.svg#arrow-rounded-right-8x13"></use>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->