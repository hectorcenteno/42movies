<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>42Movies / Buscar peliculas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap-responsive.min.css'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.8.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/lodash.min.js'); ?>" type="text/javascript" charset="utf-8"></script>

	<script src="<?php echo base_url('public/js/sugar-1.3.min.js'); ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url('public/js/rottentomatoes.js'); ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url('public/js/movie-detail.js'); ?>" type="text/javascript" charset="utf-8"></script>
	
	 
</head>
	
<body>
	<div class="container-fluid">
		<h1>42Movies</h1>
		
		<div class="row-fluid">
			<div class="span12">
				
				<div class="navbar">
					<div class="navbar-inner">
					<form action="<?php echo base_url('movie/search'); ?>" class="navbar-form pull-left form-search">
					<input type="text" name="q" value="dark night" id="search-term" class="search-query span1" style="width: 150px">
					<button type="submit" id="search-btn" data-page="1" class="btn search-rt">Search</button>
					</form>
					</div>
				</div>
				
				
				<h2 class="movie_name"><!-- nombre --></h2>
				<table>
					<tr>
						<td width="100"><img src="" id="movie_image" width="100"></td>
						<td style="padding:5px" id="sinopsis"><!-- sinopsis --></td>
					</tr>
					<tr>
						<td></td>
						<td>8/10</td>
					</tr>
				</table>
				<p>&nbsp;</p>
				<div class="btn-group">
			    <button class="btn">YA LA VI</button>
			    <button class="btn">FAVORITO</button>
			    <button class="btn data-rt-id checkin-btn">CHECK-IN</button>
			    </div>
				<p>&nbsp;</p>
			</div>
			
			<h5>Comentarios</h5>
			<table  class="table table-hover">
				<tr>
					<td>Avatar</td>
					<td>
						<p><strong>Hector Centeno</strong></p>
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
						<p>4/10</p>
					</td>
					
				</tr>
			</table>


		</div>
		
		
	</div>
	<script type="text/javascript" charset="utf-8">
		var rt_movie_id = <?php echo $_GET['movie_id'] ?>;
		loadMovieDetailRT(rt_movie_id);
		
	</script>
</body>
</html>