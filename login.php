<html lang="en">
<head>
   <<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Web/TrangChu.css">
    <link rel="stylesheet" href="./Web/Trangchu.css">
    <link rel="stylesheet" href="Trangchu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
   <title>Đăng ký</title>
   <link rel="stylesheet" href="../Web/DangKi.css">
</head>
<body>
   <table align="center">
      <tr>
          <td>
          <a href="../Web/TrangChu.php"><img src="../Web/img/logo.png" style="width:180px;"></a>
          </td>
          <td>
              <a href="../Web/TrangChu.php">Trang chủ</a>
          </td>
          <td>
            <a href="../Web/giaodien.php">Giới thiệu</a>
          </td>
          <td>
              <a href="../Web/Sanpham.php">Sản phẩm</a>
          </td>
          <td>
              <a href="../Web/lienhe.php">Liên hệ</a>
          </td>
          <td>
              <a href="../Web/GioHang.php">Giỏ hàng</a>
          </td>
          <td>
              <a href="../Web/DangNhap.php">Đăng nhập</a>
          </td>
      </tr>
      <tr>
          <td colspan="7">
              <img src="img/signup.png" style="width: 1200px">
          </td>
      </tr>
    </table>
   <?php
        require_once("../Web/lib/connection.php");
        if (isset($_POST["btn_DangKi"])){
            $HoTen = $_POST["ten"];
            $Email = $_POST["mail"];
            $loginname = $_POST["loginname"];
            $password = $_POST["password"];
            if($HoTen == "" || $password == "" || $loginname == "" || $Email ==""){
                echo "Vui lòng nhập đủ thông tin !";
            }else{
                $sql = "INSERT INTO NewSignup(HoTen,Email,Username,Password) VALUES ('$HoTen','$Email','$loginname','$password')";
                mysqli_query($conn,$sql);
                echo "Đăng ký thành công !" ;
                echo "Vui lòng chờ admin duyệt !" ;
            }
        }
    ?>
    <form action="DangKi.php" method="POST">
      <table align="center">
         <tr>
            <td>Họ tên</td>
            <td>
               <input type="text" name="ten">
            </td>
         </tr>
         <tr>
            <td>
               Email
            </td>
            <td>
               <input type="text" name="mail">
            </td>
         </tr>
         <tr>
            <td>
               Username
            </td>
            <td>
               <input type="text" name="loginname">
            </td>
         </tr>
         <tr>
            <td>Password</td>
            <td>
               <input type="password" name="password">
            </td>
         </tr>
         <tr>
            <td colspan="2" align="center">
            <input type="submit" name="btn_DangKi" value="Sign up">
            </td>
         </tr>
         <tr>
            <td>
               <a href="DangNhap.php"> Sign in</a>
                  </td>
         </tr>
         <tr>
            <td>
               <a href="../Web/TrangChu.php">←Quay lại trang chủ</a>
            </td>
         </tr>
      </table>
    </form>
    <section class="contact-section" id="contact">
    <div class="row1">
                <div class="col pan-1-of-3">
                    <ul class="thong-tin">
                        <li><a href="https://www.google.com/maps/place/Trường+Đại+học+Hutech/@10.8020946,106.7124,17z/data=!4m5!3m4!1s0x317528a459cb43ab:0x6c3d29d370b52a7e!8m2!3d10.8020946!4d106.7145887"><i class="fas fa-map-marker-alt small-icon "></i></a> Address: 27/1G Đường 147,Phước Long B, Quận 9</li>
                        <li><i class="fas fa-envelope small-icon"></i> Email: tien.nguyen.codeff@gmail.com</li>
                        <li><i class="fas fa-envelope small-icon"></i> Email: thanhhoang3599@gmail.com</li>
                        <li><i class="fas fa-phone small-icon"></i> SĐT: 0839990271</li>
                    </ul>
                    <ul class="social-icons">
                            <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com"><i class="fab fa-twitter-square"></i></a></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-google-plus-square"></i></li>
                    </ul>
                </div>
                
            </div>
        <footer>
                <p>
                    Copyright &copy; 2019 By Tien & Hoang
                </p>
            </footer>
    </section>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</body>
</html>