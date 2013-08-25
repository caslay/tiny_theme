jQuery(document).ready(function(){
	$ = jQuery;
	
	$(".logo").each(function(){
		var $logoUrl = $("#wptuts_logo"),
			$removeBtn = $(".remove-btn", this),
			$logoImg = $(".preview-upload", this);
			
		remove_logo();
		$(document).hover(function(){
			if(!$removeBtn.hasClass("active")){
				remove_logo();
			}
		});
		
		function remove_logo(){
			if(!$logoImg.attr("src") == ""){
				$removeBtn.show().addClass("active");
				$removeBtn.click(function(){
					$logoImg.attr("src", "");
					$logoUrl.removeAttr("value");
					$(this).hide();
					return false
				});
			}
		}
	});
	
});
