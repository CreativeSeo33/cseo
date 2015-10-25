<?php
include("var.php");
include("../blocks/meta.php");
include("../blocks/navbar.php"); 
?>





<section id="cd-google-map">
	<div id="google-container"></div>
	<div id="cd-zoom-in"></div>
	<div id="cd-zoom-out"></div>	
	<div class="contacts_block_map">
		<h1>Контакты</h1>
		<table class="contacts_block_map_table">
		    <tr>
		        <td>
		        	<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
					</span>
				</td>
		        <td class="contacts_block_map_text">
		        	<span>600001, г.Владимир, ул. Дворянская 27а, корпус 1</span>
		        </td>
		    </tr>
		    <tr>
		        <td>
		        	<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
					</span>
		        </td>
		        <td class="contacts_block_map_text">
		        	+7 (4922) 600-312 <br>
					+7 (930) 830-03-12
		        </td>
		    </tr>
		    <tr>
		        <td>
		        	<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
					</span>
		        </td>
		        <td class="contacts_block_map_text">
		        	<a href="mailto:info@creative-seo.ru.ru">info@creative-seo.ru</a>
		        </td>
		    </tr>
		</table>
	
	</div>
</section>

<div class="contacts_form">s
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
<?php 
$script = '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>';
?>
<?php include("../blocks/footer_meta.php"); ?>