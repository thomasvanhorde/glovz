function details(id) {
	$.post('ajax/test.html', function(data) {
		$('.result').html(data);
	});

	var html = '';
	$.ajax({
		type:"GET",
		url:"xml/categVideo.xml",
		dataType:"xml",
		success: function(xml){
			html += '<ul>';
			$(xml).find('categorie').each(function(){
				html += '<li>
			});
		}
	});

}