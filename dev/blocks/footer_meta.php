

<!-- build:remove -->
<script src="/libs/jquery/dist/jquery.min.js"></script>
<script src="/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="/libs/gsap/TweenMax.min.js"></script>
<script src="/libs/scrollmagic/ScrollMagic.js"></script>
<script src="/libs/scrollmagic/animation.gsap.js"></script>
<script src="/libs/scrollmagic/debug.addIndicators.js"></script>
<script src="/js/jquery.smoothscroll.js"></script>
<?php echo $script; ?>
<script src="/js/common.js"></script>
<script>
var ofs, x, y;
$('.button-blob').on('mouseenter', function(e){
  ofs = $(this).offset();
  x = (e.pageX - ofs.left);
  y = (e.pageY - ofs.top);
var name = $(this).text().toLowerCase().split(' ')[0];
  
$(this).append('<div class="blob ' + name + '" style="left:' + x + 'px; top: ' + y + 'px;"></div>');
  
var blob = $(this).find('.blob');
setTimeout(function(){
    blob.addClass("expand");
},20);
});

$('.button-blob').on('mouseleave', function(e){
  ofs = $(this).offset();
  x = (e.pageX - ofs.left);
  y = (e.pageY - ofs.top);
  var blob = $(this).find('.blob');
  blob.css({'left':x, 'top':y});
  blob.removeClass("expand");
  setTimeout(function(){
      blob.remove();
},800);
});
</script>
<!-- /build -->

<!-- build:template
<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
	
<script>
var scr = {"scripts":[
	{"src" : "/js/scripts.min.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

/build -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="/js/bootstrap.min.js"></script>-->
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </body>
</html>