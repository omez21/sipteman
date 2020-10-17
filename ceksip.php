<?php

?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SIP-TEMAN</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon"  href="assets/img/brebes2.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                           
                           <?php include "menu.php" ?>
                       </div>
                           
                       
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-12 ">
                                <div class="hero__caption">
                                    <h2 data-animation="fadeInLeft" data-delay=".4s">Cek Permohonan SIP</h2>
                                    <style type="text/css">
        form {
            width:100%;
            margin:50px auto;
        }
        .search {
            padding:8px 15px;
            background:rgba(50, 50, 50, 0.2);
            border:0px solid #ff99ff;
        }
        .button {
            position:relative;
            padding:6px 15px;
            left:-8px;
            border:2px solid #53bd84;
            background-color:#53bd84;
            color:#fafafa;
        }
        .button:hover  {
            background-color:#fafafa;
            color:#207cca;
        }
                  
        ::-webkit-input-placeholder { /* For WebKit browsers */
            color:    #dd3333;
                        font-family:Helvetica Neue;
                        font-weight:bold;
        }
        :-moz-placeholder { /* For Mozilla Firefox 4 to 18 */
            color:    #dd3333;
                        font-family:Helvetica Neue;
                        font-weight:bold;
        }
        ::-moz-placeholder { /* For Mozilla Firefox 19+ */
            color:    #dd3333;
                        font-family:Helvetica Neue;
                        font-weight:bold;
        }
        :-ms-input-placeholder { /* For Internet Explorer 10+ */
            color:    #dd3333;
                        font-family:Helvetica Neue;
                        font-weight:bold;
        }     
    </style>
   </head>
<body>
     <form role="form" class="form-horizontal" action="" method="POST" name="pencarian" id="pencarian">   
    <input class="search" type="text" class="form-control" name="txtcari"  minlength="5" autocomplete="on" placeholder="Masukan No.Resi" required autofocus="">
    <input class="button" type="submit" name="submit" value="Cari">   
<?php
include "config/config2.php";
if ((isset($_POST['submit'])) AND ($_POST['txtcari'] <> "")){
  $cari=$_POST['txtcari'];
   $query = mysqli_query($mysqli,"SELECT * FROM master_nakes as a inner join tenaga as b ON a.nik=b.no_ktp where b.id_sik='$cari'") or die (mysql_error());
  $jumlah=mysqli_num_rows($query);
  if ($jumlah > 0){
    echo '<p><b><font color=#0099CC>Ada '.$jumlah.' data yang sesuai.</font></b></p>';
      echo " <table class='table table-striped table-bordered dt-responsive nowrap' style='width:100%;font-size:20px'>
      <thead>
            <tr>
          <th>NAMA</th> 
          <th>JENIS</th>
          <th>Status</th>
          </tr>
          </thead>";
      while ($hasil = mysqli_fetch_assoc($query))
       { 
      $string=$hasil['id_sik'];
      $kode =base64_encode($string);
          echo "<tr align='left'>
          <td  >$hasil[nama]</td>
          <td  >$hasil[jenis]</td>
          <td  ><b style=color:blue>$hasil[keterangan]</td><b>        
          </tr>";
  }
    
    echo"</table>";
}

  else {echo "<font size=5 color=#ff0000><b><center>MOHON MAAF DATA TIDAK DITEMUKAN.</center></b></font>";}
}
?>         
</form>
</body>
</div>
</div>

                            <div class="col-lg-3">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInLeft" data-delay="1s">
                                    <img src="assets/img/hero/about_hero.png" alt="" width="300">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tips-triks-area tips-padding">
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Media Informasi</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/1.jpeg" alt="">
                            </div>
                             <div class="tips-caption">
                                <h6><a target="_blank" href="http://www.corona.brebeskab.go.id/">Sumber</a></h6>
                            
                        </div>
                    </div>
                  </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/7.jpeg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h6><a target="_blank" href="http://www.corona.brebeskab.go.id/">Sumber</a></h6>
                           
                        </div>
                    </div>
                  </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/6.jpeg" alt="">
                            </div>
                            <div class="tips-caption">
                                <h6><a target="_blank" href="http://www.corona.brebeskab.go.id/">Sumber</a></h6>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="have-project">
                
       
       
        
        <!-- Tips Triks End -->
         <!-- have-project Start-->
         <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>HOTLINE SIP</h2>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                           <div class="wantToWork-btn f-right">
                                <a href="#" class="btn btn-ans"> +62 283 671 846</a>
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- have-project End -->

    </main>
  
 <footer>

       <!-- Footer Start-->
      <div class="footer-main" data-background="assets/img/shape/footer_bg.png">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                              <div class="footer-tittle">
                               <h4>Dinas Kesehatan Kab. Brebes</h4>
                            
                                 <div class="footer-pera">
                                     <p class="info1">Jl. Dr.Wahidin No.2<br>Kaumanpulo, Brebes<br>Kec. Brebes<br>dinkes@brebeskab.go.id</p>
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
                             
                         
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <img src="assets/img/hotline2.jpeg" width="270" height="300">
                        </div>
                    </div>
                     <a target="_blank" href="http://www.corona.brebeskab.go.id/"><img src="assets/img/poster2.png" width="520" height="120"></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Dinas Kesehatan Kabupaten Brebes &copy;<script>document.write(new Date().getFullYear());</script>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
      </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>