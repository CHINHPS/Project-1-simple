<?php
require_once "../controller/sendMail.php";
$btn = $_POST['btn'];
if (isset($btn)) {
    $hoVaTen = $_POST['hoVaTen'];
    $email = $_POST['email'];
    $tieuDe = $_POST['tieuDe'];
    $noiDung = $_POST['noiDung'];
    // echo $hoVaTen, $email, $tieuDe, $noiDung;
    GuiMailContact($email, $hoVaTen, $tieuDe, $noiDung);
    echo "<script>alert('Lời nhắn của bạn đã được gửi. Xin cảm ơn ^^')</script>";
}
?>
<div class="site__body">
    <div class="block-map block">
        <div class="block-map__body"><iframe src="https://maps.google.com/maps?q=Holbrook-Palmer%20Park&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
    </div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item"><a href="#">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">Our Address</h4>
                                <div class="contact-us__address">
                                    <p>715 Fake Ave, Apt. 34, New York, NY 10021 USA<br>Email: stroyka@example.com<br>Phone Number: +1 754 000-00-00</p>
                                    <p><strong>Opening Hours</strong><br>Monday to Friday: 8am-8pm<br>Saturday: 8am-6pm<br>Sunday: 10am-4pm</p>
                                    <p><strong>Comment</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">Hãy để lại lời nhắn cho chúng tôi</h4>
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6"><label for="form-name">Họ và tên</label> <input required oninvalid="this.setCustomValidity('Vui lòng nhập họ và tên')" oninput="this.setCustomValidity('')" name='hoVaTen' type="text" id="form-name" class="form-control" placeholder="Họ và tên"></div>
                                        <div class="form-group col-md-6"><label for="form-email">Email</label> <input required oninvalid="this.setCustomValidity('Vui lòng nhập email')" oninput="this.setCustomValidity('')" name='email' type="email" id="form-email" class="form-control" placeholder="Email"></div>
                                    </div>
                                    <div class="form-group"><label for="form-subject">Tiêu đề</label> <input required oninvalid="this.setCustomValidity('Vui lòng nhập tiêu đề lời nhắn')" oninput="this.setCustomValidity('')" name='tieuDe' type="text" id="form-subject" class="form-control" placeholder="Tiêu đề"></div>
                                    <div class="form-group"><label for="form-message">Nội dung</label> <textarea required oninvalid="this.setCustomValidity('Vui lòng nhập nội dung lời nhắn')" oninput="this.setCustomValidity('')" name='noiDung' id="form-message" class="form-control" rows="4"></textarea></div><button name='btn' type="submit" class="btn btn-primary">Gửi lời nhắn</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->