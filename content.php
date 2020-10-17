<?php

	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ('home') {
		include "modules/home/home.php";
	}

	elseif ('ceksip') {
		include "modules/home/ceksip.php";
	}
	elseif ($_GET['module']=='nakesumum' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/nakes/tampil_data_umum.php";
	}

	// jika halaman konten yang dipilih obat, panggil file view obat
	elseif ($_GET['module']=='obat' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/obat/view.php";
	}

	// jika halaman konten yang dipilih satuan, panggil file view satuan
	elseif ($_GET['module']=='satuan' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/satuan/view.php";
	}

	// jika halaman konten yang dipilih pembelian, panggil file view pembelian
	elseif ($_GET['module']=='pembelian' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/pembelian/view.php";
	}

	// jika halaman konten yang dipilih penjualan, panggil file view penjualan
	elseif ($_GET['module']=='penjualan' && $_SESSION['hak_akses']!='Purchasing') {
		include "modules/penjualan/view.php";
	}

	// jika halaman konten yang dipilih laporan stok, panggil file view laporan stok
	elseif ($_GET['module']=='lap_stok') {
		include "modules/laporan-stok/view.php";
	}

	elseif ($_GET['module']=='lap_rekom') {
		include "modules/lap_rekom/view.php";
	}
	elseif ($_GET['module']=='lap_rekom_idi') {
		include "modules/lap_rekom/view_idi.php";
	}

	// jika halaman konten yang dipilih laporan pembelian per periode, panggil file view laporan pembelian per periode
	elseif ($_GET['module']=='lap_pembelian_per_periode' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/laporan-pembelian-per-periode/view.php";
	}

	// jika halaman konten yang dipilih laporan pembelian perincian, panggil file view laporan pembelian perincian
	elseif ($_GET['module']=='lap_pembelian_perincian' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/laporan-pembelian-perincian/view.php";
	}
	
	// jika halaman konten yang dipilih laporan pembelian per barang, panggil file view laporan pembelian per barang
	elseif ($_GET['module']=='lap_pembelian_per_barang' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/laporan-pembelian-per-obat/view.php";
	}
	
	// jika halaman konten yang dipilih laporan pembelian per supplier, panggil file view laporan pembelian per supplier
	elseif ($_GET['module']=='lap_pembelian_per_supplier' && $_SESSION['hak_akses']!='Cashier') {
		include "modules/laporan-pembelian-per-supplier/view.php";
	}

	// jika halaman konten yang dipilih laporan penjualan per periode, panggil file view laporan penjualan per periode
	elseif ($_GET['module']=='lap_penjualan_per_periode' && $_SESSION['hak_akses']!='Purchasing') {
		include "modules/laporan-penjualan-per-periode/view.php";
	}

	// jika halaman konten yang dipilih laporan penjualan perincian, panggil file view laporan penjualan perincian
	elseif ($_GET['module']=='lap_penjualan_perincian' && $_SESSION['hak_akses']!='Purchasing') {
		include "modules/laporan-penjualan-perincian/view.php";
	}
	
	// jika halaman konten yang dipilih laporan penjualan per barang, panggil file view laporan penjualan per barang
	elseif ($_GET['module']=='lap_penjualan_per_barang' && $_SESSION['hak_akses']!='Purchasing') {
		include "modules/laporan-penjualan-per-obat/view.php";
	}
	elseif ($_GET['module']=='carinakes') {
		include "modules/nakes/carinakes.php";
	}
	elseif ($_GET['module']=='rekomop') {
		include "modules/op/carinakes.php";
	}
	elseif ($_GET['module']=='rekomidi') {
		include "modules/idi/carinakes.php";
	}

	// jika halaman konten yang dipilih konfigurasi aplikasi, panggil file view konfigurasi aplikasi
	elseif ($_GET['module']=='config' && $_SESSION['hak_akses']=='Super Admin') {
		include "modules/konfigurasi/view.php";
	}
	
	// jika halaman konten yang dipilih manajemen user, panggil file view manajemen user
	elseif ($_GET['module']=='user' && $_SESSION['hak_akses']=='Super Admin') {
		include "modules/user/view.php";
	}

	// jika halaman konten yang dipilih backup database, panggil file view backup database
	elseif ($_GET['module']=='backupdb' && $_SESSION['hak_akses']=='Super Admin') {
		include "modules/backup-database/view.php";
	}

	// jika halaman konten yang dipilih audit trail, panggil file view audit trail
	elseif ($_GET['module']=='audit_trail' && $_SESSION['hak_akses']=='Super Admin') {
		include "modules/audit-trail/view.php";
	}

	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module']=='password') {
		include "modules/password/view.php";
	}
	elseif ($_GET['module']=='tambahnakes') {
		include "modules/nakes/form_tambah.php";
	}
	elseif ($_GET['module']=='ubahnakes') {
		include "modules/nakes/form_ubah.php";
	}
	elseif ($_GET['module']=='next_daftare') {
		include "modules/faskes/form_daftar.php";
	}
	elseif ($_GET['module']=='daftarrekom') {
		include "modules/op/form_daftar.php";
	}
	elseif ($_GET['module']=='daftarrekomidi') {
		include "modules/idi/form_daftar.php";
	}
	elseif ($_GET['module']=='profil') {
		include "modules/profil/view.php";
	}
	elseif ($_GET['module']=='oke') {
		include "modules/faskes/detail.php";
	}
	elseif ($_GET['module']=='lihatsip') {
		include "modules/faskes/tampil_sip.php";
	}
	elseif ($_GET['module']=='datkes') {
		include "modules/faskes/data_sip.php";
	}
	elseif ($_GET['module']=='profiltenaga') {
		include "modules/faskes/profil.php";
	}
	elseif ($_GET['module']=='ceksip') {
		include "modules/faskes/ceksip.php";
	}
	elseif ($_GET['module']=='ubahnakese') {
		include "modules/faskes/form_ubah.php";
	}
	elseif ($_GET['module']=='caritoken') {
		include "modules/daftar/caritoken.php";
	}
	elseif ($_GET['module']=='daftaronline') {
		include "modules/daftar/daftaronline.php";
	}
	elseif ($_GET['module']=='terdaftar') {
		include "modules/daftar/detail.php";
	}
	elseif ($_GET['module']=='terdaftarrekom') {
		include "modules/op/detail.php";
	}
	elseif ($_GET['module']=='terdaftarrekomidi') {
		include "modules/idi/detail.php";
	}
	elseif ($_GET['module']=='mandiri') {
		include "modules/daftar/carinakesmandiri.php";
	}
	elseif ($_GET['module']=='daftarmandiri') {
		include "modules/daftar/form_daftar_mandiri.php";
	}
	elseif ($_GET['module']=='buatsip') {
		include "modules/daftar/carisip.php";
	}
	elseif ($_GET['module']=='prosessip') {
		include "modules/daftar/buatsip.php";
	}
	elseif ($_GET['module']=='terbuat') {
		include "modules/daftar/terbuatsip.php";
	}
	elseif ($_GET['module']=='profiltenagaa') {
		include "modules/nakes/profil.php";
	}
	elseif ($_GET['module']=='profiltenagaaa') {
		include "modules/nakes/profil_umum.php";
	}
	elseif ($_GET['module']=='datkestenaga') {
		include "modules/faskes/data_sip_tenaga.php";
	}
	elseif ($_GET['module']=='tenagaop') {
		include "modules/op/data_sip_tenaga.php";
	}
	elseif ($_GET['module']=='tenagaidi') {
		include "modules/idi/data_sip_tenaga.php";
	}
	elseif ($_GET['module']=='tambahnakesop') {
		include "modules/op/form_tambah.php";
	}
	elseif ($_GET['module']=='tambahnakesidi') {
		include "modules/idi/form_tambah.php";
	}
	elseif ($_GET['module']=='faskes') {
		include "modules/faskes/data_faskes.php";
	}
	elseif ($_GET['module']=='faskesop') {
		include "modules/op/data_faskes.php";
	}
	elseif ($_GET['module']=='faskesidi') {
		include "modules/idi/data_faskes.php";
	}
	elseif ($_GET['module']=='tambahfaskes') {
		include "modules/faskes/form_faskes.php";
	}
	elseif ($_GET['module']=='tambahfaskesop') {
		include "modules/op/form_faskes.php";
	}
	elseif ($_GET['module']=='cabut') {
		include "modules/cabut/carisip.php";
	}
	elseif ($_GET['module']=='cabute') {
		include "modules/cabut/buatcabut.php";
	}
	elseif ($_GET['module']=='detailcabut') {
		include "modules/cabut/detail.php";
	}
	elseif ($_GET['module']=='pencarian') {
		include "modules/nakes/view.php";
	}
	elseif ($_GET['module']=='datkestenaga2') {
		include "modules/faskes/data_sip_tenaga2.php";
	}
	elseif ($_GET['module']=='datkestenaga23') {
		include "modules/op/data_sip_tenaga2.php";
	}
	elseif ($_GET['module']=='datkestenaga23idi') {
		include "modules/idi/data_sip_tenaga2.php";
	}
	elseif ($_GET['module']=='rekom') {
		include "modules/rekom/lihatdata.php";
	}
	elseif ($_GET['module']=='trekom') {
		include "modules/rekom/form_tambah.php";
	}
	elseif ($_GET['module']=='formulir') {
		include "modules/formulir/view.php";
	}
	elseif ($_GET['module']=='tambahform') {
		include "modules/formulir/form_tambah.php";
	}
	elseif ($_GET['module']=='syarat') {
		include "modules/formulir/form_syarat.php";
	}
	elseif ($_GET['module']=='daftarrekom1') {
		include "modules/rekom/detail.php";
	}
	elseif ($_GET['module']=='buatrekom') {
		include "modules/rekom/form_buat_rekom.php";
	}
	elseif ($_GET['module']=='terkom') {
		include "modules/rekom/terbuatsip.php";
	}
	elseif ($_GET['module']=='rsprofil') {
		include "modules/faskes/profilrs.php";
	}
	elseif ($_GET['module']=='operasional') {
		include "modules/operasional/lihatdata.php";
	}
	elseif ($_GET['module']=='treop') {
		include "modules/operasional/form_tambah.php";
	}
	elseif ($_GET['module']=='daftaropera') {
		include "modules/operasional/detail.php";
	}
	elseif ($_GET['module']=='buatopera') {
		include "modules/operasional/form_buat_rekom.php";
	}
	elseif ($_GET['module']=='terkop') {
		include "modules/operasional/terbuatsip.php";
	}
	elseif ($_GET['module']=='laporancabut') {
		include "modules/laporan-cabut/view.php";
	}
	elseif ($_GET['module']=='rekapfaskes') {
		include "modules/rekapfaskes/view.php";
	}
	elseif ($_GET['module']=='rekaprekom') {
		include "modules/rekaprekom/view.php";
	}
	elseif ($_GET['module']=='profilfaskes') {
		include "modules/faskes/profilfaskes.php";
	}
	elseif ($_GET['module']=='rekapor') {
		include "modules/rekapor/view.php";
	}
	elseif ($_GET['module']=='rekapi') {
		include "modules/rekapitulasi/view.php";
	}
	elseif ($_GET['module']=='pegawai') {
		include "modules/espj/lihatdata.php";
	}
	elseif ($_GET['module']=='tpegawai') {
		include "modules/espj/form_tambah.php";
	}
	elseif ($_GET['module']=='ubahpegawai') {
		include "modules/espj/form_buat_rekom.php";
	}
	elseif ($_GET['module']=='uang') {
		include "modules/espj/data_uang.php";
	}
	elseif ($_GET['module']=='tuang') {
		include "modules/espj/form_tambah_uang.php";
	}
	elseif ($_GET['module']=='tkeluar') {
		include "modules/espj/form_buang_uang.php";
	}
	elseif ($_GET['module']=='sspd') {
		include "modules/espj/data_sspd.php";
	}
	elseif ($_GET['module']=='tsspd') {
		include "modules/espj/form_tambah_sspd.php";
	}
	elseif ($_GET['module']=='tsppd') {
		include "modules/espj/form_peserta_sppd.php";
	}
	elseif ($_GET['module']=='pesertasppd') {
		include "modules/espj/profil.php";
	}
	elseif ($_GET['module']=='lihatruang') {
		include "modules/espj/lihatruang.php";
	}
	elseif ($_GET['module']=='oneday') {
		include "modules/penjualan/view2.php";
	}
	elseif ($_GET['module']=='lap_pembelian_per_supplier2') {
		include "modules/laporan-pembelian-per-supplier/view2.php";
	}
	elseif ($_GET['module']=='lap_pembelian_perincian2') {
		include "modules/laporan-pembelian-perincian/view2.php";
	}

?>
