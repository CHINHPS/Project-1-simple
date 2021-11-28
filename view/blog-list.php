<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="block">
                <div class="posts-view">
                    <div class="posts-view__list posts-list posts-list--layout--list">
                        <div class="posts-list__body">
                            <?php foreach ($new as $news) {?>
                            <div class="posts-list__item">
                                <div class="post-card post-card--layout--list post-card--size--nl">
                                    <div class="post-card__image"><a href="view-news/<?=seo1($news['tieuDe'])?>/<?=$news['idTin'] ?>"><img src="<?=$news['hinhAnh']?>" alt=""></a></div>
                                    <div class="post-card__info">
                                        <div class="post-card__category"><a href="#"></a>
                                        </div>
                                        <div class="post-card__name"><a href="view-news/<?=seo1($news['tieuDe'])?>/<?=$news['idTin'] ?>"><?=$news['tieuDe']?></a></div>
                                        <div class="post-card__date"><?=date("d/m/y h:i:s", strtotime($news['ngayDang']))?></div>
                                        <div class="post-card__content"><?=$news['tomTat']?></div>
                                        <div class="post-card__read-more"><a href="view-news/<?=seo1($news['tieuDe'])?>/<?=$news['idTin'] ?>" class="btn btn-secondary btn-sm">ĐỌC THÊM</a></div>
                                    </div>
                                </div>
                            </div>
                            <?php  }?>
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
                        <form class="widget-search__body"><input class="widget-search__input" placeholder="Blog search..." type="text" autocomplete="off" spellcheck="false"> <button class="widget-search__button" type="submit"><svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#search-20"></use>
                                </svg></button></form>
                    </div>
                </div>
                <div class="block-sidebar__item">
                    <div class="widget-aboutus widget">
                        <h4 class="widget__title">About Blog</h4>
                        <div class="widget-aboutus__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget
                            viverra nulla sem vitae neque. Quisque id sodales libero.</div>
                        <!-- social-links -->
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
                    <div class="widget-posts widget">
                        <h4 class="widget__title">Latest Posts</h4>
                        <div class="widget-posts__list">
                            <div class="widget-posts__item">
                                <div class="widget-posts__image"><a href="#"><img src="images/posts/post-1-thumbnail.jpg" alt=""></a></div>
                                <div class="widget-posts__info">
                                    <div class="widget-posts__name"><a href="#">Philosophy That Addresses
                                            Topics Such As Goodness</a></div>
                                    <div class="widget-posts__date">October 19, 2019</div>
                                </div>
                            </div>
                            <div class="widget-posts__item">
                                <div class="widget-posts__image"><a href="#"><img src="images/posts/post-2-thumbnail.jpg" alt=""></a></div>
                                <div class="widget-posts__info">
                                    <div class="widget-posts__name"><a href="#">Logic Is The Study Of
                                            Reasoning And Argument Part 2</a></div>
                                    <div class="widget-posts__date">September 5, 2019</div>
                                </div>
                            </div>
                            <div class="widget-posts__item">
                                <div class="widget-posts__image"><a href="#"><img src="images/posts/post-3-thumbnail.jpg" alt=""></a></div>
                                <div class="widget-posts__info">
                                    <div class="widget-posts__name"><a href="#">Some Philosophers Specialize
                                            In One Or More Historical Periods</a></div>
                                    <div class="widget-posts__date">August 12, 2019</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>