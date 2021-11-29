<?php
session_start();
ob_start();
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

include_once "../model/hamsanpham.php";
include_once "../model/hamnguoidung.php";
include_once "../model/hamtintuc.php";
include_once '../model/global.php';
include_once 'sendMail.php';

if(isset($_GET['act']))
    $action = $_GET['act'];
else
    $action = 'home';


switch ($action) {
    case 'home':
        if (isset($_GET['id_source']) && ($_GET['id_source']) > 0) {
            $id_pro = $_GET['id_source'];
            $detai_pro = get_detail_product_id($id_pro);
        }
        $sanpham_hot = get_All_Products_HOT();
        $sanpham_bc = get_All_Products_BC();
        // $sanpham_mv=get_All_Products_mv();
        $tin_nb=get_All_list_news_nb();
        $main = '../view/home.php';
        include_once '../view/header.php';
        break;
    
    case 'product_type':

        if(!isset($_GET['id_category']))
            die('Đường dẫn của bạn bị sai rồi :(((');

        $id_category = (int)$_GET['id_category'];

        $name_page = get_name_category($id_category);
        if($name_page == false)
            die('Đường dẫn của bạn sai hoặc doanh mục đã bị xóa khỏi hệ thống!!!');

        # phân trang trong loại
        $page_size = 6; // số sản phẩm hiển thị
        $page_num = 1;
        if (isset($_GET['page_num'])) $page_num = $_GET['page_num']+0;
        if ($page_num<=0) $page_num=1;
        $base_url = Get_current_link('notQuery');

        $total_rows = get_All_product_by_category_COUNT($id_category);
        
        
        # lấy loại sp và danh sách của sp theo loại
        $danhmuc = get_All_category_product();
        $sanpham = get_All_product_by_category($id_category,$page_num, $page_size);

        # tên để hiển thị 
        $name_page = $name_page['tenLoai'];

        $main = '../view/product_all.php';
        include_once '../view/header.php';
        break;


    case 'login_account':

        // controller xử lý login - regist
        include_once 'LoginController.php';

        if(!isset($_SESSION['login_user'])){

            $main = '../view/user/login.php';
            include_once '../view/header.php';

        } else echo "Bạn đã đăng nhập rồi mà nhỉ?";

        break;
    
    case 'view_account':

        // xử lý trang thông tin người dùng
        include_once 'LoginController.php';

        # không đăng nhập không được vào xem
        if(isset($_SESSION['login_user']))

            include_once 'UserController.php';
        else 

            echo "Bạn chưa đăng nhập mà xem gì v b?";
        
        break;
    case 'test':
        $my_cart = $_SESSION['mycart'];

        if(isset($my_cart[3]))
            echo "tim thay";

        print_r(($_SESSION['mycart']));
        echo '<pre>';
        break;

    case 'api-list-cart':
        $data = $_SESSION['mycart'];
        $allCart = 0;
        include_once '../view/ajax/showCart.php';
        break;

    case 'my_cart':
        $main = '../view/cart.php';
        include_once '../view/header.php';
        break;

    case 'api-del-cart':
        # kiểm tra có dữ liệu dc gửi tới và xóa sản phẩm khỏi cart
        if(isset($_GET['id']))
            unset($_SESSION['mycart'][$_GET['id']]);
        echo count($_SESSION['mycart']);
        break;


    case 'api-add-cart':
        if(isset($_POST['id_prod']) && ($_POST['id_prod'])){

            $my_cart = $_SESSION['mycart'];

            $id_pro = $_POST['id_prod'];
            $price = $_POST['gia'];
            $ten = $_POST['tensp'];
            $anh = $_POST['hinhanh'];
            $sl = (int)$_POST['soluong'];

            if(isset($my_cart[$id_pro])){
                $_SESSION['mycart'][$id_pro]['quantity'] += 1;
                $_SESSION['mycart'][$id_pro]['price'] += $price * $sl;
            } else {
                $_SESSION['mycart'][$id_pro] = 
                [
                    'thumb'         => $anh,
                    'nameProduct'   => $ten,
                    'price'         => $price * $sl,
                    'quantity'      => $sl
                ];
            }
            echo count($_SESSION['mycart']);
        }
        break;

    case 'list_news':
        # phân trang trong loại
        $page_size = 5; // số tin hiển thị
        $page_num = 1;
        if (isset($_GET['page_num'])) $page_num = $_GET['page_num']+0;
        if ($page_num<=0) $page_num=1;
        $base_url = Get_current_link('notQuery');

        $total_rows = get_All_blog_COUNT();
        $new = get_All_blog($page_num, $page_size);
        $main = '../view/blog-list.php';
        include_once '../view/header.php';
        break;

    case 'detail_news':
        if (isset($_GET['id_source']) && ($_GET['id_source']) > 0) {
            $id_post = $_GET['id_source'];
            $detail_news = get_Detail_new($id_post);
        }
        set_view_blog($id_post);
        $main = '../view/view_blog.php';
        include_once '../view/header.php';
        break;

    case 'all_prod':
        # phân trang trong loại
        $page_size = 1; // số sản phẩm hiển thị
        $page_num = 1;
        if (isset($_GET['page_num'])) $page_num = $_GET['page_num']+0;
        if ($page_num<=0) $page_num=1;
        $base_url = Get_current_link('notQuery');
        if (isset($_GET['search'])) {
            $keyword = $_GET['search'];
            $sanpham = getProductByKeyword($keyword);
        }
        $total_rows = get_All_product_by_keyword($keyword);


        
        $danhmuc = get_All_category_product();

        $name_page = 'Tất cả sản phẩm';
        $main = '../view/product_all.php';
        include_once '../view/header.php';
        break;

    case 'detail_prod':
        if (isset($_GET['id_source']) && ($_GET['id_source']) > 0) {
            $id_pro = $_GET['id_source'];
            $detai_pro = get_detail_product_id($id_pro);

            if(!isset($detai_pro['idSP']))
                die('Sản phẩm không tồn tại');

            $current_link =  Get_current_link();
            
            #thêm lượt xem cho sản phẩm
            set_view_product($id_pro);
            $main = '../view/product_view.php';
            include_once '../view/header.php';
        } else echo "Đường dẫn sai nè!";
        
        break;
    case 'contact':
        $main = "../view/contact-us.php";
        include_once '../view/header.php';
        break;
    case 'forget-pass':
        $main = "../view/user/forget-password.php";
        include_once '../view/header.php';
        break;
}

