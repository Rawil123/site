<?php 
	$id =$_GET['id'];
	$result = mysql_query("SELECT * FROM `product` WHERE id = '$id' ");
	$row = mysql_fetch_array($result);
 ?>

<div class="wrapperInf">
<div class="descr">
<div>
	<div class="topDescr">
		<span class="back"></span>
		<img src = '<?php echo $row["img"]; ?>' alt="">
		<span class="next"></span>		
		<form action="" id="size">
			<section>
				<p class="h2">lorem</p>
				<select name="" id="">
					<option value="">lorem1</option>
					<option value="">lorem2</option>
					<option value="">lorem3</option>
					<option value="">lorem4</option>
					<option value="">lorem5</option>
					<option value="">lorem6</option>
					<option value="">lorem7</option>
					<option value="">lorem8</option>
					<option value="">lorem9</option>
					<option value="">lorem10</option>
				</select>
			</section>
			<section>
				<p class="h2">lorem</p>
				<select name="" id="">
					<option value="">lorem1</option>
					<option value="">lorem2</option>
					<option value="">lorem3</option>
					<option value="">lorem4</option>
					<option value="">lorem5</option>
					<option value="">lorem6</option>
					<option value="">lorem7</option>
					<option value="">lorem8</option>
					<option value="">lorem9</option>
					<option value="">lorem10</option>
				</select>
			</section>
			<section>
				<p class="h2">lorem</p>
				<select name="" id="">
					<option value="">lorem1</option>
					<option value="">lorem2</option>
					<option value="">lorem3</option>
					<option value="">lorem4</option>
					<option value="">lorem5</option>
					<option value="">lorem6</option>
					<option value="">lorem7</option>
					<option value="">lorem8</option>
					<option value="">lorem9</option>
					<option value="">lorem10</option>
				</select>
			</section>
		</form>
		<div class="multy">
			<span class="back"></span>
				<img src="https://cs7060.vk.me/c638126/v638126102/1de84/_OMmQ0OYvOY.jpg" alt="">
				<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRxI9U9bdTuC7Bnq8HVrXACx80XuUMRzu0J0QyR_-Z48T-ghVDYmYqpjQ" alt="">
				<img src="https://pp.vk.me/c626520/v626520079/56e36/CqCt_Osv4Dw.jpg" alt="">
				<img src="https://cs7060.vk.me/c836526/v836526684/1306e/9EQQFA7Wdsw.jpg" alt="">
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
	<p class="titledDescr">opinion</p>
		<section>
			<p class="user">Name</p>
			<p class="titleOpi">good</p>
			<p class="opinionText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius vero, mollitia nihil assumenda officiis similique quasi, suscipit ipsa voluptates dicta magnam repellendus, adipisci quod facere numquam illo beatae magni maxime!</p>
		</section>
				<section>
			<p class="user">Name</p>
			<p class="titleOpi">good</p>
			<p class="opinionText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius vero, mollitia nihil assumenda officiis similique quasi, suscipit ipsa voluptates dicta magnam repellendus, adipisci quod facere numquam illo beatae magni maxime!</p>
		</section>
				<section>
			<p class="user">Name</p>
			<p class="titleOpi">good</p>
			<p class="opinionText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius vero, mollitia nihil assumenda officiis similique quasi, suscipit ipsa voluptates dicta magnam repellendus, adipisci quod facere numquam illo beatae magni maxime!</p>
		</section>
	</div>
</div>
	
	<div class="createOpinion">
	<h2>lorem</h2>
		<form action="" id="createOpinion">
			<textarea name="" id="" cols="30" rows="10" placeholder="lorem"></textarea>
			<input type="button" value="Enter">
		</form>
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