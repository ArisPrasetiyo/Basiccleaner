<?php include '../config/koneksi.php';include'../config/function_general.php';?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan Member</title>
	    <link rel="stylesheet" href="<?php echo $site;?>frontend/css/bootstrap.min.css" media="screen">
	    <link rel="stylesheet" href="<?php echo $site;?>frontend/css/bootstrap.min.css" media="print">
	</head>
<body>
<style type="text/css">
	table {
		display: table;
	}
	table thead tr th {
		padding: 5px;
	}
	table tbody tr td{
		padding: 5px;
	}
	.control-action-pages{
		margin-top: 50px;
	}
	h4.customize-size{
		font-size: 16px;
	}
	.main-detail-information{
		margin-top: 50px;
	}
	.main-detail-information .main-tanda-tangan ,.main-paraf-area{
		text-align:center;
		font-size:15px;
	}
	.col-md-push-custom {
    	left: 4.333333%;
	}
	.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7	, .col-md-8, .col-md-9{
		float: left;
	}
	thead.custom-header-bordered{
		border: 1px solid #000;
		border-bottom: 1px solid #000;
	}
	@media print{
	  /*HIDE BUTTON CETAK ALL */
	  #hidden-button{
	  	display: none !important;
	  }
	}
</style>
<div class="row" style="margin-top:50px;">
	<div class="container">
		<div class='main-containpages'>
			<div class="col-lg-12">
				<div class="col-sm-2 col-md-2">
					<img src="<?php echo $site;?>frontend/logo/android-icon-144x144.png">
				</div>
				<div class="col-md-8 col-md-push-custom">
					<h3 style="margin-left:129px;">LAPORAN MEMBER BASIC CLEANER</h3>
					<p class="col-md-8 "style="margin-left:115px;">Jln. Seturan I / 139A, RT 11 RW 01, Olivine Music Studio, 55281</p>			
				</div>
			</div>
		 	<div class="col-lg-12">
		 		<table class="" width="100%" border="1">
		 			<thead class="custom-header-bordered">
		 				<tr>
		 					<th width="50">No</th>
		 					<th>Id Pemesan</th>
		 					<th>Nama Pemesan</th>
		 					<th>Alamat</th>
		 					<th>No telp</th>
		 					<th>Email</th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 			<?php 
		 				$no =1;
		 				$get_datamember = mysqli_query($con,"SELECT * FROM member ORDER BY id_member DESC");
		 				while ($result = mysqli_fetch_array($get_datamember)) {
		 			?>
		 				<tr>
		 					<td><?php echo $no;?></td>
		 					<td><?php echo $result['id_member'];?></td>
		 					<td><?php echo $result['nama_member'];?></td>
		 					<td><?php echo $result['alamat_member'];?></td>
		 					<td><?php echo $result['notelp_member'];?></td>
		 					<td><?php echo $result['email_member'];?></td>
		 				</tr>
					<?php $no++; } ?>
		 			</tbody>
		 		</table>
		 		<div class="col pull-right main-detail-information">
					<h4 class="customize-size">Yogyakarta <?php echo tgl_indo(date('Y-m-d'));?></h4>
					<div class="main-tanda-tangan">
						<p class="">Pimpinan</p>
					</div>
					<div class="main-paraf-area">(...................................)</div>
				</div>
		 		<div class="control-action-pages">
		 			<a href="" id="hidden-button" onclick="window.print();" class="btn btn-primary">Cetak Semua Laporan</a>
		 		</div>
		 	</div>
		</div>        
	</div>
</div>
</body>
</html>