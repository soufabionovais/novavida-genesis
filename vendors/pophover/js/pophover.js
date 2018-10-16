;( function( $, window, document, undefined ) {

    'use strict';

    // Defaults
    var pluginName = 'pophover',
        defaults = {
            offset: 10,
            eventin: "mouseenter",
            eventout: "mouseleave",
            position: "top",
            animin: "show",
            animout: "hide",
            animspeed: 500,
            close: false,
            onFadeIn: $.noop,
            onFadeOut: $.noop
        };

    // The actual plugin constructor
    function Plugin ( element, options ) {
        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    // Avoid Plugin.prototype conflicts
    $.extend( Plugin.prototype, {
        init: function() {

            // Extend function for animate.css animations
            // Callback function after animation ends
            $.fn.extend({
                animateCss: function(animationName, callback) {
                    var animationEnd = (function(el) {
                    var animations = {
                        animation: 'animationend',
                        OAnimation: 'oAnimationEnd',
                        MozAnimation: 'mozAnimationEnd',
                        WebkitAnimation: 'webkitAnimationEnd',
                    };

                    for (var t in animations) {
                        if (el.style[t] !== undefined) {
                            return animations[t];
                        }
                    }
                    })(document.createElement('div'));

                    this
                        .css('animationDuration', opt.animspeed + "ms")
                        .addClass('animated ' + animationName)
                        .stop()
                        .one(animationEnd, function() {
                            $(this).removeClass('animated ' + animationName);

                            if (typeof callback === 'function') callback();
                        });
                    return this;
                }
            });

            var pophover = $(this.element),
                dataOpt = pophover.data(),
                opt = $.extend( true, {}, this.settings, dataOpt ),
                target = pophover.data('target'),
                countClick = 0,
                win = $(window);

            // Add position class
            $(target).addClass(opt.position);

            // Show pophover function
            function animationIn() {
                if(opt.animin !== "show") {
                    $(target)
                    .off()
                    .css('visibility', 'visible')
                    .removeClass('animated ' + opt.animout)
                    .animateCss(opt.animin, function() {
                        opt.onFadeIn.call();
                    });
                } else {
                    $(target)
                    .off()
                    .css('visibility', 'visible');
                    opt.onFadeIn.call();
                }
            }

            // Hide pophover function
            function animationOut() {
                $(target).css({
                    'visibility': 'hidden'
                });
                opt.onFadeOut.call();

                // If pophover have iframe, reset src on close
                $(target).find("iframe").attr("src", $(target).find("iframe").attr("src"));
            }

            // Close button
            if(opt.close === true) {
                $(target).append('<button class="pophover__close" data-close="pophover" type="button">&times;</button>');

                var closeBtn = $(target).find('[data-close="pophover"]');

                closeBtn.on("click", function() {
                   if( opt.animout === "hide" ) {
                        // No animation out
                        animationOut();
                    } else {
                        // With animation out
                        $(target).stop().animateCss(opt.animout, function() {
                            animationOut();
                        });
                    }
                });
            }

            // On mouse enter
            pophover.on(opt.eventin, function(event) {
                var x = event.pageX,
                    y = event.pageY,
                    offsetX,
                    offsetY,
                    targetW = $(target).innerWidth(),
                    targetH = $(target).innerHeight(),
                    pophoverW = pophover.innerWidth(),
                    pophoverH = pophover.innerHeight(),
                    pophoverX = pophover.offset().left,
                    pophoverY = pophover.offset().top;

                // If eventin and eventout == click, prevent fadein/out on first click
                if( opt.eventin === "click" && opt.eventout === "click" ) {
                    if( $(target).css('visibility') == "hidden" ) {
                        countClick = 1;
                    } else {
                        countClick = 0;
                    }
                }

                // Prevent fadein when pophover not closed
                if( opt.eventout === "click" && opt.eventin !== "click" ) {
                    if( $(target).css('visibility') == "hidden" ) {
                        animationIn();
                    }
                } else if(opt.eventin === "click" && opt.eventout !== "click") {
                    if( $(target).css('visibility') == "hidden" ) {
                        if( opt.animin !== "show" ) {
                            animationIn();
                        } else {
                            $(target).off().css('visibility', 'visible');
                        }
                    }
                }
                else {
                    if( opt.animin !== "show" ) {
                        animationIn();
                    } else {
                        $(target).off().css('visibility', 'visible');
                    }
                }

                // Count default position when element hovered
                if( opt.position === "top" ) {
                    offsetX = x - (targetW / 2);
                    offsetY = pophoverY - targetH - opt.offset;
                }

                if( opt.position === "right" ) {
                    offsetX = pophoverX + pophoverW + opt.offset;
                    offsetY = y - (targetH / 2);
                }

                if( opt.position === "bottom" ) {
                    offsetX = x - (targetW / 2);
                    offsetY = pophoverY + pophoverH + opt.offset;
                }

                if( opt.position === "left" ) {
                    offsetX = pophoverX - targetW - opt.offset;
                    offsetY = y - (targetH / 2);
                }

                $(target).css({
                    'top': offsetY,
                    'left': offsetX
                });
            });

            // On mouse out
            pophover.on(opt.eventout, function() {

                // If animin and animout == click, then count clicks
                if( opt.eventin === "click" && opt.eventout === "click" && countClick === 1 ) {
                    return;
                }

                if( opt.animout === "hide" ) {
                    // No animation out
                    animationOut();
                } else {
                    // With animation out
                    $(target).stop().animateCss(opt.animout, function() {
                        animationOut();
                    });
                }
            });

            // On mouse move
            pophover.on('mousemove', function(event) {
                var x = event.pageX,
                    y = event.pageY,
                    offsetX,
                    offsetY,
                    targetW = $(target).innerWidth(),
                    targetH = $(target).innerHeight(),
                    pophoverX = pophover.offset().left,
                    pophoverY = pophover.offset().top;

                if( $(target).css('visibility') == "visible" ) {
                    // Calculate positions on mouse move
                    if( opt.position === "top" || opt.position === "bottom" ) {
                        offsetX = x - (targetW / 2);
                        $(target).css('left', offsetX);
                    }

                    if( opt.position === "right" || opt.position === "left" ) {
                        offsetY = y - (targetH / 2);
                        $(target).css('top', offsetY);
                    }
                }
            });

            // Prevent pophover hide on click on element
            pophover.on("click", function(event) {
                event.stopPropagation();
            });

            $('.pophover__inner').on("click", function(event) {
                event.stopPropagation();
            });

            // Remove style attr from pophover when resize browser
            win.on("resize", function() {
                $('.pophover').removeAttr("style");
            });

            // Close pophover when click somewhere (instead pophover and it's element)
            win.on("click", function() {
                if( $(target).css("visibility") === "visible" ) {
                    if( opt.animout === "hide" ) {
                        // No animation out
                        animationOut();
                    } else {
                        // With animation out
                        $(target).stop().animateCss(opt.animout, function() {
                            animationOut();
                        });
                    }
                }
            });
        }
    });

    // Plugin wrapper around the constructor preventing against multiple instantiations
    $.fn[ pluginName ] = function( options ) {
        return this.each( function() {
            if ( !$.data( this, "plugin_" + pluginName ) ) {
                $.data( this, "plugin_" +
                    pluginName, new Plugin( this, options ) );
            }
        } );
    };

    // Init pophover to elements with data attribute
    $('[data-toggle="pophover"]').pophover();

} )( jQuery, window, document );