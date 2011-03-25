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
				html += "<li id="+ $(this).attr('ref') +">"+ $(this).attr('name') +"</li>";
			});
			$('#menu').html(html);
			init();
		}
	});
}

function page(ref){
	var html = '';
	
	$.ajax({
		type:"GET",
		url:"xml/categVideo.xml",
		dataType:"xml",
		success : function(xml){
			$.ajax({
				type:"POST",
				url:"ajax/videoCate.html",
				success:function(phtml){
					$('#corp').html(phtml);
					$(xml).find('categorie').each(function(){
						if($(this).attr('ref') == ref){
							$('#titre').html($(this).attr('name'));
							
							$(this).find('video').each(function(){
								html += "<img src='"+ $(this).find('images').text() +"' alt='"+ $(this).find('nom').text() +"' height='200px' width='200px' onclick='detail("+ $(this).attr('id') +")'/>";
							});
							$('#liste').html(html);
						}
					});
				}
			});
			
		}
	});
}

function init(){
	$('#menu li').click(function(){

		page($(this).attr('id'));
	});
}

function detail(id){
	
}