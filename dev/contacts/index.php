<?php
include("var.php");
include("../blocks/meta.php");
include("../blocks/navbar.php"); 
?>

<style>
	footer {
		background-color: #171B1E;
		margin-top: 0 !important;		
	}	
</style>



<section id="cd-google-map">
	<div id="google-container"></div>
	<div id="cd-zoom-in"></div>
	<div id="cd-zoom-out"></div>	
	<div class="contacts_block_map hidden-xs">
		<h1>Контакты</h1>
		
		        <div class="contacts_block_map_text">600001, г.Владимир,<br>ул. Дворянская 27а, корпус 1</div>
		       
		        <div class="contacts_block_map_text_phone">
		        	+7 4922 600-312 <br>
					+7 930 830-03-12
		        </div>

		        <div class="contacts_block_map_text">
		        	Время работы: <br>
		        	9.00 - 18.00 ПН-ПТ
 		        </div>
		   
		        <div class="contacts_block_map_text">
		        	<a href="mailto:info@creative-seo.ru.ru">info@creative-seo.ru</a>
		        </div>
		  
	
	</div>
</section>
<!-- <div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<img src="../img/schema.jpg" alt="" class="img-responsive">
		</div>
		<div class="col-md-6"></div>
	</div>
</div> -->

<div class="contacts_form hidden-xs">
	<div class="container">
		<div class="row">
			<h2>Обратная связь</h2>
			<form action="" method="post">
				<ul>
					<li><input type="text" placeholder="Имя" class="required" name="name" value=""></li>
					<li><input type="text" placeholder="Email" class="required" name="email" value=""></li>
					<li><textarea name="message" class="required" placeholder="Сообщение"></textarea></li>
					<li></li>
				</ul>
			</form>			
			<button class="button-blob">Отправить</button>
		</div>
	</div>
</div>


<?php include("../blocks/footer.php"); ?>
<?php include("../blocks/footer_meta.php"); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script><script src="/js/gmaps.js"></script>


<?php include("../blocks/footer_bottom.php"); ?>