<?php
$mysqli = mysqli_connect("localhost","root","R4hm4n","sip");
?>
<div class="display table table-striped table-bordered table-hover">      
<table cellpadding="0" cellspacing="0" border="0" class="display table table-striped table-bordered table-hover"  >
<?php
  $tgl_awal = gmdate("Y", time()+60*60*7);
?>
 <?php
    
        $result_jan_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='01'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk = $result_jan_masuk->fetch_assoc();

        $result_jan_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='01'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar januari: '.$mysqli->error);
        $data_jan_keluar = $result_jan_keluar->fetch_assoc();

        $result_jan_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='01'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk1 = $result_jan_masuk1->fetch_assoc();

        $result_jan_masuk12 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='01'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk12 = $result_jan_masuk12->fetch_assoc();

        //=============================================================================================================================================

        $result_feb_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='02'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk februari: '.$mysqli->error);
        $data_feb_masuk = $result_feb_masuk->fetch_assoc();

        $result_feb_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='02'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar februari: '.$mysqli->error);
        $data_feb_keluar = $result_feb_keluar->fetch_assoc();

        $result_feb_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='02'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk februari: '.$mysqli->error);
        $data_feb_masuk1 = $result_feb_masuk1->fetch_assoc();

          $result_jan_masuk123 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='02'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk123 = $result_jan_masuk123->fetch_assoc();
        //=============================================================================================================================================

        $result_mar_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='03'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk maret: '.$mysqli->error);
        $data_mar_masuk = $result_mar_masuk->fetch_assoc();

        $result_mar_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='03'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar maret: '.$mysqli->error);
        $data_mar_keluar = $result_mar_keluar->fetch_assoc();

        $result_mar_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='03'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk maret: '.$mysqli->error);
        $data_mar_masuk1 = $result_mar_masuk1->fetch_assoc();

          $result_jan_masuk1234 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='03'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk1234 = $result_jan_masuk1234->fetch_assoc();
        //=============================================================================================================================================

        $result_apr_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='04'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk april: '.$mysqli->error);
        $data_apr_masuk = $result_apr_masuk->fetch_assoc();

        $result_apr_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='04'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar april: '.$mysqli->error);
        $data_apr_keluar = $result_apr_keluar->fetch_assoc();

         $result_apr_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='04'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk april: '.$mysqli->error);
        $data_apr_masuk1 = $result_apr_masuk1->fetch_assoc();

         $result_jan_masuk12345 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='04'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk12345 = $result_jan_masuk12345->fetch_assoc();
        //=============================================================================================================================================

        $result_mei_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='05'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk mei: '.$mysqli->error);
        $data_mei_masuk = $result_mei_masuk->fetch_assoc();

        $result_mei_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='05'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar mei: '.$mysqli->error);
        $data_mei_keluar = $result_mei_keluar->fetch_assoc();

         $result_mei_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='05'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk mei: '.$mysqli->error);
        $data_mei_masuk1 = $result_mei_masuk1->fetch_assoc();

          $result_jan_masuk123456 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='05'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk123456 = $result_jan_masuk123456->fetch_assoc();
        //=============================================================================================================================================

        $result_jun_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='06'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk juni: '.$mysqli->error);
        $data_jun_masuk = $result_jun_masuk->fetch_assoc();

        $result_jun_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='06'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar juni: '.$mysqli->error);
        $data_jun_keluar = $result_jun_keluar->fetch_assoc();

        $result_jun_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='06'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk juni: '.$mysqli->error);
        $data_jun_masuk1 = $result_jun_masuk1->fetch_assoc();

          $result_jan_masuk1234567 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='06'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk1234567 = $result_jan_masuk1234567->fetch_assoc();
        //=============================================================================================================================================

        $result_jul_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='07'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk juli: '.$mysqli->error);
        $data_jul_masuk = $result_jul_masuk->fetch_assoc();

        $result_jul_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='07'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar juli: '.$mysqli->error);
        $data_jul_keluar = $result_jul_keluar->fetch_assoc();

        $result_jul_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='07'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk juli: '.$mysqli->error);
        $data_jul_masuk1 = $result_jul_masuk1->fetch_assoc();

         $result_jan_masuk12345678 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='07'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk12345678 = $result_jan_masuk12345678->fetch_assoc();
        //=============================================================================================================================================

        $result_ags_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='08'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk agustus: '.$mysqli->error);
        $data_ags_masuk = $result_ags_masuk->fetch_assoc();

        $result_ags_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='08'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar agustus: '.$mysqli->error);
        $data_ags_keluar = $result_ags_keluar->fetch_assoc();

         $result_ags_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='08'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk agustus: '.$mysqli->error);
        $data_ags_masuk1 = $result_ags_masuk1->fetch_assoc();

          $result_jan_masuk123456789 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='08'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk123456789 = $result_jan_masuk123456789->fetch_assoc();
        //=============================================================================================================================================
        
        $result_sep_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='09'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk september: '.$mysqli->error);
        $data_sep_masuk = $result_sep_masuk->fetch_assoc();

        $result_sep_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='09'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar september: '.$mysqli->error);
        $data_sep_keluar = $result_sep_keluar->fetch_assoc();

        $result_sep_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='09'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk september: '.$mysqli->error);
        $data_sep_masuk1 = $result_sep_masuk1->fetch_assoc();

        $result_jan_masuk1234567891 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='09'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk1234567891 = $result_jan_masuk1234567891->fetch_assoc();
        //=============================================================================================================================================
        
        $result_okt_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='10'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk oktober: '.$mysqli->error);
        $data_okt_masuk = $result_okt_masuk->fetch_assoc();

        $result_okt_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='10'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar oktober: '.$mysqli->error);
        $data_okt_keluar = $result_okt_keluar->fetch_assoc();

         $result_okt_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='10'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk oktober: '.$mysqli->error);
        $data_okt_masuk1 = $result_okt_masuk1->fetch_assoc();

        $result_jan_masuk12345678912 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='10'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk12345678912 = $result_jan_masuk12345678912->fetch_assoc();
        //=============================================================================================================================================
        
        $result_nov_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='11'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk november: '.$mysqli->error);
        $data_nov_masuk = $result_nov_masuk->fetch_assoc();

        $result_nov_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='11'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar november: '.$mysqli->error);
        $data_nov_keluar = $result_nov_keluar->fetch_assoc();

         $result_nov_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='11'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk november: '.$mysqli->error);
        $data_nov_masuk1 = $result_nov_masuk1->fetch_assoc();

         $result_jan_masuk123456789123 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='11'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk123456789123 = $result_jan_masuk123456789123->fetch_assoc();
        //=============================================================================================================================================
        
        $result_des_masuk = $mysqli->query("SELECT count(id_sik) as jumlah FROM tenaga 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='12'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk desember: '.$mysqli->error);
        $data_des_masuk = $result_des_masuk->fetch_assoc();


        $result_des_keluar = $mysqli->query("SELECT count(id_rekom) as jumlah FROM rekom 
                                             WHERE LEFT(tgl_p,4)='$tgl_awal' AND MID(tgl_p,6,2)='12'")
                                             or die('Ada kesalahan pada query tampil data jumlah surat keluar desember: '.$mysqli->error);
        $data_des_keluar = $result_des_keluar->fetch_assoc();

        $result_des_masuk1 = $mysqli->query("SELECT count(id_permohonan) as jumlah FROM operasional 
                                            WHERE LEFT(tgl_permohonan,4)='$tgl_awal' AND MID(tgl_permohonan,6,2)='12'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk desember: '.$mysqli->error);
        $data_des_masuk1 = $result_des_masuk1->fetch_assoc();

          $result_jan_masuk1234567891234 = $mysqli->query("SELECT count(id_cabut) as jumlah FROM cabut_sip 
                                            WHERE LEFT(tgl_mohon,4)='$tgl_awal' AND MID(tgl_mohon,6,2)='12'")
                                            or die('Ada kesalahan pada query tampil data jumlah surat masuk januari: '.$mysqli->error);
        $data_jan_masuk1234567891234 = $result_jan_masuk1234567891234->fetch_assoc();

        $total1=$data_jan_masuk['jumlah']+$data_feb_masuk['jumlah']+$data_mar_masuk['jumlah']+$data_apr_masuk['jumlah']+$data_mei_masuk['jumlah']+$data_jun_masuk['jumlah']+$data_jul_masuk['jumlah']+$data_ags_masuk['jumlah']+$data_sep_masuk['jumlah']+$data_okt_masuk['jumlah']+$data_nov_masuk['jumlah']+$data_des_masuk['jumlah'];

        $total2=$data_jan_keluar['jumlah']+$data_feb_keluar['jumlah']+$data_mar_keluar['jumlah']+$data_apr_keluar['jumlah']+$data_mei_keluar['jumlah']+$data_jun_keluar['jumlah']+$data_jul_keluar['jumlah']+$data_ags_keluar['jumlah']+$data_sep_keluar['jumlah']+$data_okt_keluar['jumlah']+$data_nov_keluar['jumlah']+$data_des_keluar['jumlah'];

             $total3=$data_jan_masuk1['jumlah']+$data_feb_masuk1['jumlah']+$data_mar_masuk1['jumlah']+$data_apr_masuk1['jumlah']+$data_mei_masuk1['jumlah']+$data_jun_masuk1['jumlah']+$data_jul_masuk1['jumlah']+$data_ags_masuk1['jumlah']+$data_sep_masuk1['jumlah']+$data_okt_masuk1['jumlah']+$data_nov_masuk1['jumlah']+$data_des_masuk1['jumlah'];

              $total4=$data_jan_masuk12['jumlah']+$data_jan_masuk123['jumlah']+$data_jan_masuk1234['jumlah']+$data_jan_masuk12345['jumlah']+$data_jan_masuk123456['jumlah']+$data_jan_masuk1234567['jumlah']+$data_jan_masuk12345678['jumlah']+$data_jan_masuk123456789['jumlah']+$data_jan_masuk1234567891['jumlah']+$data_jan_masuk12345678912['jumlah']+$data_jan_masuk123456789123['jumlah']+$data_jan_masuk1234567891234['jumlah'];

    ?>
    