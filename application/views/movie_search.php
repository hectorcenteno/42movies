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
				
				<form class="form-search">
				<input type="text" value="dark night" id="search-term" class="input-medium search-query">
				<button type="submit" id="search-btn" data-page="1" class="btn search-rt">Search</button>
				</form>
				
				<table class="table">
					<thead>
						<tr>
							<th>Pelicula</th>
						</tr>
					</thead>
					<tbody id="movies-list">
						<tr>
							<td>Busca una pelicula</td>
						</tr>
					</tbody>
				</table>
				
				<div id="pagination" class="pagination">
				  <ul>
				    <li class="disabled"><a href="#">Prev</a></li>
				    <li class="active"><a href="#">1</a></li>
				  </ul>
				</div>
				
			</div>

		</div>
		
		
	</div>
</body>
</html>