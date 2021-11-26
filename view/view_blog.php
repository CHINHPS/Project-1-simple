<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9 col-xl-8">
                <div class="block post post--layout--full">
                    <div class="post__header post-header post-header--layout--full">
                        <div class="post-header__categories"><a href="#">Tin mới nhất</a></div>
                        <h1 class="post-header__title"><?php echo $detail_news['tieuDe'] ?>
                        </h1>
                        <div class="post-header__meta">
                            <div class="post-header__meta-item">Đăng bởi <a href="#">Jessica Moore</a></div>
                            <div class="post-header__meta-item"><a href="#"><?php echo $detail_news['ngayDang'] ?></a></div>
                            <div class="post-header__meta-item"><a href="#">4 Bình luận</a></div>
                        </div>
                    </div>
                    <div class="post__featured"><a href="#"><img src="<?php echo $detail_news['hinhAnh'] ?>"
                                alt=""></a></div>
                    <div class="post__content typography typography--expanded">
                       
                        <figure><a href="#"><img src="images/posts/post-featured.jpg" alt=""></a>
                            <figcaption><?php echo $detail_news['tieuDe'] ?></figcaption>
                        </figure>
                      
                        <p><?php echo $detail_news['tomTat'] ?></p>
                        
                        <p><?php echo $detail_news['noiDung'] ?></p>
                    </div>
                    <div class="post__footer">
                        <div class="post__tags-share-links">
                            
                            <div class="post__share-links share-links">
                                <ul class="share-links__list">
                                    <li class="share-links__item share-links__item--type--like"><a
                                            href="#">Like</a></li>
                                    <li class="share-links__item share-links__item--type--tweet"><a
                                            href="#">Tweet</a></li>
                                    <li class="share-links__item share-links__item--type--pin"><a href="#">Pin
                                            It</a></li>
                                    <li class="share-links__item share-links__item--type--counter"><a
                                            href="#">4K</a></li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->