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