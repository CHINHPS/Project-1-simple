<?php
    function GuiMailContact($emailKhach,$hoVaTen, $tieuDe, $noiDung){
        require "../PHPMailer-master/src/PHPMailer.php"; 
        require "../PHPMailer-master/src/SMTP.php"; 
        require '../PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'duanfpolyeducation@gmail.com'; // SMTP username
            $mail->Password = 'A.f.1st.cf';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('duanfpolyeducation@gmail.com', 'Mail contact' ); 
            $mail->addAddress('duanfpolyeducation@gmail.com', 'Mail contact'); //mail và tên người nhận  
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = $tieuDe;
            $noidungthu = '<h3>Thư liên hệ từ khách hàng</h3>
            <hr>
            <p>Họ và tên khách hàng: '.$hoVaTen.'</p>
            <p>Email khách hàng: '.$emailKhach.'</p>
            <p>Nội dung liên hệ: '.$noiDung.'</p>';
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
        } catch (Exception $e) {
            echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
     }//function GuiMail
     function GuiMailXacNhan($emailKhach){
        require "../PHPMailer-master/src/PHPMailer.php"; 
        require "../PHPMailer-master/src/SMTP.php"; 
        require '../PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'duanfpolyeducation@gmail.com'; // SMTP username
            $mail->Password = 'A.f.1st.cf';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('duanfpolyeducation@gmail.com', 'Galaxy Phone' ); 
            $mail->addAddress($emailKhach, ''); //mail và tên người nhận  
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Kích hoạt tài khoản Galaxy Phone';
            //randomkey = mã hóa md5 của email từ kí tự 7 đến -3
            $noidungthu = 'Link kích hoạt tài khoản: <a href="http://localhost/duan1_2/controller/activeUser.php?randomkey='.substr(md5($emailKhach),7,-3).'">Nhấn vào đây</a>';
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
        } catch (Exception $e) {
            echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
     }//function GuiMail
?>