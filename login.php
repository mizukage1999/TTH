<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
   <title>Đăng nhập</title>
</head>
<body>
   

    <form action="#" method="POST">
      <table align="center">
         
         <tr>
            <td>
               Username
            </td>
            <td>
               <input type="text" name="loginname">
            </td>
         </tr>
         
         <tr>
            <td>
               Password
            </td>
            <td>
               <input type="text" name="password">
            </td>
         </tr>
         <tr>
            <td colspan="2" align="center">
            <input type="submit" name="btn_dangnhap" value="Sign In">
            </td>
         </tr>
      </table>
    </form>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</body>
</html>
<?php
        
        if (isset($_POST["btn_dangnhap"])) {
            $username = $_POST["loginname"];
            $password = $_POST["password"];
            if ($username == "" || $password =="") {
                echo "Username hoặc Password không được để trống!";
            }else if($username == "admin" || $password =="admin") {
               header('Location: succes.html');

            }else{
               echo "dang nhap that bai";
            }
                
                   
            
        }
     ?>