<?php  

    require_once "config/fungsi_tanggal.php";
    
    require_once "config/fungsi_nama_hari_bulan.php";

    include "rekap.php";
  
?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SIP-ONLINE</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="SISTEM PELAYANAN PERIJINAN TENAGA KESEHATAN">
        <meta name="keywords" content="SISTEM PELAYANAN PERIJINAN TENAGA KESEHATAN">
        <meta name="author" content="CAHAYAMEDIA">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

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
                                <a href="home"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                          
                           <?php include "menu.php" ?>
                      </header>

                     <main>

                     <?php include "content.php" ?>

                     </main>
   <footer>
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
                                <h4>Dinas Kesehatan Kab. Sleman</h4>
                            
                                 <div class="footer-pera">
                                     <p class="info1">Jl. Roro Jongrang No 6 Beran<br>Tridadi, Sleman, Yogyakarta<br>0274 868 409<br>dinkes@slemankab.go.id</p>
                                     
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
                             
                         
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <img src="assets/img/poster1.jpeg" width="270" height="300">
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
   Dinas Kesehatan Kabupaten Sleman - Bidang Pelayanan Medik &copy;<script>document.write(new Date().getFullYear());</script>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
      </footer>
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

        <script type="text/javascript">
    $(document).ready(function(){
        // =========================================== Onload ============================================
        // load file untuk menampilkan jumlah dan total data pembelian
        $('#loadJumlahPembelianBulan').load('modules/beranda/get_jumlah_pembelian_bulan.php');
        $('#loadTotalPembelianBulan').load('modules/beranda/get_total_pembelian_bulan.php');
        $('#loadJumlahPembelianTahun').load('modules/beranda/get_jumlah_pembelian_tahun.php');
        $('#loadTotalPembelianTahun').load('modules/beranda/get_total_pembelian_tahun.php');
        $('#loadJumlahPembelianSeluruh').load('modules/beranda/get_jumlah_pembelian_seluruh.php');
        $('#loadTotalPembelianSeluruh').load('modules/beranda/get_total_pembelian_seluruh.php');
        $('#loadTotalPembelianBulan2').load('modules/beranda/get_total_pembelian_bulan2.php');
        $('#loadJumlahPembelianTahun2').load('modules/beranda/get_jumlah_pembelian_tahun2.php');
        $('#loadJumlahPembelianTahun3').load('modules/beranda/get_jumlah_pembelian_tahun3.php');
         $('#loadJumlahPembelianTahun4').load('modules/beranda/get_jumlah_pembelian_tahun4.php');

        // load file untuk menampilkan jumlah dan total data penjualan
        $('#loadJumlahPenjualanHari').load('modules/beranda/get_jumlah_penjualan_hari.php');
        $('#loadTotalPenjualanHari').load('modules/beranda/get_total_penjualan_hari.php');
        $('#loadJumlahPenjualanBulan').load('modules/beranda/get_jumlah_penjualan_bulan.php');
        $('#loadTotalPenjualanBulan').load('modules/beranda/get_total_penjualan_bulan.php');
        $('#loadJumlahPenjualanTahun').load('modules/beranda/get_jumlah_penjualan_tahun.php');
        $('#loadTotalPenjualanTahun').load('modules/beranda/get_total_penjualan_tahun.php');
        $('#loadJumlahPenjualanSeluruh').load('modules/beranda/get_jumlah_penjualan_seluruh.php');
        $('#loadTotalPenjualanSeluruh').load('modules/beranda/get_total_penjualan_seluruh.php');

        // load file untuk menampilkan jumlah data
        $('#loadSupplier').load('modules/beranda/get_supplier.php');
        $('#loadObat').load('modules/beranda/get_obat.php');
        $('#loadUser').load('modules/beranda/get_user.php');
        $('#loadDatabase').load('modules/beranda/get_database.php');

        // dataTables plugin untuk membuat nomor urut tabel
        $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings)
        {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        // menampilkan data obat yang stok mencapai batas minimum
        var table = $('#tabel-stok').DataTable( {
            "lengthChange": false,                      // non-aktifkan lengthChange (fitur untuk menampilkan jumlah data per halaman)
            "searching": false,                         // non-aktifkan form pencarian
            "processing": true,                         // tampilkan loading saat proses data
            "serverSide": true,                         // server-side processing
            "ajax": 'modules/beranda/get_stok.php',     // panggil file "get_minimum.php" untuk menampilkan data obat dari database
            // menampilkan data
            "columnDefs": [ 
                { "targets": 0, "data": null, "orderable": false, "searchable": false, "width": '30px', "className": 'center' },
                {
                    "targets": 1, "width": '250px',
                    "render": function ( data, type, row ) {
                        return  data +' - '+ row[ 2 ];
                    }
                },
                { "targets": 2, "visible": false },                         // kolom "nama_obat" disembunyikan, digabung dengan kolom "kode_obat"
                { "targets": 3, "width": '100px', "className": 'center' }
            ],
            "order": [[ 1, "asc" ]],            // urutkan data berdasarkan "kode_obat" secara asccending
            "iDisplayLength": 10,               // tampilkan 10 data per halaman
            // membuat nomor urut tabel
            "rowCallback": function (row, data, iDisplayIndex) {
                var info   = this.fnPagingInfo();
                var page   = info.iPage;
                var length = info.iLength;
                var index  = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        } );

        // menampilkan data 5 obat terlaris
        $.ajax({
            url  : "modules/beranda/get_terlaris.php",      // proses get data obat
            success: function(data){                        // ketika proses get data selesai
                // tampilkan data obat
                $('#loadTerlaris').html(data);
            }
        });
        // ===============================================================================================
    });
    </script>



        
    </body>
</html>