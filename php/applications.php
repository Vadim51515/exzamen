<?
require_once('bd.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<title>Экзамен</title>
	

</head>
<body>
	<div class="full" id="full">
		<div class="header">
			<h1>Наш сайт</h1>
		</div>

		<div class="main">
			<div class="navBar" onclick="click(222)">
				<button class="signUp" onclick="openPopup()">Записаться к нам</button>

				<a href="./index.php"><button class="applications">Главная</button> </a>	
			</div>
			<div class="content">
				<h1>Заявки</h1>
				<div class="bid" id="bid">
					<p id="fio">ФИО</p>
				</div>
				<button onclick="fio()">abc</button>
			</div>
		</div>
	</div>
	<div id="planesPopup">
		<div class='popup' id="popup">
		 	<div class="whiteBox">
		 		<button class="close" onclick='setPopup()'>Закрыть</button>

		 		<p class="name">ФИО</p>
		 		<input class="popupInput" type="" name="" value="" placeholder="">

		 		<p class="name">Адрес</p>
		 		<input class="popupInput" type="" name="" value="">

		 		<p class="name">""</p>
		 		<input class="popupInput" type="" name="" value="">

		 		<p class="name">""</p>
		 		<input class="popupInput" type="" name="" value="">

		 		<p class="name">Коментарий</p>
		 		<textarea class="popupInput"></textarea>

		 		<button class="add">Отправить</button> 
		 	</div>
		</div>
	</div>
	<script src="../js/index.js" ></script>
	<script src="../js/application.js"></script>



</body>

</html>