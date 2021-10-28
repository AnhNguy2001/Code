<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>Plesire | Interactive Travel Template</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon.gif" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- date picker CSS -->
    <link href="css/datepicker.min.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
    <!-- on3step CSS -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/on3step-style.css" rel="stylesheet">
    <link href="css/queries-on3step.css" media="all" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
      <div class="mainpreloader">
        <span></span>
      </div>
    </div>
    <!-- preloader end -->
    
    <!-- content wraper -->
   <div class="content-wrapper">
    
   <header class="init">
    
    <!-- subnav -->
    <div class="container-fluid m-5-hor">
    <div class="row">
        <div class="subnav">

         <div class="col-md-6">
          <div class="left">
            <div class="social-icons-subnav hidden-sm hidden-xs">
                <div>Hỗ trợ: 1900 561 595</div>
            </div>
          </div>
         </div>
         
         <div class="col-md-6">
          <div class="right">
            <div id="sub-icon" class="social-icons-subnav">
                <a href="#"><span class="ti-facebook"></span></a>
                <a href="#"><span class="ti-dribbble"></span></a>
                <a href="#"><span class="ti-twitter"></span></a>
                <a href="#"><span class="ti-instagram"></span></a>
                <a href="#"><span class="ti-linkedin"></span></a>
            </div>
            <div class="social-icons-subnav">
              <a data-toggle="modal" data-target="#fLogin"><span class="ti-lock"></span> Đăng nhập</a>
            </div>    
            <div class="social-icons-subnav hidden-sm hidden-xs">
              <a data-toggle="modal" data-target="#fsignUp"><span class="ti-user"></span> Đăng ký</a>
            </div>
          </div>
         </div>
        
        </div>
    </div>
    </div>
    <!-- subnav end -->
    
      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid m-5-hor">
        <div class="row">
        
           <!-- menu mobile display -->
           <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span></button> 
          
          <!-- logo --> 
          <a class="navbar-brand white" href="index.html">
          <img class="white" alt="logo" src="img/logo.png">
          <img class="black" alt="logo" src="img/logo-white.png">
          </a> 
          <!-- logo end -->
          
          <!-- mainmenu start -->
          <div class="white menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                
                <li>
                 <!-- <a href="#">Trang chủ <i class="fa fa-angle-down"></i></a> -->
                 <a  href="index.html">Trang chủ <i class="fa fa-angleactived"></i></a>
                </li>
                <li>
                  <a  href="about.html">Giới thiệu <i class="fa fa-angleactived"></i></a> 
                </li>

                <li>
                  <a  href="works.html">Thư viện <i class="fa fa-angleactived"></i></a> 
                </li>
                <li>
                  <a class="actived"  href="destination.html">Điểm đến <i class="fa fa-angleactived"></i></a>
                </li>
                
                  <!-- <ul>
                    <li><a href="destination.html">Destination</a></li>
                    <li><a href="destination-404.html">Destination 404</a></li>
                  </ul> -->
                
                <li><a href="contact.html" >Liên hệ <i class="fa fa-angleactived"></i></a></li>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->
          
        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      </header>
      
      <!-- subheader -->
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Thông tin địa điểm
              </h1>
              <p>Đúng - Chính xác - Cập nhật liên tục</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->
      
      
      <!-- section -->
      <section aria-label="section-blog" id="content">
        <div class="container-fluid">
          <div class="row">
          
      <div class="v-align">
      <div class="col-md-11 col-xs-12">
      <div class="row">
          
        <!-- left content -->
        
           
        <!-- Conect -->
        <?php
        
          include('config.php');

          $id_tour = $_GET["id"];

          $sql = "
                    SELECT * 
                    FROM tbl_tour
                    INNER JOIN tbl_check 
                    on tbl_tour.id_tour = tbl_check.id_tour
                    WHERE tbl_tour.id_tour = '".$id_tour."'  

                  ";



          $noi_dung = mysqli_query($ket_noi, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được


          
              while ($row = mysqli_fetch_array($noi_dung)) 
              {  
                ;?>
              <div class="col-md-8">
              <!-- detail img -->
                <div id="projectsBig" class="owl-carousel">
                
                  <div  class="item"><img alt="Ảnh" src="<?php echo $row['anh_1'] ;?>"></div>
                  <div  class="item"><img alt="Ảnh" src="<?php echo $row['anh_2'] ;?>"></div>
                </div>
              <!-- detail img end -->

                <div  class="grid-item">
              <!-- text detail -->
                <h3  class="big-heading"><?php echo $row['diem_den'];?></h3>
                <p class="intro"><?php echo $row['gioi_thieu_tour'];?></p>
                </div>
              <!-- text detail end -->
              </div>
                  
            <!-- right content -->
            <div class="col-md-4">
              <aside>
                
                <!-- widget -->
                <div class="widget">
                <div class="service-hotel onStep animated fadeInUp" data-animation="fadeInUp" data-time="1200">
                  <div class="price">Giá<sub>/ Đêm</sub></div>
                  <p>Giới thiệu</p>

                  <!-- spacer --> 
                  <div class="space-half"></div> 

                  <h3 class="big-heading">Dịch vụ tiện nghi</h3>
                  <div class="devider-rooms-detail"></div>
                  <span><i class="ti-check-box " ></i> <?php echo $row['id_dichvu'];?></span>

                </div>
                <a class="btn-book" href="ecommerce-form.html">ĐẶT NGAY</a> 
                </div>
                <!-- widget end -->
                

                <!-- widget -->
                <div class="widget">
                  <h4 class="big-heading">
                    Tags
                  </h4>

                  <div class="devider-widget">
                  </div>

                  <div class="tags">
                    <div>
                      <a href="#">Ảnh</a>
                    </div>

                    <div>
                      <a href="#">Trends</a>
                    </div>

                    <div>
                      <a href="#">Tương Tác</a>
                    </div>

                    <div>
                      <a href="#">Cá nhân</a>
                    </div>

                    <div>
                      <a href="#">Phản ứng nhanh nhẹn</a>
                    </div>

                    <div>
                      <a href="#">Sáng tạo</a>
                    </div>

                    <div>
                      <a href="#">Thiết Kế</a>
                    </div>

                    <div>
                      <a href="#">website</a>
                    </div>

                    <div>
                      <a href="#">Ứng dụng</a>
                    </div>
                  </div>
                </div>
                <!-- widget end -->

              </aside>
            </div>
            <!-- right content end -->


              <?php 
              }
                mysqli_close($ket_noi);
               ?>
                                
          <!-- <p class="content">Mô tả thông tin chi tiết1   </p> -->


          

          
          
          <!-- left content end -->
            

            
        <!-- spacer -->  
        <div class="space-double"></div>
            
        <!-- button projects -->
        <div class="col-md-6">
        <div class="pro-btn left">
        <a class="link"  href="#">
        <i class='fa fa-long-arrow-left'></i> TRƯỚC
        </a>
        </div>
        </div>  
        <div class="col-md-6">
        <div class="pro-btn right">
        <a class="link"  href="#">
        SAU <i class='fa fa-long-arrow-right'></i>
        </a>
        </div>
        </div>   
        <!-- button projects end -->
        
           </div>
           </div>
           </div>
               
          </div>
        </div>
      </section>
      <!-- section end -->
       
      <!-- footer -->
      <footer class="main text-center">
        <div class="container-fluid m-5-hor">
          <div class="row">
          
          <div class="onStep" data-animation="fadeInUp" data-time="300">
          <div class="col-md-4 text-left">
          <span><a href="#">Email: htttql@gmail.com</a></span>
          <span>Copyright - 2021 Khoa hệ thống thông tin quản lí - BAV</span>
          </div>
          
          <div class="col-md-4">
                
            </div>
            
            <div class="col-md-4 text-right">
              <span>12 Chùa Bộc, Đống Đa, Hà Nội</span>
              <span>Phone: 024.3852.6419</span>
            </div>
            </div>

            
          </div>
        </div>
      </footer>
      <!-- footer end -->
      
      
      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        <span class="ti-angle-up"></span>
      </div>  

              <!-- modal login -->
              <div id="fLogin" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">      
                      <h4 class="modal-title">Đăng nhập</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post">
                        <div class="form-group">
                          <label>Tên đăng nhập</label>
                          <input type="text" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                          <label>Mật khẩu</label>
                          <input type="password" class="form-control" required="required">         
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">
                        </div>
                      </form>       
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#">hoặc Đăng ký</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal login end -->

              <!-- modal registration -->
              <div id="fsignUp" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">      
                      <h4 class="modal-title">Đăng ký thành viên</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                        <label>Họ</label>
                        <input type="text" name="firstname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Tên</label>
                        <input type="text" name="lastname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Địa Chỉ Email</label>
                        <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label><input type="checkbox" name="terms"> Tôi đồng ý <a href="#">Đăng ký thành viên</a>.</label>
                        </div>
                        <div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>
                        <div class="clearfix"></div>
                      </form>       
                      
                    </div>
                    <div class="modal-footer">
                      <a href="#">hoặc Đăng Nhập</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal registration end -->      

     
    </div>
    <!-- content wraper end --> 
    
    <!-- plugin JS -->
    <script src="plugin/pluginson3step.js"></script> 
    <script src="plugin/bootstrap.min.js"></script>
    <script src='plugin/bootstrap-datepicker.min.js'></script>
    <script src="plugin/sticky.js"></script> 
    <!-- slider revolution  -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- on3step JS -->
    <script src="js/on3step.js"></script>
    <script src="js/plugin-set.js"></script>
  </body>
</html>