jQuery(document).ready(function($){var n=$("#menu-trigger"),e=$(".nav-wrap"),s=$("header");n.on("click",function(i){i.preventDefault(),n.toggleClass("is-clicked"),s.toggleClass("menu-is-open"),e.toggleClass("menu-is-open").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){$("body").toggleClass("overflow-hidden")}),$("#site-navigation").toggleClass("menu-is-open"),$("html").hasClass("no-csstransitions")&&$("body").toggleClass("overflow-hidden")}),e.on("click",function(i){$(i.target).is("#menu-trigger, #menu-trigger span")||(n.removeClass("is-clicked"),s.removeClass("menu-is-open"),e.removeClass("menu-is-open").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){$("body").removeClass("overflow-hidden")}),$("#site-navigation").removeClass("menu-is-open"),$("html").hasClass("no-csstransitions")&&$("body").removeClass("overflow-hidden"))}),$(".menu-item-has-children").children("a").on("click",function(n){n.preventDefault(),$(this).toggleClass("submenu-open").next(".sub-menu").slideToggle(200).end().parent(".menu-item-has-children").siblings(".menu-item-has-children").children("a").removeClass("submenu-open").next(".sub-menu").slideUp(200)})});