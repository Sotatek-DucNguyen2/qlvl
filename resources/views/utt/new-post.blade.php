<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng tin tuyển dụng</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
  
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html">Home</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="index.html" class="nav-link">Trang chủ</a></li>
         <li class="nav-item"><a href="about.html" class="nav-link">Giới thiệu</a></li>
         <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.html" class="nav-link">Liên hệ</a></li>
         <li class="nav-item cta mr-md-2"><a href="new-post.html" class="nav-link">Đăng tin tuyển dụng</a></li>
         <li class="nav-item cta cta-colored"><a href='#modal-id' class="nav-link" data-toggle="modal">Đăng nhập</a></li>
         
         <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
         <div class="modal fade" id="modal-id">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="ftco-login">
                  <div class="row">
                   <div class="col-md-12 nav-link-wrap">

                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Đăng nhập</a></li>
                      <li><a data-toggle="tab" href="#signup-id">Đăng kí</a></li>
                    </ul>

                    <div class="tab-content">

                      <div id="home" class="tab-pane in active">
                        <form action="">
                          <p class="message text-center">Đăng nhập để khám phá website</p>
                          <div class="form-group">
                            <input class="form-control input-email" placeholder="Địa chỉ email" type="text" name="" value="">
                          </div>

                          <div class="form-group">
                            <input class="form-control input-pwd" type="password" name="" value="" placeholder="Mật khẩu">
                          </div>
                          <div class="checkbox">
                            <label class="remember"><input type="checkbox" name="remember"> Remember me</label>
                          </div>
                          <div class="form-group text-center">
                            <button type="submit" class="btn btn-default login" value="">Đăng nhập</button>
                          </div>
                          
                        </form>
                      </div>
                      <!-- end form signin -->

                      <div id="signup-id" class="tab-pane fade">
                        <form action="">
                          <p class="message text-center">Đăng kí để ứng tuyển nhanh hơn</p>
                          <div class="form-group">
                            <input type="text" class="form-control input-usename" name="" value="" placeholder="Tên đăng nhập">
                          </div>

                          <div class="form-group">
                            <input type="text" class="form-control input-email" name="" value="" placeholder="Địa chỉ email">
                          </div>

                          <div class="form-group">
                            <input class="form-control input-pwd" type="password" name="" value="" placeholder="Mật khẩu">
                          </div>
                          <div class="form-group text-center">
                            <button type="submit" class="btn btn-default login" value="">Đăng kí</button>
                          </div>
                          
                        </form>
                      </div>

                      <!-- end form signup -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </ul>
  </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Đăng tin tuyển dụng</span></p>
       <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đăng tin tuyển dụng</h1>
     </div>
   </div>
 </div>
</div>

<div class="ftco-section bg-light">
  <div class="container">
    <div class="row">
     
      <div class="col-md-12 col-lg-8 mb-5">
        
        <form action="#" class="p-5 bg-white">

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Tên công việc</label>
              <input type="text" id="fullname" class="form-control" placeholder="Ví dụ: lập trình PHP...">
            </div>
          </div>

          <div class="row form-group mb-5">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Công ty</label>
              <input type="text" id="fullname" class="form-control" placeholder="Ví dụ: FPT Software">
            </div>
          </div>


          <div class="row form-group">
            <div class="col-md-12"><h3>Loại công việc</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-job-type-1">
                <input type="radio" id="option-job-type-1" name="job-type"> Full Time
              </label>
            </div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-job-type-2">
                <input type="radio" id="option-job-type-2" name="job-type"> Part Time
              </label>
            </div>

            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-job-type-3">
                <input type="radio" id="option-job-type-3" name="job-type"> Freelance
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-4">
                  <input type="radio" id="option-job-type-4" name="job-type"> Internship
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-4">
                  <input type="radio" id="option-job-type-4" name="job-type"> Termporary
                </label>
              </div>

            </div>

            <div class="row form-group mb-4">
              <div class="col-md-12"><h3>Địa điểm làm việc</h3></div>
              <div class="col-md-12 mb-3 mb-md-0">
                <select name= "flatform" class="form-control">
                  <option value="An Giang">An Giang
                  <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                  <option value="Bắc Giang">Bắc Giang
                  <option value="Bắc Kạn">Bắc Kạn
                  <option value="Bạc Liêu">Bạc Liêu
                  <option value="Bắc Ninh">Bắc Ninh
                  <option value="Bến Tre">Bến Tre
                  <option value="Bình Định">Bình Định
                  <option value="Bình Dương">Bình Dương
                  <option value="Bình Phước">Bình Phước
                  <option value="Bình Thuận">Bình Thuận
                  <option value="Bình Thuận">Bình Thuận
                  <option value="Cà Mau">Cà Mau
                  <option value="Cao Bằng">Cao Bằng
                  <option value="Đắk Lắk">Đắk Lắk
                  <option value="Đắk Nông">Đắk Nông
                  <option value="Điện Biên">Điện Biên
                  <option value="Đồng Nai">Đồng Nai
                  <option value="Đồng Tháp">Đồng Tháp
                  <option value="Đồng Tháp">Đồng Tháp
                  <option value="Gia Lai">Gia Lai
                  <option value="Hà Giang">Hà Giang
                  <option value="Hà Nam">Hà Nam
                  <option value="Hà Tĩnh">Hà Tĩnh
                  <option value="Hải Dương">Hải Dương
                  <option value="Hậu Giang">Hậu Giang
                  <option value="Hòa Bình">Hòa Bình
                  <option value="Hưng Yên">Hưng Yên
                  <option value="Khánh Hòa">Khánh Hòa
                  <option value="Kiên Giang">Kiên Giang
                  <option value="Kon Tum">Kon Tum
                  <option value="Lai Châu">Lai Châu
                  <option value="Lâm Đồng">Lâm Đồng
                  <option value="Lạng Sơn">Lạng Sơn
                  <option value="Lào Cai">Lào Cai
                  <option value="Long An">Long An
                  <option value="Nam Định">Nam Định
                  <option value="Nghệ An">Nghệ An
                  <option value="Ninh Bình">Ninh Bình
                  <option value="Ninh Thuận">Ninh Thuận
                  <option value="Phú Thọ">Phú Thọ
                  <option value="Quảng Bình">Quảng Bình
                  <option value="Quảng Bình">Quảng Bình
                  <option value="Quảng Ngãi">Quảng Ngãi
                  <option value="Quảng Ninh">Quảng Ninh
                  <option value="Quảng Trị">Quảng Trị
                  <option value="Sóc Trăng">Sóc Trăng
                  <option value="Sơn La">Sơn La
                  <option value="Tây Ninh">Tây Ninh
                  <option value="Thái Bình">Thái Bình
                  <option value="Thái Nguyên">Thái Nguyên
                  <option value="Thanh Hóa">Thanh Hóa
                  <option value="Thừa Thiên Huế">Thừa Thiên Huế
                  <option value="Tiền Giang">Tiền Giang
                  <option value="Trà Vinh">Trà Vinh
                  <option value="Tuyên Quang">Tuyên Quang
                  <option value="Vĩnh Long">Vĩnh Long
                  <option value="Vĩnh Phúc">Vĩnh Phúc
                  <option value="Yên Bái">Yên Bái
                  <option value="Phú Yên">Phú Yên
                  <option value="Tp.Cần Thơ">Tp.Cần Thơ
                  <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                  <option value="Tp.Hải Phòng">Tp.Hải Phòng
                  <option value="Tp.Hà Nội">Tp.Hà Nội
                  <option value="TP  HCM">TP HCM
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12"><h3>Mô tả công việc</h3></div>
              <div class="col-md-12 mb-3 mb-md-0">
                <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Đăng" class="btn btn-primary  py-2 px-5">
              </div>
            </div>

            
          </form>
        </div>

        <div class="col-lg-4">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Thông tin liên hệ</h3>
            <p class="mb-0 font-weight-bold">Địa chỉ</p>
            <p class="mb-4">54 Triều Khúc, Thanh Xuân Hà Nội</p>

            <p class="mb-0 font-weight-bold">Điện thoại:</p>
            <p class="mb-4"><a href="">0243.854 4264</a></p>

          </div>
          
        </div>
      </div>
    </div>
  </div>

  
  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Đăng kí để nhận tin mới nhất</h2>
            <div class="row d-flex justify-content-center mt-4 mb-4">
              <div class="col-md-8">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Địa chỉ email của bạn">
                    <input type="submit" value="Đang kí" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
         <div class="ftco-footer-widget mb-3">
          <h2 class="ftco-heading-2"><strong>ĐẠI HỌC CÔNG NGHỆ GTVT</strong></h2>
          <p>Số 54 Triều Khúc, Thanh Xuân, Hà Nội</p>
          <p>Điện thoại: 0243.854 4264</p>
          <p>Fax: 0243.854 7695</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="https://twitter.com"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://fb.com"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-3">
          <h2 class="ftco-heading-2"><strong>CƠ SỞ VĨNH PHÚC</strong></h2>
          <ul class="list-unstyled">
            <p>Số 278 Lam Sơn, Đồng Tâm, TP. Vĩnh Yên, Vĩnh Phúc</p>
            <p>Điện thoại: 0211.386.7405</p>
            <p>Fax: 0211.386.7391</p>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-3 ml-md-3">
          <h2 class="ftco-heading-2">CƠ SỞ THÁI NGUYÊN</h2>
          <ul class="list-unstyled">
            <p>Phường Tân Thịnh, TP.Thái Nguyên, Thái Nguyên</p>
            <p>Điện thoại: 0280.385.6545</p>
            <p>Fax: 0280.374.6975</p>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>