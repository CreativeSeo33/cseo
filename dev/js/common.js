//Анимация иконки анимации

$("a.tIcons").click(function(){
  $(this).toggleClass('toggle');
  return false;
});
$(".tIcons_button").click(function(){
  $("a.tIcons").toggleClass('toggle');
  return false;
});

//Анимация иконки анимации

//Анимация меню
var myElement = document.querySelector("svg.mi");
	var myElement2 = document.querySelector("svg.mi2");
	jQuery(document).ready(function($){
		$('.tIcons').on('click', function(){
			if( $('.menu-expand').hasClass('menu-is-open') ) {
				$('nav').removeClass('nav_white');
				$('.menu-expand').removeClass('menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
				
				myElement.style.fill = "#333";
			});
				} else {
					$('nav').addClass('nav_white');
			$('.menu-expand').addClass('menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
				myElement2.style.fill = "#fff";
			
			
			});
			}
		});
		$('.tIcons_button').on('click', function(){
			if( $('.menu-expand').hasClass('menu-is-open') ) {
				$('nav').removeClass('nav_white');
				$('.menu-expand').removeClass('menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
				
				myElement.style.fill = "#333";
			});
				} else {
					$('nav').addClass('nav_white');
			$('.menu-expand').addClass('menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
				myElement2.style.fill = "#fff";
			
			
			});
			}
		});
	});
//Анимация меню



//BUTTONS HOVER blob
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
//BUTTONS HOVER blob


  
