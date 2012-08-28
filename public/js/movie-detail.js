//

function loadMovieDetailRT (movie_id) {
	var data = {apikey: ROTTENTOMATOES.apikey};
	
	$.ajax({
		url: 'http://api.rottentomatoes.com/api/public/v1.0/movies/' + movie_id + '.json',
		method: 'get',
		dataType: "jsonp",
		contentType: "application/json; charset=utf-8",
		data: data,
		success: function( r){

			// handle pagination
			console.log(r);
			
			$('.data-rt-id').data('rt-movie-id', r.id);
			$('.data-rt-id').data('rt-movie-title', r.title);
			$('.data-rt-id').data('rt-movie-year', r.year);
			$('.data-rt-id').data('rt-movie-description', r.critics_consensus);
			$('.data-rt-id').data('rt-movie-thumbnail', r.posters.thumbnail);
			$('.data-rt-id').data('rt-movie-banner', r.posters.profile);
			$('.data-rt-id').data('rt-movie-source-url', r.links.self);
			
			$('.movie_name').text(r.title);
			$('#movie_image').prop('src', r.posters.profile	);
			$('#sinopsis').text(r.critics_consensus);
			
			$('.checkin-btn').click( function( event){
				var e = $(this);
				var data = {
					name: e.data('rt-movie-title'),
					year: e.data('rt-movie-year'),
					description: e.data('rt-movie-description'),
					banner_url: e.data('rt-movie-year'),
					thumbnail_url: e.data('rt-movie-thumbnail'),
					banner_url: e.data('rt-movie-banner'),
					source_url: e.data('rt-movie-source-url')
				};

				$.ajax({
					url: '/42movies/index.php/movie/checkin',
					data: data,
					dataType: "json",
					contentType: "application/json; charset=utf-8",
					method: 'post',
					success: function(){
						// guardar en face
						
					}
				});
			});
			
		}

	});
}

( function($){
	
	$(function(){
		
		
		
		
		
	}); // domready
	
})(jQuery);