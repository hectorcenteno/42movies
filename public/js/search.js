var SEARCH = {};
SEARCH.template = _.template('<tr>\
	<td width="70"><img src="<%= posters.detailed %>"/></td>\
	<td><a href="#" data-rt-id="<%= id %>"><%= title %> (<%= year %>)</a></td>\
	<td><a href="#" data-rt-id="<%= id %>" class="btn btn-success">checkin</a></td>\
</tr>');
SEARCH.pagination = _.template('<ul><% for(var i = 1; i < total; i++){ %><li><a href="#" class="search-rt page-btn" data-page="<%= i %>"><%= i %></a></li> <% } %></ul>');
SEARCH.page = 1;

function RTSearch( e)
{
	var e = $(e);
	console.log(e.data('page'));
	var data = {q: $('#search-term').val(), page_limit: 5, page: e.data('page'), apikey: ROTTENTOMATOES.apikey};
	//?q=dark%20night&page_limit=20&page=1&apikey=p8s4mk5kjeasmu9c6qxm5wcb
	$.ajax({
		url: 'http://api.rottentomatoes.com/api/public/v1.0/movies.json',
		method: 'get',
		dataType: "jsonp",
		contentType: "application/json; charset=utf-8",
		data: data,
		success: function( r){
			
			// handle pagination
			var html = '';
			var total_pages = Math.ceil(r.total / 5);
			
			_.forEach(r.movies, function(obj, index){
				console.log(index, obj);
				html+= SEARCH.template(obj);
			});
			$('#movies-list').html(html);
			
			$('#pagination').html(SEARCH.pagination({total: total_pages}));
		}
		
	});
}

( function($){
	
	$(function(){
		
		$('body').on('click', '.search-rt', function( event){
			
			RTSearch( this);
			event.preventDefault();
		});
		$('.page-btn').click( function(){
			
		});
		
		
	}); // domready
	
})(jQuery);