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
			</div>
			<div class="content">

				<div class="div">
					111
				</div>
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
</body>

</html>


				<!-- <div class="while">
				<?
                      $rows = getNews();
                      while ($row = $rows->fetch_assoc()) {
                        ?>
                    <div class=" block  news">
                    <h1><?=$row['name'] ?></h1>
                    <p><?=$row['text'] ?></p>
                        <p class="date"><?=$row['Data'] ?></p>
                    </div>
                         <?}?>   
                    </div> -->