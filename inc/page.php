<?php
	
$page=$_GET['pages'];
switch($page){
	//beranda
	default:
		$pages="home.php";
		break;
	//kontak
	case 'profil':
		$pages="profil.php";
		break;
	case 'Rprofil':
		$pages="R-profil.php";
		$judul="Profil";
		$subjudul="Data Profil";
		break;
	case 'Uprofil':
		$pages="U-profil.php";
		$judul="Profil";
		$subjudul="Sunting Data Profil";
		break;
	//kontak
	case 'Ckontak':
		$pages="C-kontak.php";
		$judul="Kontak";
		$subjudul="Menambah Data Kontak";
		break;
	case 'Rkontak':
		$pages="R-kontak.php";
		$judul="Kontak";
		$subjudul="Data Kontak";
		break;
	case 'Ukontak':
		$pages="U-kontak.php";
		$judul="Kontak";
		$subjudul="Menyunting Data Kontak";
		break;
	case 'Dkontak':
		$pages="D-kontak.php";
		$judul="Kontak";
		$subjudul="Menghapus Data Kontak";
		break;
	//Halaman Kontak
	case 'Dkontak':
		$pages="D-kontak.php";
		$judul="Kontak";
		$subjudul="Menghapus Data Kontak";
		break;
	//Halaman Pencarian
	case 'cari':
		$pages="cari.php";
		$judul="Pencarian";
		$subjudul="Pencarian Berdasar Nama Penduduk";
		break;
	case 'infoPenduduk':
		$pages="infoPenduduk.php";
		$judul="Pencarian";
		$subjudul="Hasil Pencarian Nama Penduduk";
		break;
	//Halaman Basisdata Penduduk
	case 'Cpenduduk':
		$pages="C-penduduk.php";
		$judul="Basisdata Penduduk";
		$subjudul="Menambah Data Penduduk Baru";
		break;
	case 'Rpenduduk':
		$pages="R-penduduk.php";
		$judul="Basisdata Penduduk";
		$subjudul="Arsip Kependudukan";
		break;
	case 'RdetailPenduduk':
		$pages="R-detailPenduduk.php";
		$judul="Basisdata Penduduk";
		$subjudul="Detail Penduduk";
		break;
	case 'Upenduduk':
		$pages="U-penduduk.php";
		$judul="Basisdata Penduduk";
		$subjudul="Menyunting Data Penduduk";
		break;
	case 'PDFpenduduk':
		$pages="PDFpenduduk.php";
		$judul="Basisdata Penduduk";
		$subjudul="Mencetak Data Penduduk";
		break;
	case 'Dpenduduk':
		$pages="D-penduduk.php";
		$judul="Basisdata Penduduk";
		$subjudul="Menghapus Data Penduduk";
		break;
	//Halaman Surat Pengajuan KTP
	case 'Cktp':
		$pages="C-ktp.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Permintaan Surat Pengajuan KTP Baru";
		break;
	case 'Cktp2':
		$pages="C-ktp2.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Permintaan Surat Pengajuan KTP Baru";
		break;
	case 'Rktp':
		$pages="R-ktp.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Arsip Surat Pengajuan KTP";
		break;
	case 'PDFlistKtp':
		$pages="PDFlistKtp.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Daftar Surat Pengajuan KTP";
		break;
	case 'Uktp':
		$pages="U-ktp.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Menyunting Surat Pengajuan KTP";
		break;
	case 'PDFktp':
		$pages="PDFktp.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Mencetak Surat Pengajuan KTP";
		break;
	case 'Dktp':
		$pages="D-ktp.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Menghapus Surat Pengajuan KTP";
		break;
	//Halaman Surat Keterangan
	case 'Csuket':
		$pages="C-suket.php";
		$judul="Surat Keterangan";
		$subjudul="Permintaan Surat Keterangan Baru";
		break;
	case 'Csuket2':
		$pages="C-suket2.php";
		$judul="Surat Keterangan";
		$subjudul="Permintaan Surat Keterangan Baru";
		break;
	case 'Rsuket':
		$pages="R-suket.php";
		$judul="Surat Keterangan";
		$subjudul="Arsip Surat Keterangan";
		break;
	case 'PDFlistSuket':
		$pages="PDFlistSuket.php";
		$judul="Surat Keterangan";
		$subjudul="Daftar Surat Keterangan";
		break;
	case 'Usuket':
		$pages="U-suket.php";
		$judul="Surat Keterangan";
		$subjudul="Menyunting Surat Keterangan";
		break;
	case 'PDFsuket':
		$pages="PDFsuket.php";
		$judul="Surat Keterangan";
		$subjudul="Mencetak Surat Keterangan";
		break;
	case 'Dsuket':
		$pages="D-suket.php";
		$judul="Surat Keterangan";
		$subjudul="Menghapus Surat Keterangan";
		break;
	//Halaman Surat Kelahiran
	case 'Csukel':
		$pages="C-sukel.php";
		$judul="Surat Kelahiran";
		$subjudul="Permintaan Surat Kelahiran Baru";
		break;
	case 'Csukel2':
		$pages="C-sukel2.php";
		$judul="Surat Kelahiran";
		$subjudul="Permintaan Surat Kelahiran Baru";
		break;
	case 'Rsukel':
		$pages="R-sukel.php";
		$judul="Surat Kelahiran";
		$subjudul="Arsip Surat Kelahiran";
		break;
	case 'Usukel':
		$pages="U-sukel.php";
		$judul="Surat Kelahiran";
		$subjudul="Menyunting Surat Kelahiran";
		break;
	case 'PDFsukel':
		$pages="PDFsukel.php";
		$judul="Surat Kelahiran";
		$subjudul="Mencetak Surat Kelahiran";
		break;
	case 'Dsukel':
		$pages="D-sukel.php";
		$judul="Surat Kelahiran";
		$subjudul="Menghapus Surat Kelahiran";
		break;
	//Halaman Surat Kematian
	case 'Csukem':
		$pages="C-sukem.php";
		$judul="Surat Kematian";
		$subjudul="Permintaan Surat Kematian Baru";
		break;
	case 'Csukem2':
		$pages="C-sukem2.php";
		$judul="Surat Kematian";
		$subjudul="Permintaan Surat Kematian Baru";
		break;
	case 'Rsukem':
		$pages="R-sukem.php";
		$judul="Surat Kematian";
		$subjudul="Arsip Surat Kematian";
		break;
	case 'Usukem':
		$pages="U-sukem.php";
		$judul="Surat Kematian";
		$subjudul="Menyunting Surat Kematian";
		break;
	case 'PDFsukem':
		$pages="PDFsukem.php";
		$judul="Surat Kematian";
		$subjudul="Mencetak Surat Kematian";
		break;
	case 'Dsukem':
		$pages="D-sukem.php";
		$judul="Surat Kematian";
		$subjudul="Menghapus Surat Kematian";
		break;
	//Halaman Surat Keterangan Tidak Mampu
	case 'Csktm':
		$pages="C-sktm.php";
		$judul="Surat Keterangan Tidak Mampu";
		$subjudul="Permintaan Surat Keterangan Tidak Mampu Baru";
		break;
	case 'Csktm2':
		$pages="C-sktm2.php";
		$judul="Surat Keterangan Tidak Mampu";
		$subjudul="Permintaan Surat Keterangan Tidak Mampu Baru";
		break;
	case 'Rsktm':
		$pages="R-sktm.php";
		$judul="Surat Keterangan Tidak Mampu ";
		$subjudul="Arsip Surat Keterangan Tidak Mampu ";
		break;
	case 'Usktm':
		$pages="U-sktm.php";
		$judul="Surat Keterangan Tidak Mampu ";
		$subjudul="Menyunting Surat Keterangan Tidak Mampu ";
		break;
	case 'PDFsktm':
		$pages="PDFsktm.php";
		$judul="Surat Keterangan Tidak Mampu ";
		$subjudul="Mencetak Surat Keterangan Tidak Mampu ";
		break;
	case 'Dsktm':
		$pages="D-sktm.php";
		$judul="Surat Keterangan Tidak Mampu ";
		$subjudul="Menghapus Surat Keterangan Tidak Mampu ";
		break;
	//Halaman Surat Keterangan Catatan Kepolisian
	case 'Cskck':
		$pages="C-skck.php";
		$judul="Surat Keterangan Catatan Kepolisian";
		$subjudul="Permintaan Surat Keterangan Catatan Kepolisian Baru";
		break;
	case 'Cskck2':
		$pages="C-skck2.php";
		$judul="Surat Keterangan Catatan Kepolisian";
		$subjudul="Permintaan Surat Keterangan Catatan Kepolisian Baru";
		break;
	case 'Rskck':
		$pages="R-skck.php";
		$judul="Surat Keterangan Catatan Kepolisian ";
		$subjudul="Arsip Surat Keterangan Catatan Kepolisian ";
		break;
	case 'Uskck':
		$pages="U-skck.php";
		$judul="Surat Keterangan Catatan Kepolisian ";
		$subjudul="Menyunting Surat Keterangan Catatan Kepolisian";
		break;
	case 'PDFskck':
		$pages="PDFskck.php";
		$judul="Surat Keterangan Catatan Kepolisian ";
		$subjudul="Mencetak Surat Keterangan Catatan Kepolisian ";
		break;
	case 'Dskck':
		$pages="D-skck.php";
		$judul="Surat Keterangan Catatan Kepolisian ";
		$subjudul="Menghapus Surat Keterangan Catatan Kepolisian ";
		break;
	//Halaman Surat Keterangan Kehilangan
	case 'Csukeh':
		$pages="C-sukeh.php";
		$judul="Surat Keterangan Kehilangan";
		$subjudul="Permintaan Surat Keterangan Kehilangan Baru";
		break;
	case 'Csukeh2':
		$pages="C-sukeh2.php";
		$judul="Surat Keterangan Kehilangan";
		$subjudul="Permintaan Surat Keterangan Kehilangan Baru";
		break;
	case 'Rsukeh':
		$pages="R-sukeh.php";
		$judul="Surat Keterangan Kehilangan ";
		$subjudul="Arsip Surat Keterangan Kehilangan ";
		break;
	case 'Usukeh':
		$pages="U-sukeh.php";
		$judul="Surat Keterangan Kehilangan ";
		$subjudul="Menyunting Surat Keterangan Kehilangan";
		break;
	case 'PDFsukeh':
		$pages="PDFsukeh.php";
		$judul="Surat Keterangan Kehilangan ";
		$subjudul="Mencetak Surat Keterangan Kehilangan ";
		break;
	case 'Dsukeh':
		$pages="D-sukeh.php";
		$judul="Surat Keterangan Kehilangan ";
		$subjudul="Menghapus Surat Keterangan Kehilangan ";
		break;
	//Halaman User
	case 'Cuser':
		$pages="C-user.php";
		$judul="Akun Pengguna";
		$subjudul="Menambah Akun Pengguna";
		break;
	case 'Ruser':
		$pages="R-user.php";
		$judul="Akun Pengguna";
		$subjudul="Daftar Akun Pengguna";
		break;
	case 'Uuser':
		$pages="U-user.php";
		$judul="Akun Pengguna";
		$subjudul="Menyunting Akun Pengguna";
		break;
	case 'Duser':
		$pages="D-user.php";
		$judul="Akun Pengguna";
		$subjudul="Menghapus Akun Pengguna";
		break;
	case 'permohonan':
		$pages="permohonan.php";
		$judul="Permohonan Surat";
		$subjudul="Daftar Permohonan Masyarakat";
		break;
	case 'Cktp3':
		$pages="C-ktp3.php";
		$judul="Surat Pengajuan KTP";
		$subjudul="Permintaan Surat Pengajuan KTP Baru";
		break;
	case 'Csuket3':
		$pages="C-suket3.php";
		$judul="Surat Keterangan";
		$subjudul="Permintaan Surat Keterangan Baru";
		break;
	case 'Csukel3':
		$pages="C-sukel3.php";
		$judul="Surat Kelahiran";
		$subjudul="Permintaan Surat Kelahiran Baru";
		break;
	case 'Csukem3':
		$pages="C-sukem3.php";
		$judul="Surat Kematian";
		$subjudul="Permintaan Surat Kematian Baru";
		break;
	case 'Csktm3':
		$pages="C-sktm3.php";
		$judul="Surat Keterangan Tidak Mampu";
		$subjudul="Permintaan Surat Keterangan Tidak Mampu Baru";
		break;
	case 'Cskck3':
		$pages="C-skck3.php";
		$judul="Surat Keterangan Catatan Kepolisian";
		$subjudul="Permintaan Surat Keterangan Catatan Kepolisian Baru";
		break;
	case 'Csukeh3':
		$pages="C-sukeh3.php";
		$judul="Surat Keterangan Kehilangan";
		$subjudul="Permintaan Surat Keterangan Kehilangan Baru";
		break;
	
	}

	if(!empty($pages)){
		include $pages;
}
?>