<?php
include("var.php");
include("../blocks/meta.php");
include("../blocks/navbar.php"); 
?>


<style>
	body {overflow: hidden;}
	
	.grid-sizer,
	.grid-item { width: 25%; position: relative;}
	/* 2 columns */
	.grid-item--width2 { width: 50%; }
	

</style>


<div class="content">
  
  <div class="buffer"></div>
  <div class="grid">
  	  <div class="grid-sizer"></div>  	  
	  <div class="grid-item">
	  	<div class="overlay">
	  		<img src="/img/2.jpg" class="img-responsive">
	  		<div class="port_h1"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay">
	  		<img src="/img/3.jpg" class="img-responsive">
	  		<div class="port_h1"><img src="/img/logo-goldenhome.png" alt="" class="img-responsive"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay">
	  		<img src="/img/4.jpg" class="img-responsive">
	  		<div class="port_h1"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item"><div class="overlay"><img src="/img/5.jpg" class="img-responsive" ></div></div>
	  
	  <div class="grid-item"><div class="overlay"><img src="/img/2.jpg" class="img-responsive"></div></div>

	  <div class="grid-item"><div class="overlay"><img src="/img/2.jpg" class="img-responsive"></div></div>

	  <div class="grid-item"><div class="overlay"><img src="/img/2.jpg" class="img-responsive"></div></div>
	  <div class="grid-item">
	  	<div class="overlay">
	  		<img src="/img/6.jpg" class="img-responsive">
	  		<div class="port_h1"><img src="/img/logo-goldenhome.png" alt="" class="img-responsive"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay">
	  		<img src="/img/2.jpg" class="img-responsive">
	  		<div class="port_h1"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
	  	<div class="overlay">
	  		<img src="/img/3.jpg" class="img-responsive">
	  		<div class="port_h1"><img src="/img/logo-goldenhome.png" alt="" class="img-responsive"></div>
	  		<div class="port_h2">Строительная компания Golden Home</div>
	  	</div>
	  </div>
	  <div class="grid-item">
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
<?php include("../blocks/footer_bottom.php"); ?>