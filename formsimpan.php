
<!DOCTYPE html>
<?php
include "koneksi.php";

$sql=mysqli_query($koneksi,"SELECT * from Jabatan");
While ($kolom=mysqli_fetch_array($sql))
	{echo "<option value='$kolom[id_jabatan]'>$kolom[Jabatan]</option>";}
?>
<html>
<?php
include "session.php";
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventory Control System</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			
			
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
		      <form action="insert.php" id="lg-form" name="lg-form" method="post">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Input Data</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nomor Polisi" name="nomor_polisi" type="text" autofocus="">
							</div>
							<div class="form-group">
										<label>Warna TNKB</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="warna_tnkb" id="warna_tnkb" value="Merah">Merah
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="warna_tnkb" id="warna_tnkb" value="Putih">Putih
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="warna_tnkb" id="warna_tnkb" value="Hitam">Hitam
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="warna_tnkb" id="warna_tnkb" value="Kuning">Kuning
											</label>
										</div>
							<div class="form-group">
								<input class="form-control" placeholder="No Rangka" name="nomor_rangka" type="text" value="">
							</div>
							<div class="form-group">
								<label>No Mesin</label>
									<textarea class="form-control" name="nomer_mesin" id="nomer_mesin" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Tanggal Perolehan</label>
								<input class="form-control" placeholder="Tanggal Perolehan" name="tanggal_perolehan" type="date" value="">
							</div>
							<div class="form-group">
							<label>OPD Pengguna</label>
								<div class="radio">
									<label>
										<input type="radio" name="opd_pengguna" id="opd_pengguna" value="Dinas Perhutanan" checked>Dinas Perhutanan
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="opd_pengguna" id="opd_pengguna" value="Dinas Perikanan" checked>Dinas Perikanan
									</label>
								</div>
							</div>
							<div class="form-group">
								<label>Jabatan Pengguna</label>
										<select class="form-control" name="jabatan_pengguna" id="jabatan_pengguna">
										<?php
														include "koneksi.php";
															$sql=mysqli_query($koneksi,"SELECT id_jabatan,Jabatan From jabatan order by id_jabatan");
															While ($kolom=mysqli_fetch_array($sql))
															{echo "<option value='$kolom[Jabatan]'>$kolom[Jabatan]</option>";} ?>
										</select>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nama Pengguna" name="nama_pengguna" type="text" value="">
							</div>

							<div>
							</div>
						    <button type="submit" class="btn btn-primary">Submit</button>
                     <button type="reset" class="btn btn-primary">Reset</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
		
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
