!function(e){"use strict";e(document).ready(function(){!function t(){if(e(".main-header").length){var n=e(window).scrollTop(),o=e(".main-header"),i=e(".scroll-top");n>=250?(o.addClass("fixed-header"),i.fadeIn(300)):(o.removeClass("fixed-header"),i.fadeOut(300))}}(),e(".navigation li.dropdown").hover(function(){e(window).innerWidth()>=992&&(e(this).children("ul").stop(!0,!1,!0).slideToggle(300),e(this).children(".megamenu").stop(!0,!1,!0).slideToggle(300))}),e(".main-header .navigation li.dropdown ul").length&&(e(".main-header .navigation li.dropdown").append('<div class="dropdown-btn"><span class="fas fa-chevron-down"></span></div>'),e(".main-header .navigation li.dropdown .dropdown-btn").on("click",function(){e(this).prev("ul").slideToggle(500),e(this).prev(".megamenu").slideToggle(800)}),e(".navigation li.dropdown > a").on("click",function(e){e.preventDefault()})),e(".main-header .main-menu").length&&e(".main-header .main-menu .navbar-toggle").click(function(){e(this).prev().prev().next().next().children("li.dropdown").hide()}),e(".menu-sidebar").length&&(e(".menu-sidebar").on("click",function(t){t.preventDefault(),e("body").toggleClass("side-content-visible")}),e(".hidden-bar .inner-box .cross-icon,.form-back-drop,.close-menu").on("click",function(t){t.preventDefault(),e("body").removeClass("side-content-visible")}),e(".fullscreen-menu .navigation li.dropdown > a").on("click",function(){e(this).next("ul").slideToggle(500)})),e(".onepage a").on("click",function(t){t.preventDefault();var n=e(this.hash).offset().top;e("html").animate({scrollTop:n},1e3)}),e(".testimonials-wrap").length&&e(".testimonials-wrap").slick({dots:!1,infinite:!0,autoplay:!0,autoplaySpeed:2e3,arrows:!0,speed:1e3,focusOnSelect:!1,prevArrow:".testimonial-prev",nextArrow:".testimonial-next",slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:767,settings:{slidesToShow:1}}]}),e(".project-filter li").on("click",function(){e(".project-filter li").removeClass("current"),e(this).addClass("current");var t=e(this).attr("data-filter");e(".project-masonry-active").imagesLoaded(function(){e(".project-masonry-active").isotope({itemSelector:".item",filter:t,masonry:{columnWidth:".item"}})})}),e(".counter-text-wrap").length&&e(".counter-text-wrap").appear(function(){var t=e(this),n=t.find(".count-text").attr("data-stop"),o=parseInt(t.find(".count-text").attr("data-speed"),10);t.hasClass("counted")||(t.addClass("counted"),e({countNum:t.find(".count-text").text()}).animate({countNum:n},{duration:o,easing:"linear",step:function(){t.find(".count-text").text(Math.floor(this.countNum))},complete:function(){t.find(".count-text").text(this.countNum)}}))},{accY:0}),e(".scroll-to-target").length&&e(".scroll-to-target").on("click",function(){var t=e(this).attr("data-target");e("html, body").animate({scrollTop:e(t).offset().top},1e3)}),e("select").niceSelect(),e(".wow").length&&new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!1,live:!0}).init()}),e(window).on("resize",function(){var t=e(".navigation li.dropdown");t.children("ul").hide(),t.children(".megamenu").hide()}),e(window).on("scroll",function(){!function t(){if(e(".main-header").length){var n=e(window).scrollTop(),o=e(".main-header"),i=e(".scroll-top");n>=100?(o.addClass("fixed-header"),i.fadeIn(300)):(o.removeClass("fixed-header"),i.fadeOut(300))}}()}),e(window).on("load",function(){e(".preloader").length&&e(".preloader").delay(200).fadeOut(500),e(".project-masonry-active").length&&e(this).imagesLoaded(function(){e(".project-masonry-active").isotope({itemSelector:".item"})}),e(".blog-standard-wrap").length&&e(this).imagesLoaded(function(){e(".blog-standard-wrap").isotope({itemSelector:".item"})})})}(window.jQuery);