/** This code belongs in a plugin file e.g. csn_animation **/
(function($){
    "use strict";
     var Modernizr = window.Modernizr || {},
         optionsDataKey = "options.csnanimation",
         eventNames = {complete: "complete.csnanimation"},
         
         transitionSpeed = 1000,
         
         defaultAnimationBodyCss = {
            "-moz-transition": "opacity 500ms linear 600ms",
            "-webkit-transition": "opacity 500ms linear 600ms",
            "-o-transition": "opacity 500ms linear 600ms",
            "transition": "opacity 500ms linear 600ms"
        },
     
         defaultAnimationCss = {
            "position": "absolute",
            "overflow": "hidden",
            "-moz-transition-duration": "1000ms",
            "-webkit-transition-duration": "1000ms",
            "-o-transition-duration": "1000ms",
            "transition-duration": "1000ms",
            "-moz-transition-property": "transform width height",
            "-webkit-transition-property": "transform width height",
            "-o-transition-property": "transform width height",
            "transition-property": "transform width height",
            "-moz-transition-timing-function": "ease-in",
            "-webkit-transition-timing-function": "ease-in",
            "-o-transition-timing-function": "ease-in",
            "transition-timing-function": "ease-in"
        },
        
        methods = {
            init: function(){
                //no init required yet
                return this;
            },
            
            destroy: function(){
                $(this).off(".csnAnimation").destroyData(optionsDataKey);
            },
            
            /* Animation methods, add other types here*/
            animateLinearPath: function(destPoint){
                if(!destPoint || $(this).hasClass("animating"))
                    return;
                
                var srcElm = $(this);
                var destElm = $(destPoint);
                var srcOffset = srcElm.offset();
                var destOffset = destElm.offset();
                var translateX = destOffset.left - srcOffset.left;
                var translateY = destOffset.top - srcOffset.top;
        
                //Setup inital css for transition container
                var transitionStartCss = $.extend({}, defaultAnimationCss, {
                  "top": srcOffset.top,
                  "left": srcOffset.left,
                  "width": srcElm.width(),
                  "height": srcElm.height()
                });
        
                //Setup end css for transition container
                var transitionEndCss = {
                      "top": destOffset.top,
                      "left": destOffset.left,   
                      "width": destElm.width(),
                      "height": destElm.height(),
                      "-webkit-transform": 'translate3d(' + translateX + 'px,' + translateY + 'px,0)',
                      "-moz-transform": 'translate(' + translateX + 'px,' + translateY + 'px)',
                      "-o-transform": 'translate(' + translateX + 'px,' + translateY + 'px)',
                      "transform": 'translate(' + translateX + 'px,' + translateY + 'px)'
                };
         
                var transitionBody = srcElm.clone().css(defaultAnimationBodyCss);
                var transitionElm = $("<div class='animation-container'/>")
                                    .css(transitionStartCss)
                                    .append(transitionBody)
                                    .appendTo("body");
				
				transitionBody.find("img").css({ width: "100%", height:"100%"});
                if (Modernizr.csstransitions && (Modernizr.csstransforms || Modernizr.csstransforms3d)) {
                  //need to wait a bit to give the browser a chance to draw the initial state
                  setTimeout(function () {
                    //Apply css3 end transition style
                    if (/iPad/.test(navigator.platform)) {
                      transitionEndCss["-webkit-transform"] = null;
                    } else {
                      transitionEndCss.top = null;
                      transitionEndCss.left = null;
                    }
                    transitionElm.css(transitionEndCss);
                    transitionBody.css({ opacity: "0" });
        
                    //Trigger end processing with a delay equal to the duration of the transition and fade.
                    setTimeout(function () {
                      srcElm.removeClass("animating");
                      transitionElm.remove();
                    }, 1100);
                  }, 20);
                }
                else {
                  //Apply transition the old fasion way using jquery animation
                  transitionElm.animate(transitionEndCss, transitionSpeed, function () {
                    srcElm.removeClass("animating");
                    transitionElm.fadeOut("medium", function () {
                      transitionElm.remove();
                    });
                  });
        
                }
            }
        };
    
    $.fn.csnAnimation = function(method){
        var args = Array.prototype.slice.call(arguments, 1);
      
        this.each(function(){
            if (methods[method]) {
                return methods[method].apply(this, args);
            } else if (typeof method === 'object' || !method) {
                return methods.init.apply(this, arguments);
            } else {
                return null;
            }
        });
    };
    
}(jQuery));
