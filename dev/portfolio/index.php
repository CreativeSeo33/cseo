<?php
include("var.php");
include("../blocks/meta.php");
include("../blocks/navbar.php"); 
?>


<style>
	body {overflow: hidden;}	

</style>


<div class="content" id="non-scrollable">
  
  <div class="buffer"></div>
  <div class="grid">
  	  <div class="grid-sizer"></div>  	  
	  <div class="grid-item">
	  	<div class="overlay-black"></div>
	  	<div class="overlay">
	  		<img src="/img/2.jpg" class="img-responsive" alt="Логотип Golden Home">
	  		<div class="port_h1">
	  			<img src="/img/logo-goldenhome.png" alt="Строительная компания Golden Home" class="img-responsive portfolio_logo">
	  			<div class="port_h1_link">sk-goldenhome.ru</div>
	  		</div>
	  		<!-- <div class="port_h2">Строительная компания Golden Home</div> -->
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay-black"></div>
	  	<div class="overlay">
	  		<img src="/img/3.jpg" class="img-responsive" alt="Логотип Ключ 585">
	  		<div class="port_h1">
	  			<img src="/img/kluch_logo.png" alt="Строительная компания Ключ 585" class="img-responsive portfolio_logo">
	  			<div class="port_h1_link">kluch585.ru</div>
	  		</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	    <div class="overlay-black"></div>
	  	<div class="overlay">
	  		<img src="/img/4.jpg" class="img-responsive" alt="Логотип Люкс Свет">
	  		<div class="port_h1"><img src="/img/lustra_logo.png" alt="Интернет-магазин Люкс Свет" class="img-responsive"></div>
	  		<div class="port_h2">Интернет-магазин Люкс Свет</div>
	  	</div>
	  </div>
	  <div class="grid-item"><div class="overlay-black"></div><div class="overlay"><img src="/img/5.jpg" class="img-responsive" ></div></div>
	  
	  <div class="grid-item"><div class="overlay-black"></div><div class="overlay"><img src="/img/2.jpg" class="img-responsive"></div></div>

	  <div class="grid-item"><div class="overlay-black"></div><div class="overlay"><img src="/img/2.jpg" class="img-responsive"></div></div>

	  <div class="grid-item"><div class="overlay-black"></div><div class="overlay"><img src="/img/2.jpg" class="img-responsive"></div></div>
	  <div class="grid-item">
	  	<div class="overlay-black"></div>
	  	<div class="overlay">
	  		<img src="/img/6.jpg" class="img-responsive">
	  		<div class="port_h1"><img src="/img/logo-goldenhome.png" alt="" class="img-responsive"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">	 
	  	<div class="overlay-black"></div> 	
	  	<div class="overlay">
	  		<img src="/img/2.jpg" class="img-responsive">
	  		<div class="port_h1"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay-black"></div>
	  	<div class="overlay">
	  		<img src="/img/3.jpg" class="img-responsive">
	  		<div class="port_h1"><img src="/img/logo-goldenhome.png" alt="" class="img-responsive"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay-black"></div>
	  	<div class="overlay">
	  		<img src="/img/4.jpg" class="img-responsive">
	  		<div class="port_h1"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item"><div class="overlay"><img src="/img/5.jpg" class="img-responsive" ></div></div>
  </div>

</div>


<?php include("../blocks/footer_meta.php"); ?>
<script src="/js/isotope.pkgd.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>

<script>
	$(document).ready(function() {
  
  var winW = $(window).innerWidth(),
      winH = $(window).innerHeight(),
      padding = 30, //so that the user doesn't have to move their mouse ALL the way up/down/left/right to see the edges of the image. Make it whatever you want. 
      $cont = $(".content"),
      contW = $cont.width(),
      contH = $cont.height(),
      difW = contW - winW,
      difH = contH - winH;
  
    var moveContent = function(e) {
      var x = (e.pageX - padding) / (winW - 2 * padding),
          y = (e.pageY - padding) / (winH - 2 * padding);
      if (x < 0) {
        x = 0;
      } else if (x > 1) {
        x = 1;
      }
      if (y < 0) {
        y = 0;
      } else if (y > 1) {
        y = 1;
      }
      TweenMax.to($cont, 0.5, {x:difW * -x, y:difH * -y, ease:Power2.easeOut, overwrite:true});    
    };

  $("body").on("mousemove", moveContent);
    
});

//Masonry
	$('.grid').masonry({
	  // set itemSelector so .grid-sizer is not used in layout
	  itemSelector: '.grid-item',
	  // use element for option
	  columnWidth: '.grid-sizer',
	 
	  percentPosition: true
	});
//Masonry
$(document).ready(function() {	
    $('.tIcons').click(function() {
    TweenMax.killAll(false, true, false);  
   });
    $('.tIcons_button').click(function() {
    TweenMax.killAll(false, true, false);  
   });
});

	var controller = new ScrollMagic.Controller();
		var tween = new TimelineMax()
		.add(TweenMax.to(".mi rect", 0.18, {fill: "#fff", ease:Linear}),0)
		.add(TweenMax.to("nav", 0.01, {color: "#fff", ease:Linear}),0);
		var scene = new ScrollMagic.Scene({triggerElement: ".grid", duration: 0, tweenChanges: true})
					.setTween(tween)
					//.setPin(".home_screen")
					.triggerHook("onLeave")	
					//.addIndicators()
					.offset(-35)
					.addTo(controller);
</script>
<script>
/**
 * $.disablescroll
 * Author: Josh Harrison - aloofdesign.com
 *
 * Disables scroll events from mousewheels, touchmoves and keypresses.
 * Use while jQuery is animating the scroll position for a guaranteed super-smooth ride!
 */(function(e){"use strict";function i(t,n){this.opts=e.extend({handleKeys:!0,scrollEventKeys:[32,33,34,35,36,37,38,39,40]},n);this.$container=t;this.$document=e(document);this.disable()}var t,n=function(e){for(var t=0;t<this.opts.scrollEventKeys.length;t++)if(e.keyCode===this.opts.scrollEventKeys[t]){e.preventDefault();return}},r=function(e){e.preventDefault()};i.prototype={disable:function(){var e=this;e.$container.on("mousewheel.UserScrollDisabler DOMMouseScroll.UserScrollDisabler touchmove.UserScrollDisabler",r);e.opts.handleKeys&&e.$document.on("keydown.UserScrollDisabler",function(t){n.call(e,t)})},undo:function(){var e=this;e.$container.off(".UserScrollDisabler");e.opts.handleKeys&&e.$document.off(".UserScrollDisabler")}};e.fn.disablescroll=function(e){!t&&(typeof e=="object"||!e)?t=new i(this,e):t&&t[e]?t[e].call(t):t&&t.disable.call(t)}})(jQuery);


var $nonScrollable = $("#non-scrollable")

$nonScrollable.disablescroll();

$("button").on("click", function() {
    $nonScrollable.disablescroll("undo");
});
</script>
<?php include("../blocks/footer_bottom.php"); ?>