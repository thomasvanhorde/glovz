function details(id) {

	var html = '';
	$.ajax({
		type:"GET",
		url:"xml/categVideo.xml",
		dataType:"xml",
		success: function(xml) {
			$(xml).find('video').each(function(){
				if ($(this).attr('id') == id) {
					html += '<h1>Film bientôt dans nos bacs</h1>'
					html += '<h2>'+
					$(this).children('nom').text()+
					'</h2>\n\
					<img src="'+$(this).children('images').text()+'" alt="'+$(this).children('nom').text()+'" /><br />';

					html += '<h3>Résumé</h3>\n\
							<p>'+$(this).children('resume').text()+
							'</p>'+
							'<h3>tarif :</h3>';
					$("#corp").html(html);
				}
			})
		}
	});
}


//
//function erer () {
//	var html = '';
//	$.ajax({
//		type:"GET",
//		url:"xml/categVideo.xml",
//		dataType:"xml",
//		success: function(xml){
//			$(xml).find('video').each(function(){
//				if ($(this).children('disponible').text() == 0) {
//					html += '<h2>'+
//					$(this).children('nom').text()+
//					'</h2>\n\
//					<img src="//'+$(this).children('images').text()+'" alt="'+$(this).children('nom').text()+'" /><br />';
//
//					html += '<h3>Résumé</h3>\n\
//							<p>//'+$(this).children('resume').text()+
//							'</p>'+
//							'<h3>tarif :</h3>';
//					$("#corp").html(html);
//				}
//			});
//		}
//	});
//
//}