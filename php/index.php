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
	<div class="full">
		<div class="header">
			<h1>Header</h1>
		</div>

		<div class="main">
			<div class="navBar" onclick="click(222)">
				navBar
			</div>
			<div class="content">

				<div class="div">
					<button onclick="test()">rknhr</button>
					<div id="test">	</div>
				</div>

				<div class="div">
					<button onclick="invisible()">кнопка чтобы скрыть блок</button>
					<p id="invis">Меня видно</p>
				</div>

				<div class="div">
					<input onclick="radio_a(value)" type="radio" name="1" value="1">
					<input onclick="radio_a(value)" type="radio" name="1" value="2">
					<input onclick="radio_a(value)" type="radio" name="1" value="3">
					<input onclick="radio_a(value)" type="radio" name="1" value="4">
				</div>
				<div class="div">
					<input onclick="radio_b(value)" type="radio" name="2" value="1">
					<input onclick="radio_b(value)" type="radio" name="2" value="2">
					<input onclick="radio_b(value)" type="radio" name="2" value="3">
					<input onclick="radio_b(value)" type="radio" name="2" value="4">
				</div>
				<div class="div">
					<input onclick="radio_c(value)" type="radio" name="3" value="1">
					<input onclick="radio_c(value)" type="radio" name="3" value="2">
					<input onclick="radio_c(value)" type="radio" name="3" value="3">
					<input onclick="radio_c(value)" type="radio" name="3" value="4">
					<button type="submit" onclick="radio()">Submit</button>
				</div>

				<div class="div">
					<button onclick="jsonWrite()">Запись в файл</button>				
				</div>
				<div class="div">
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
                    </div>


			</div>
		
		</div>
	</div>
	<script src="../js/index.js" ></script>
	<script type="text/javascript" src="../json/data.json"></script>
</body>
</html>