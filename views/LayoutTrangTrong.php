<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>Media Mart</title>
<link rel="shortcut icon" href="assets/frontend/100/047/633/themes/517833/assets/favicon221b.png" type="image/x-icon" />
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<!-- header -->
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">Media Mart</h1>
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        <!-- end support -->
        <div class="online_support block">
          <div class="new_title">
            <h2 >Hỗ trợ trực tuyến</h2>
          </div>
          <div class="block-content">
            <div class="sp_1">
              <p>Tư vấn bán hàng 1</p>
              <p>Mr. user: 0987654321</p>
            </div>
            <div class="sp_mail">
              <p>Email liên hệ</p>
              <p>User@mail.com</p>
            </div>
          </div>
        </div>
        <!-- end support online --> 
        <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-sidebar"> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua Macbook và Macbook Air Plus chính hãng ở đâu?" title="Mua Macbook và Macbook Air Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">Mua Macbook và Macbook Air Plus chính hãng ở đâu?</a></h3>
                    <p class="desc">
                    <p>X-37B c&oacute; thể triển khai như vũ kh&iacute; ti&ecirc;u diệt vệ tinh của đối phương, hoặc thả vũ kh&iacute; động năng đến bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i Đất.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua Macbook và Macbook Air Plus chính hãng ở đâu?" title="Mua Macbook và Macbook Air Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">Mua Macbook và Macbook Air Plus chính hãng ở đâu?</a></h3>
                    <p class="desc">
                    <p>X-37B c&oacute; thể triển khai như vũ kh&iacute; ti&ecirc;u diệt vệ tinh của đối phương, hoặc thả vũ kh&iacute; động năng đến bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n Tr&aacute;i Đất.</p>
                    </p>
                  </div>
                </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=17" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=17">Samsung và Oppo tiếp tục thống trị thị trường đầu năm 2017 tại Việt Nam</a></h3>
                    <p class="desc">
                    <p>(D&acirc;n tr&iacute;) - Hầu hết c&aacute;c sản phẩm nằm trong top 10 b&aacute;n chạy th&aacute;ng 2 v&agrave; nửa đầu th&aacute;ng 3 năm 2017 của c&aacute;c nh&agrave; b&aacute;n lẻ đều đến từ Samsung v&agrave; Oppo. C&aacute;c thương hiệu lớn kh&aacute;c dần dần bị thụt l&ugrave;i về sau...</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=16" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=16">Những dấu hiệu cho thấy chiếc tủ lạnh nhà bạn đang gặp vấn đề</a></h3>
                    <p class="desc">
                    <p>(D&acirc;n tr&iacute;) - Mặc d&ugrave; l&agrave; một thiết bị điện tử với độ bền cao, thậm ch&iacute; c&oacute; thể l&ecirc;n tới 10-20 năm, nhưng điều đ&oacute; kh&ocirc;ng c&oacute; nghĩa l&agrave; tủ lạnh kh&ocirc;ng thể hỏng h&oacute;c hay gặp sự cố.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=15" class="image"> <img src="assets/frontend/images/anhbia.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=15">Oppo khởi chạy chương trình đặt hàng trước F3 Plus tại Việt Nam</a></h3>
                    <p class="desc">
                    <p>Sau ng&agrave;y ra mắt ch&iacute;nh thức v&agrave;o 23/3 tới, Oppo sẽ tiến h&agrave;nh chương tr&igrave;nh đặt h&agrave;ng trước F3 Plus từ ng&agrave;y 24/3 đến hết ng&agrave;y 31/3/2017, kh&aacute;ch h&agrave;ng đặt mua trước sản phẩm F3 Plus sẽ nhận được bộ qu&agrave; tặng d&agrave;nh hấp dẫn.</p>
                    </p>
                  </div>
                </div>
              </div>
              <!-- end list hot news --> 
            </div>
          </div>
        </div>
        <!-- end hot news --> 
        <!-- adv --> 
        
        <!-- end adv --> 
        
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php echo $this->view; ?>
        
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
    <div class="widebanner"> <a href="#"><img src="./assets/frontend/100/047/633/themes/517833/assets/banner.png" alt="#" class="img-responsive"></a> </div>
    <!-- end adv --> 
    
  </div>
</div>

<footer id="footer">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>THÔNG TIN MEDIAMART</h3>
          <ul class="list-unstyled">
            <li><a href="https://mediamart.vn/he-thong-sieu-thi">Hệ thống 350 Siêu thị (8:00-21:30)</a></li>
            <li><a href="https://mediamart.vn/thong-tin-chung/gioi-thieu-cong-ty">Giới thiệu công ty</a></li>
            <li><a href="https://mediamart.vn/tuyen-dung">Tuyển dụng</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/quy-dinh-thanh-toan">Phương thức thanh toán</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Hỗ trợ khách hàng</h3>
          <ul class="list-unstyled">
            <li><a href="https://mediamart.vn/ho-tro-mua-hang/huong-dan-mua-hang-online">Hướng dẫn mua hàng Online</a></li>
            <li><a href="https://mediamart.vn/uu-dai-tra-gop">Mua hàng trả góp</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/chinh-sach-doi-tra-hang">Chính sách bảo hành, đổi trả</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/chinh-sach-giao-nhan">Giao hàng và lắp đặt</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/quy-dinh-bao-mat">Chính sách bảo mật TT cá nhân</a></li>
            <li><a href="https://tracuuhoadon.mediamart.com.vn/">In hóa đơn điện tử</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Tổng đài gọi hỗ trợ</h3>
          <ul class="list-unstyled">
            <li><a href="tel:19006788">Bán hàng: 1900 6788</a></li>
            <li><a href="tel:19006743">Bảo hành: 1900 6743</a></li>
            <li><a href="tel:19006741">Khiếu nại: 1900 6741</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Theo dõi MediaMart trên</h3>
          <ul class="list-unstyled">
            <li>
              <a style="margin-left: 10px" href="https://www.facebook.com/DienmayMediaMart" title="MediaMart Facebook Fanpage"> 
                <img src="assets/frontend/images/fb.png" alt="MediaMart Facebook Fanpage">
              </a>
              <a style="margin-left: 10px" href="https://www.youtube.com/c/CongtyMediamart" title="MediaMart Youtube Channel"> 
                <img src="assets/frontend/images/yt.png" alt="MediaMart Youtube Channel"> 
              </a>
              <a style="margin-left: 10px" href="https://www.tiktok.com/@mediamart.official" title="MediaMart Tiktok Channel"> 
                <img src="assets/frontend/images/tt.png" alt="MediaMart Tiktok Channel"> 
              </a>
            </li>
            <h3 style="margin-top: 15px">Theo dõi MediaMart trên</h3>
            <li>
              <a href="https://apps.apple.com/vn/app/mediamartvn/id1572630752" title="MediaMart iOS App"> 
                <img style="witdh: 45%"  src="assets/frontend/images/ios.png" alt="MediaMart iOS App">
              </a>
              <a href="#" title="MediaMart Android App"> 
              <img style="witdh: 45%" src="assets/frontend/images/chplay.png" alt="MediaMart Android App"> 
              </a>
            </li>
          </ul>
          
        </div>
      </div>
      <div class="payments-method"> <img src="assets/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> © Bản quyền User</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
</body>
</html>