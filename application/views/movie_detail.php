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
	<script src="<?php echo base_url('public/js/search.js'); ?>" type="text/javascript" charset="utf-8"></script>
	
	 
</head>
	
<body>
	<div class="container-fluid">
		<h1>42Movies</h1>
		
		<div class="row-fluid">
			<div class="span12">
				
				<div class="navbar">
					<div class="navbar-inner">
					<form action="<?php echo base_url('movie/search'); ?>" class="navbar-form pull-left form-search">
					<input type="text" name="q" value="dark night" id="search-term" class="search-query">
					<button type="submit" id="search-btn" data-page="1" class="btn search-rt">Search</button>
					</form>
					</div>
				</div>
				
				
				<h1>Nombre pelicula</h1>
				<table>
					<tr>
						<td>imagen</td>
						<td>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</td>
					</tr>
					<tr>
						<td></td>
						<td>8/10</td>
					</tr>
				</table>
				
				
				
			</div>

		</div>
		
		
	</div>
</body>
</html>