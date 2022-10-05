<?php 
    session_start();
    include("lib/dbCon.php");
    include("lib/trangchu.php");
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }else{
        $p = "";
    }
?>
<?php 
    //Login
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql = "SELECT * FROM users
                WHERE Username = '$username'
                AND Password = '$password'
                ";

        $dangnhap = mysqli_query($conn,$sql);
        if (mysqli_num_rows($dangnhap)==1) {
            $row = mysqli_fetch_array($dangnhap);
            $_SESSION['username'] = $row['Username'];
            $_SESSION['idUser'] = $row['idUser'];
            $_SESSION['HoTen'] = $row['HoTen'];
            $_SESSION['idGroup'] = $row['idGroup'];
            header("location:../admin");  
        }else{
            echo "1";
         
    }
    //Logout
    if (isset($_POST['logout'])) {
        unset($_SESSION['username']);
        unset($_SESSION['idUser']);
        unset($_SESSION['HoTen']);
        unset($_SESSION['idGroup']);
        
    }
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web tin tuc</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>

<body>
<div id="wrap-vp">
	<div id="header-vp">
    	<div id="logo"><a href="./"><img src="images/logo.gif" /></a></div>
    </div>
    
    <div>
    	<?php 
            require "blocks/menu.php";
        ?>
    </div>
      <div id="midheader-vp">
    	<div id="left">
        	<ul class="list_arrow_breakumb">
            	<li class="start">
                <a href="javascript:;">Trang nhất</a>
                <span class="arrow_breakumb">&nbsp;</span></li>
           </ul>
        </div>
        <div id="right">
			<!--blocks/thongtinchung.php-->
        <?php 
            require "blocks/thongtinchung.php";
        ?>
        </div>
    </div>
    <div class="clear"></div>

    <div id="slide-vp">
    	<!--blocks/top_trang_chu.php-->
        <?php 
            require "blocks/top_trang_chu.php";
        ?>

        <div id="slide-right">
        <!--blocks/quangcao_top_phai.php-->
        <?php 
            require "blocks/quangcao_top_phai.php";
        ?>
        </div>
    </div>

  	<div id="content-vp">
    	<div id="content-left">
		<!--blocks/cot_trai.php-->
        <?php 
            require "blocks/cot_trai.php";
        ?>
        </div>
        <div id="content-main">
			
			<!--PAGES-->
            <?php 
                switch ($p) {
                   case 'tintrongloai':
                        require "pages/tintrongloai.php";
                        break;
                    case 'chitiettin':
                        require "pages/chitiettin.php";
                        break;
                    case 'timkiem':
                        require "pages/timkiem.php";
                        break;    
                    default:
                        require "pages/trangchu.php";
                        break;
                }
            ?>
            
        </div>
        <div id="content-right">
		<!--blocks/cot_phai.php-->
        <?php 
            if (!isset($_SESSION['username'])) {
                require "blocks/formLogin.php";
            }
            else{
                require "blocks/welcome.php";
            }
        ?>
        <?php 
            require "blocks/cot_phai.php";
        ?>
        </div>

    <div class="clear"></div>
    	
    </div>
    
     <div id="thongtin">
    	<!--blocks/thongtindoanhnghiep.php-->
        <?php 
            require "blocks/thongtindoanhnghiep.php";
        ?>
    </div>
    <div class="clear"></div>
    <div id="footer">
    	<!--blocks/footer.php-->
        <?php 
            require "blocks/footer.php";
        ?>
        
        <div class="ft-bot">
            <div class="bot1"><img src="images/logo.gif" /></div>
            <div class="bot2">
                     <p>© <span>Copyright 1997 VnExpress.net,</span>  All rights reserved</p>
                     <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
            </div>
            <div class="bot3">
                
                     <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>   <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                     <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                  
            </div>
        </div>
    </div>

  <h1>test</h1>
    <h2>test</h2>
    
    
</div>

</body>
</html>

<?php
echo 1;
echo 2;
echo 3;
echo 4;
echo 5;
echo 6;
echo 8;
echo 7;
echo 9;
echo 10;
echo 11;
echo 12;
echo 13;
echo 14;
echo 15;
echo 16;
echo 17;
echo 18;
echo 19;
echo 20;
echo 21;
echo 22;
echo 23;
echo 24;
echo 25;
echo 26;
echo 27;
echo 28;
echo 29;
echo 30;
echo 31;
echo 32;
echo 33;
echo 34;
echo 35;
echo 36;
echo 37;
echo 38;
echo 39;
echo 40;
echo 41;
echo 42;
echo 43;
echo 44;
echo 45;
echo 46;
echo 47;
echo 48;
echo 49;
echo 50;
echo 51;
echo 52;
echo 53;
echo 54;
echo 55;
echo 56;
echo 57;
echo 58;
echo 59;
echo 60;
echo 61;
?>
