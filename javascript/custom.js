$(document).ready(function(){
	
	$(".comment-reply-link").on("click", function(){
		var respondPos = $("#respond").position();
		$("#sent-moderation").remove();
		$("html, body").animate({scrollTop : respondPos.top - 50});
	});
	
    $("a.menu-btn").click(function(){
    	var $icon = $(this).children("i");
    	$("body").toggleClass("menu-opened");
    	$(this).toggleClass("active");
    	if($(this).hasClass("active")){
    		$icon.removeClass("icon-reorder").addClass("icon-remove");
    	} else {
    		$icon.removeClass("icon-remove").addClass("icon-reorder");
    	}
    	if(!jQuery.browser.mobile){
    		$(this).tooltip('hide');
	    	if($(this).hasClass("active")){
	    		$(this).attr("data-original-title", "Close menu");
	    	} else {
	    		$(this).attr("data-original-title", "View menu");
	    	}
			$(this).tooltip('show');
		}
	    return false;
    });
    
    $("#s").attr("placeholder", "Search Keywords");
    
    $("#cancel-comment-reply-link").text('Cancel');
    
	if(!jQuery.browser.mobile){
		$('a[title]').not(".comments a").tooltip();
	}
    
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
            $("#top").addClass("tiny");
        } else {
            $('.back-to-top').fadeOut();
            $("#top").removeClass("tiny");
        }
    });
    $('.back-to-top').click(function(){
	    $("html, body").animate({ scrollTop: 0 }, 600);
	    return false;
    });
    $(".toggles").children("p").remove();
    $(".toggles").each(function(){
    	if($(this).hasClass("accordion")){
	    	$("h4", this).click(function(){
	    		if($(this).hasClass("active")){
		    		$(this).toggleClass("active").next().toggleClass("active").slideToggle("fast");
		    		$("i", this).removeClass('icon-collapse-alt').addClass("icon-expand-alt");
	    		} else {
	    			$(this).siblings(".active").removeClass("active");
		    		$(this).siblings(".toggle-content").slideUp("fast");
		    		$(this).toggleClass("active").next().toggleClass("active").slideToggle("fast");
		    		$("i", this).removeClass('icon-expand-alt').addClass("icon-collapse-alt");
		    		$(this).siblings('h4').children("i").removeClass('icon-collapse-alt').addClass("icon-expand-alt");
	    		}
	    	});
    	} else {
	    	$("h4", this).click(function(){
	    		$(this).toggleClass("active").next().toggleClass("active").slideToggle("fast");
	    		if($(this).hasClass("active")){
		    		$("i", this).removeClass('icon-expand-alt').addClass("icon-collapse-alt");
	    		} else {
		    		$("i", this).removeClass('icon-collapse-alt').addClass("icon-expand-alt");
	    		}
	    	});
    	}
    });
});
