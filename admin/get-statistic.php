<?php 
	include "../inc/koneksi.php";

	
	function getBelumSelesai($start,$end,$surat){
		$query = mysql_query("SELECT id FROM penyuratan WHERE id_keperluan = '$surat' AND LOWER(catatan) != LOWER('Selesai') AND CAST(tanggal_buat AS DATE) >= '$start' AND CAST(tanggal_buat AS DATE) <= '$end'") or die(mysql_error());
		return mysql_num_rows($query);
	}
	function getSelesaiDiproses($start,$end,$surat){
		$query = mysql_query("SELECT id FROM penyuratan WHERE id_keperluan = '$surat' AND LOWER(catatan) = LOWER('Selesai') AND CAST(tanggal_buat AS DATE) >= '$start' AND CAST(tanggal_buat AS DATE) <= '$end'") or die(mysql_error());
		return mysql_num_rows($query);
	}
	
	$start = $_GET['start'];
	$end = $_GET['end'];
	$surat = [1,2,3,4,5,6,7];
	$belum_diproses = [];
	$selesai_diproses = [];
	for ($i=0; $i < count($surat); $i++) { 
		$tipe_surat = $surat[$i];
		$belum = getBelumSelesai($start, $end, $surat[$i]);
		if($belum==0){
			$belum = null;
		}
		$selesai = getSelesaiDiproses($start, $end, $surat[$i]);
		if($selesai==0){
			$selesai = null;
		}
		array_push($belum_diproses, $belum);
		array_push($selesai_diproses, $selesai);
	}
	$data = [];
	$data['belum_diproses'] = $belum_diproses;
	$data['selesai_diproses'] = $selesai_diproses;
	echo json_encode($data);
?>