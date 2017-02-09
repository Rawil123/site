<?php 
	$id =$_GET['id'];
	$result = mysql_query("SELECT * FROM `product` WHERE id = '$id' ");
	$row = mysql_fetch_array($result);

	//Данные для фильтра товаров
	$sizeProduct = explode(',', $row['size']);
	$numberSize = count($sizeProduct);

	$colorProduct = explode(',', $row['color']);
	$numberColor = count($colorProduct);

	//Изображения продуктов 
	$imgProduct = explode(',', $row['img']);
	$numberImg = count($imgProduct);

	//Коментарии
	$queryOpinion =mysql_query(" SELECT * FROM `opinion` WHERE `idProduct` = $id; ");
	$rowOpinion = mysql_fetch_array($queryOpinion);
?>
<div class="wrapperInf">
<div class="descr">
<div>
	<div class="topDescr">
		<span class="back"></span>
		<img src = "" alt="">
		<span class="next"></span>		
		<div id="size">
			<section>
				<p class="h2">Размер</p>
				<select name="" id="">
					
					<?php 
					for ($i=0; $i < $numberSize; $i++) { 
						echo "<option>";
						echo $sizeProduct[$i];
						echo "</option>";
					}
					?>
				</select>
			</section>
			<section>
				<p class="h2">Цвет</p>
				<select name="" id="">
					<?php 
					for ($i=0; $i < $numberColor; $i++) { 
						echo "<option>".$colorProduct[$i]."</option>";
					}
					?>
				</select>
			</section>
		</div>

		<div class="multy">
			<span class="back"></span>
				<?php 	
					for ($i=0; $i < $numberImg; $i++) { 
						echo '<img src = "'.$imgProduct[$i].'"></img>';
					}
				 ?>
			<span class="next"></span>
		</div>	

	</div>
	<section class="name">
		<h3><?php echo $row['name']; ?></h3>
	</section>
	<div class="purch">
		<section class="past">
			<p class="price"><?php echo $row['valueOld']; ?></p>
			<p class="currency">USD</p>
		</section>
		<section class="now">
			<p class="price"><?php echo $row['valueNew']; ?></p>
			<p class="currency">USD</p>
		</section>
		<form action="" id="purcher">
			<input type="button" value="buy">
		</form>
	</div>
	<div class="descrText">
		<p class="titledDescr">Description</p>
		<p class="description"><?php echo $row['description'];?></p>
	</div>
	<div class="opinion">
	<p class="titledDescr">Коментарии</p>
		<section>
		<?php 	
			do {

				if ($rowOpinion['id'] <= 3 ) {
					echo '<p class="user">'.$rowOpinion["username"].'</p>
						  <p class="titleOpi">'.$rowOpinion["titleOpinion"] .'</p>
						  <p class="opinionText">'.substr($rowOpinion["textOpinion"], 0, 1012).'...</p>';
				}
				
			} while ($rowOpinion = mysql_fetch_array($queryOpinion));
		 ?>
			<?php echo '<a href="http://localhost/shop/html/opinion.php?id='.$id.'">Все коментарии</a>' ; ?>
		</section>
		
	</div>
</div>
	
	<div class="createOpinion">
	<h2>Создать коментарий</h2>
		<div id="createOpinion">
			<p class="error"></p>
			<p>Краткая оценка</p>
			<input type="text" id="titleOpinion">
			<p>Полная оценка</p>
			<textarea id="textOpinion" cols="30" rows="10" placeholder="lorem"></textarea>
			<input type="text" id="idProduct" hidden="" value='<?php echo $id; ?>'>
			<input type="button" value="Enter"
		onclick="query('createOpinion',
		'titleOpinion.textOpinion.idProduct')">
		</div>
	</div>
</div>
<div class="sidebar">
<section>
	<p class="h1">Lorem ipsum.</p>
	<div class="rank">
			<div>
				<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRxI9U9bdTuC7Bnq8HVrXACx80XuUMRzu0J0QyR_-Z48T-ghVDYmYqpjQ" alt="">
				<section class="prodFooter">
					<p>lorem</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, laborum.</p>
				</section>
				<section class="valueFooter">
					<p>800</p>
					<p>usd</p>
				</section>
			</div>
	</div>
	<div class="rank">
			<div>
				<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRxI9U9bdTuC7Bnq8HVrXACx80XuUMRzu0J0QyR_-Z48T-ghVDYmYqpjQ" alt="">
				<section class="prodFooter">
					<p>lorem</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, laborum.</p>
				</section>
				<section class="valueFooter">
					<p>800</p>
					<p>usd</p>
				</section>
			</div>
	</div>
</section>

<section>
	<p class="h1">Lorem ipsum.</p>

	<div class="rank">
			<div>
				<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRxI9U9bdTuC7Bnq8HVrXACx80XuUMRzu0J0QyR_-Z48T-ghVDYmYqpjQ" alt="">
				<section class="prodFooter">
					<p>lorem</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, laborum.</p>
				</section>
				<section class="valueFooter">
					<p>800</p>
					<p>usd</p>
				</section>
			</div>
	</div>
</section>
<section>
	<p class="h1">Search</p>
	<form action="" id="searchSidebar">
		<input type="text"><input type="button" value="Search">
	</form>
</section>
</div>
</div>