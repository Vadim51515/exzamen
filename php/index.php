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
			<h1>Наш сайт</h1>
		</div>

		<div class="main">
			<div class="navBar" onclick="click(222)">
				<button>aaa</button>
			</div>
			<div class="content">

				<div class="div">
					111
				</div>



			</div>
		
		</div>
	</div>
	<script src="../js/index.js" ></script>
	<script type="text/javascript" src="../json/data.json"></script>
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