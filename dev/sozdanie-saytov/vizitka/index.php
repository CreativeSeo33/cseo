<?php
include("var.php");
include("../../blocks/meta.php");
include("../../blocks/navbar.php"); 
?>
<link rel="stylesheet" href="/css/materialize.css">
<div class="container">
	<div class="row">
		<?php include("../../blocks/breadcrumbs.php"); ?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Сайт визитка</h1>
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-6">
		<div class="block">
			<output></output>
			<p class="mainp"><input type="checkbox" class="main">00</p>
		    <div>
		      <input type="checkbox" id="ch1" data-price="1500"/>
		      <label for="ch1">Фотогалерея +1 500</label>
		    </div>
		    <div>
		      <input type="checkbox" id="ch2" data-price="3500"/>
		      <label for="ch2">Слайдер +3 500</label>
		    </div>
		    <div>
		      <input type="checkbox" id="ch3" data-price="1000"/>
		      <label for="ch3">Хостинг +1 000</label>
		    </div>
    
		</div>
		</div>
	</div>
</div>



<?php include("../../blocks/footer.php"); ?>
<?php include("../../blocks/footer_meta.php"); ?>
<script>
var allChbx = [],
    out = document.querySelector('output');
[].forEach.call(document.querySelectorAll('.block'), function(group){
    var main = group.querySelector('.main'),
        chbx = group.querySelectorAll('input[type=checkbox]:not(.main)');
    allChbx = allChbx.concat([].slice.call(chbx));
    main.addEventListener('change', function(){
        var stat = this.checked;
        [].forEach.call(chbx, function(el){
            el.checked = stat;
        });
        reCalc();
    });
    [].forEach.call(chbx, function(el){
        el.addEventListener('change',function(){
            var cnt = [].filter.call(chbx, function(el){
                return el.checked == true;
            }).length;
            main.checked = cnt > 0;
            reCalc();
        }, false);
    });
});
var total = 10000;
out.innerHTML = 'Итого: <b>' + total + '</b> руб.';
function reCalc(){
    var total = 10000;
    allChbx.forEach(function(c){
        total += c.checked == true ? +c.dataset.price : 0;
    });
    out.innerHTML = 'Итого: <b>' + total + '</b> руб.';
}
</script>
<?php include("../../blocks/footer_bottom.php"); ?>