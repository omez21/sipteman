<?php  

    require_once "config/fungsi_tanggal.php";

    require_once "config/config2.php";

   
  
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIP-TEMAN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
<link rel="shortcut icon" href="assets/img/brebes2.png">
    <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/slicknav.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
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
                        </div>             
                       
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <span>Syarat</span>
                        <h2>Permohonan SIP</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
       <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
         <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="left">Jenis</th>
                <th></th>
               
               
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
         
           

            
            // fungsi query untuk menampilkan data dari tabel barang
            $query = mysqli_query($mysqli, "SELECT * FROM formulir")
                                            or die('Ada kesalahan pada query tampil Data Barang: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
                 
              $nike=$data['id'];
             
          
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='180' class='left'>$data[jenis]</td>
                     
                      <td class='center' width='80'>
                        <div>
                     
                          <a data-toggle='tooltip' data-placement='top' title='Cetak Syarat' style='margin-right:5px' class='btn btn-primary btn-sm' target='_blank' href='../../../sipbrebes/file/$data[file]'>
                              <i style='color:#fff' class='fa fa-file-pdf'></i>
                          </a>
                         

                          
                    
                      ";
            ?>
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section>

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
          <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>HOTLINE SIP </h2>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                           <div class="wantToWork-btn f-right">
                                <a href="#" class="btn btn-ans">081 619 118 644</a>
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- have-project End -->
    
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
                     <a target="_blank" href="https://dinkes.slemankab.go.id/media"><img src="assets/img/poster2.png" width="520" height="120"></a>

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
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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