$(document).ready(function(){
	menu();
});

function menu(){
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