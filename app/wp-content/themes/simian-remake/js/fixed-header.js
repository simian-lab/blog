window.requestAnimationFrame = window.requestAnimationFrame
    || window.mozRequestAnimationFrame
    || window.webkitRequestAnimationFrame
    || window.msRequestAnimationFrame
    || function(f){return setTimeout(f, 1000/60)}
 
 
;(function($){ // enclose everything in a immediately invoked function to make all variables and functions local
 
    var $body,
    resizetimer,
    stickyclass= 'sticky-header' //class to add to BODY when header should be sticky
     
    function makesticky(){
        var scrollTop = $(document).scrollTop()
        if (scrollTop >= 370){
            if (!$body.hasClass(stickyclass)){
                $body.addClass(stickyclass)
            }
        }
        else{
            if ($body.hasClass(stickyclass)){
                $body.removeClass(stickyclass)
            }
        }
    }
     
    $(window).on('load', function(){
        $body = $(document.body)
        $(window).on('scroll', function(){
            requestAnimationFrame(makesticky)
        }).one('scroll', function(){
        	//Only on first scroll, set the hero class
        	if(jQuery('.hero').length > 0){
        		jQuery('.hero').toggleClass('scrolled');
        	}
        });
        $(window).on('resize', function(){
            clearTimeout(resizetimer)
            resizetimer = setTimeout(function(){
                $body.removeClass(stickyclass)
                makesticky()
            }, 50)
        })
    })
 
})(jQuery)