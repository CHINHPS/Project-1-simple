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
                    <section class="post__section">
                        <h4 class="post__section-title">Bình luận</h4>
                        <ol class="comments-list comments-list--level--0">
                            <li class="comments-list__item">
                                <div class="comment">
                                    <div class="comment__avatar"><a href="#"><img
                                                src="images/avatars/avatar-1.jpg" alt=""></a></div>
                                    <div class="comment__content">
                                        <div class="comment__header">
                                            <div class="comment__author"><a href="#">Jessica Moore</a></div>
                                            
                                        </div>
                                        <div class="comment__text">Aliquam ullamcorper elementum sagittis. Etiam
                                            lacus lacus, mollis in mattis in, vehicula eu nulla. Nulla nec
                                            tellus pellentesque.</div>
                                        <div class="comment__date"> Ngày đăng</div>
                                    </div>
                                </div>
                            
                            </li>
                        </ol>
                    </section>
                    <section class="post__section">
                        <h4 class="post__section-title">Viết bình luận của bạn</h4>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4"><label for="comment-first-name">Họ</label> <input type="text" class="form-control"
                                        id="comment-first-name" placeholder="Họ"></div>
                                <div class="form-group col-md-4"><label for="comment-last-name">Tên</label> <input type="text" class="form-control"
                                        id="comment-last-name" placeholder="Tên"></div>
                                <div class="form-group col-md-4"><label for="comment-email">Địa chỉ Email</label> <input type="email" class="form-control"
                                        id="comment-email" placeholder="Địa chỉ Email"></div>
                            </div>
                            <div class="form-group"><label for="comment-content">Bình luận</label> <textarea
                                    class="form-control" id="comment-content" rows="6"></textarea></div>
                            <div class="form-group mt-4"><button type="submit"
                                    class="btn btn-primary btn-lg">Gửi bình luận</button></div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->