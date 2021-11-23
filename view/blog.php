<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                
            </div>
            <div class="page-header__title">
                <h1>Tin mới nhất</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="block">
                    <div class="posts-view">
                        <div class="posts-view__list posts-list posts-list--layout--classic">
                            <div class="posts-list__body">




                                <?php foreach($new as $news){ ?>
                                <div class="posts-list__item">
                                    <div class="post-card post-card--layout--grid post-card--size--lg">
                                        <div class="post-card__image"><a href="#"><img src="<?php echo $news['hinhAnh'] ?>" alt=""></a></div>
                                        <div class="post-card__info">
                                            <div class="post-card__category"><a href="#">Ưu đãi Đặc biệt</a></div>
                                            <div class="post-card__name"><a href="?act=detail_news&id_source=<?php echo $news['idTin'] ?>"><?php echo $news['tieuDe'] ?></a></div>
                                            <div class="post-card__date"><?php echo $news['ngayDang'] ?></div>
                                            <div class="post-card__content"> <?php echo $news['tomTat'] ?></div>
                                            <div class="post-card__read-more"><a href="#" class="btn btn-secondary btn-sm">Đọc thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>                                   
                            
                            
                                
                            
                            
                            </div>
                        </div>
                        <div class="posts-view__pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link page-link--with-arrow" href="#" aria-label="Previous"><svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                        </svg></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link--with-arrow" href="#" aria-label="Next"><svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block block-sidebar block-sidebar--position--end">
                    <div class="block-sidebar__item">
                        <div class="widget-search">
                            <form class="widget-search__body"><input class="widget-search__input" placeholder="Tìm bài viết" type="text" autocomplete="off" spellcheck="false"> <button class="widget-search__button" type="submit"><svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg></button></form>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-aboutus widget">
                            <h4 class="widget__title">Giới thiệu bài viết</h4>
                            <div class="widget-aboutus__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.</div><!-- social-links -->
                            <div class="social-links widget-aboutus__socials social-links--shape--rounded">
                                <ul class="social-links__list">
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--rss" href="#" target="_blank"><i class="fas fa-rss"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--youtube" href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div><!-- social-links / end -->
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-categories widget-categories--location--blog widget">
                            <h4 class="widget__title">Thể loại tin</h4>
                            <ul class="widget-categories__list" data-collapse data-collapse-opened-class="widget-categories__item--open">
                                <li class="widget-categories__item" data-collapse-item>
                                    <div class="widget-categories__row"><a href="#"><svg class="widget-categories__arrow" width="6px" height="9px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                            </svg> Tin mới</a></div>
                                </li>
                                
                                <li class="widget-categories__item" data-collapse-item>
                                    <div class="widget-categories__row"><a href="#"><svg class="widget-categories__arrow" width="6px" height="9px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                            </svg> Tin công nghệ</a></div>
                                </li>
                                <li class="widget-categories__item" data-collapse-item>
                                    <div class="widget-categories__row"><a href="#"><svg class="widget-categories__arrow" width="6px" height="9px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                            </svg> Tin đời sống</a></div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-posts widget">
                            <h4 class="widget__title">Bài viết mới nhất</h4>
                            <div class="widget-posts__list">
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image"><a href="#"><img src="images/posts/post-1-thumbnail.jpg" alt=""></a></div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name"><a href="#">Tiêu đề</a></div>
                                        <div class="widget-posts__date">Ngày đăng</div>
                                    </div>
                                </div>
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image"><a href="#"><img src="images/posts/post-1-thumbnail.jpg" alt=""></a></div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name"><a href="#">Tiêu đề</a></div>
                                        <div class="widget-posts__date">Ngày đăng</div>
                                    </div>
                                </div>
                                <div class="widget-posts__item">
                                    <div class="widget-posts__image"><a href="#"><img src="images/posts/post-1-thumbnail.jpg" alt=""></a></div>
                                    <div class="widget-posts__info">
                                        <div class="widget-posts__name"><a href="#">Tiêu đề</a></div>
                                        <div class="widget-posts__date">Ngày đăng</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    
            
                    
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->