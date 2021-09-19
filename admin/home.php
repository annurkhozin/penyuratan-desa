<?php
session_start();
include "../inc/koneksi.php";
if(!isset($_SESSION['username'])){
  die("Anda belum login");
}
if($_SESSION['level']!="Admin"){
    die("Anda bukan Admin");
}
?>

<!-- <div class="panel panel-primary">
	<div class="panel-heading">Setia Melayani Masyarakat</div>
	<div class="panel-body">
		<img class="img img-thumbnail" src="../img/balai_desa.jpg" width="100%" />
	</div>
</div> -->
<div class="panel panel-primary">
	<div class="panel-heading text-center">STATISTIK PERMOHONAN SURAT</div>
	
	<div class="panel-body" align="center">
		<div class="col-md-4 col-md-offset-4">
			<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
				<i class="fa fa-calendar"></i>&nbsp;
				<span></span> <i class="fa fa-caret-down"></i>
			</div>
		</div>
		<figure class="highcharts-figure col-md-12">
		    <div id="container"></div>
		</figure>
	</div>
</div>

<script src="../js/highcharts.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript">
var start = moment().subtract(29, 'days');
var end = moment();

function cb(start, end) {
	getChart(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
	$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
}

$('#reportrange').daterangepicker({
	startDate: start,
	endDate: end,
	ranges: {
	   'Hari ini': [moment(), moment()],
	   'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	   '7 Hari terakhir': [moment().subtract(6, 'days'), moment()],
	   '30 Hari terakhir': [moment().subtract(29, 'days'), moment()],
	   'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
	   'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	}
}, cb);

cb(start, end);

function getChart(start, end){
	var url = `get-statistic.php?start=${start}&end=${end}`;
    fetch(url)
    .then(resp => {
       return resp.text()
    })
    .then(resp => {
		const data = JSON.parse(resp);
    	var belum_diproses = data.belum_diproses
    	var sudah_diproses = data.selesai_diproses

		Highcharts.chart('container', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: null
		    },
		    xAxis: {
				categories: ['Pengajuan KTP', 'Surat Keterangan', 'Kelahiran', 'Kematian', 'Ket. Tidak Mampu','Ket. Catatan Kepolisian','Kehilangan']
			},
		    yAxis: {
				allowDecimals: false,
        		min: 0,
		        title: {
		            text: 'Total permohonan'
		        }

		    },
		    plotOptions: {
				column: {
					stacking: 'normal'
				},
		        series: {
					allowPointSelect: true,
		            borderWidth: 1,
		            dataLabels: {
		                enabled: true,
		                format: '<span style="font-size:8px;">{point.y}</span><br>'
		            }
		        }
		    },
			legend: {
				enabled: false
			},
		    tooltip: {
		        headerFormat: '<span style="font-size:11px"><b>{point.y}</b> {series.name}</span><br>',
		        pointFormat: '<span>dari {point.stackTotal} Permohonan</span><br/>'
		    },

			series: [{
				name: 'BELUM / SEDANG diproses',
				colorByPoint: true,
				data: belum_diproses,
			}, {
				name: 'SELESAI diproses',
				colorByPoint: true,
				data: sudah_diproses,
			}]
		});	
    })
    .catch(error => {
        // handle the error
    });
}
</script>
<?php
include "../inc/footer.php";
?>