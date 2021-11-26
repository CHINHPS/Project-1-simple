<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a>
                            </li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1><?=$name_page?></h1>
                </div>
        </div>
    </div>
    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Bộ lọc</div>
                            <button class="block-sidebar__close" type="button">
                                <i class="fas fa-search" style="margin-right:5px"></i>   
                            </button>

                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Bộ lọc</h4>
                                <div class="widget-filters__list">


                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title" data-collapse-trigger>Danh mục</button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <?php foreach($danhmuc as $danhmucs){ ?>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <a href="product-type/<?=seo1($danhmucs['tenLoai'])?>/<?=$danhmucs['idLoai']?>"><?php echo $danhmucs['tenLoai'] ?></a>
                                                            </li>     
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item="">
                                            <button type="button" class="filter__title" data-collapse-trigger="">Khoảng giá
                                                <i class="fas fa-hand-holding-usd"></i>
                                            </button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="row filter__container">
                                                        <input name="gia_min" class="form-control form-control-sm col-5" placeholder="Từ">
                                                        
                                                        <span class="p-1 col-2">
                                                            <center>
                                                            -
                                                            </center>
                                                        </span>
                                                        
                                                        <input name="gia_max" class="form-control form-control-sm col-5" placeholder="Đến">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex">
                                    <button class="btn btn-primary btn-sm col-12" type="submit">Tìm kiếm</button>
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
                                <div class="view-options__filters-button"><button type="button" class="filters-button">
                                    <i class="fas fa-search" style="margin-right:5px"></i>    
                                    <span class="filters-button__title"> Bộ lọc</span> </button>
                                </div>
                              
                                
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
                                    <div class="product-card product-card--hidden-actions">
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        </div>

                                        <div class="product-card__image product-image">
                                            <a href="view-product/<?=seo1($sanphams['tenSP'])?>/<?=$sanphams['idSP'] ?>" class="product-image__body">
                                                <img class="product-image__img" src="<?php echo $sanphams['hinhAnh'] ?>" alt="">
                                            </a>
                                        </div>

                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="?act=detail_prod&id_source=<?php echo $sanphams['idSP'] ?>"><?php echo $sanphams['tenSP'] ?></a></div>
                                            
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <i class="far fa-eye" style="color:#F9CC76;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend"><?=number_format($sanphams['luotXem'])?> Lượt xem</div>
                                            </div>
                                           
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__prices"><?=number_format($sanphams['donGia'])?>đ</div>
                                            <div class="product-card__buttons">
                                                <button class="btn btn-primary product-card__addtocart" type="button">Thêm giỏ hàng</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>             
                                <?php }?>

                            
                
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <ul class="pagination justify-content-center">
                            <?php   
                                echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->