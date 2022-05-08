<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Hotel &mdash; Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
      a {
        text-decoration: none !important;
      }
      .site-section{
  max-width: 480px;
  margin: 0px auto;
  position: relative;

}
.site-section .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 2.3em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .text-title {
  position: absolute;
  left: 20px;
  bottom: 11px;
  top: -30px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}
    </style>
  </head>
  <body>
    <div class="site-wrap">

      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->
      
      
      <div class="site-navbar-wrap js-site-navbar bg-white scrolled">
        
        <div class="container">
          <div class="site-navbar bg-light">
            <div class="py-1">
              <div class="row align-items-center">
                <div class="col-2">
                  <h2 class="mb-0 site-logo"><a href="index.html">Green Hotel</a></h2>
                </div>
                <div class="col-10">
                  <nav class="site-navigation text-right" role="navigation">
                    <div class="container">
                      
                      <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                      <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active">
                          <a href="{{route('room.index')}}">Trang chủ</a>
                        </li>
                        <li class="has-children">
                          <a href="#">Đặt Phòng</a>
                          <ul class="dropdown arrow-top">
                            @foreach ($rooms as $room)
                            <li><a href="{{route('room.order', ['roomId' => $room->id])}}">{{$room->room_type}}</a></li>
                            @endforeach
                            <li class="has-children">
                              <a href="#">DỊCH VỤ</a>
                              <ul class="dropdown">
                                <li><a href="#">TẮM HƠI</a></li>
                                <li><a href="#">ĂN UỐNG</a></li> 
                              </ul>
                            </li>
  
                          </ul>
                        </li>
                        <li><a href="{{route('events')}}">Sự kiện</a></li>
                        <li><a href="{{route('about')}}">Thông tin</a></li>
                        <li><a href="{{route('contact')}}">Liên hệ</a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <h1 class="title">Thông Tin Đặt Phòng</h1>
        <form class="contact-form row" method="post" action="{{route('room.order.store')}}">
          @csrf
          <div class="form-field col-lg-12">
            <input id="name" class="input-text" type="text" name="name" required>
            <label class="text-title" for="name">Tên Người Đặt</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="phone" class="input-text js-input" type="text" name="phone" required>
            <label class="text-title" for="phone">Số Điện Thoại</label>
          </div>
          <div class="form-field col-lg-12">
              <input id="room_type" class="input-text js-input" name="room_type" type="text" value="{{$roomOrder->room_type}}" disabled required>
              <label class="text-title" for="room_type">Loại Phòng</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="price" class="input-text js-input" name="price" type="text" value="{{$roomOrder->price}}" disabled required>
            <label class="text-title" for="price">Đơn Giá</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="time" name="time" class="input-text js-input" type="text" required>
            <label class="text-title" for="time">Thời Gian Đặt (Đơn Vị: Ngày)</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="total" name="total" class="input-text js-input" type="text" required>
            <label class="text-title" for="total">Thành Tiền</label>
          </div>
          <div class="form-field m-auto">
            <input class="submit-btn" type="submit" value="Submit">
          </div>
          <input type="hidden" value="{{$room->id}}" name="id">
        </form>
      </div>
  
      <div class="py-5 quick-contact-info">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center">
              <div>
                <span class="icon-room text-white h2 d-block"></span>
                <h2>Location</h2>
                <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div>
                <span class="icon-clock-o text-white h2 d-block"></span>
                <h2>Service Times</h2>
                <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
                Fridays at Sunset - 7:30PM <br>
                Saturdays at 8:00AM - Sunset</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div>
                <span class="icon-comments text-white h2 d-block"></span>
                <h2>Get In Touch</h2>
                <p class="mb-0">Email: info@yoursite.com <br>
                Phone: (123) 3240-345-9348 </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="site-footer">
        <div class="container">
          
  
          <div class="row">
            <div class="col-md-4">
              <h3 class="footer-heading mb-4 text-white">About</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
              <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">About</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Approach</a></li>
                      <li><a href="#">Sustainability</a></li>
                      <li><a href="#">News</a></li>
                      <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                  <h3 class="footer-heading mb-4 text-white">Ministries</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Children</a></li>
                      <li><a href="#">Women</a></li>
                      <li><a href="#">Bible Study</a></li>
                      <li><a href="#">Church</a></li>
                      <li><a href="#">Missionaries</a></li>
                    </ul>
                </div>
              </div>
            </div>
  
            
            <div class="col-md-2">
              <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
                <div class="col-md-12">
                  <p>
                    <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                    <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                    <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                    <a href="#" class="p-2"><span class="icon-vimeo"></span></a>
  
                  </p>
                </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
  
    <script src="js/mediaelement-and-player.min.js"></script>
   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $('#time').change(function () {
          $('#total').val(parseInt($('#time').val()) * parseInt($('#price').val()));
        })
    </script>
  </body>
</html>