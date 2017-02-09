<header>
<!--LINEmENU-->
	<div id="lineMenu">
		<ul>
			<li><a href=""><span id="basket" class="icon"></span>My account</a></li>
			<li><a href=""><span id="account" class="icon"></span>Basket</a></li>
			<li><?php 
				if ($_SESSION['enter'] == 1) echo '<a href="../php/unlog.php">Выйти</a>';
				else echo '<a href= "log.php">Войти</a>
					<a href= "reg.php">/Зарегистрироватся</a>';
			?></li>
		</ul>
	</div>
	
		<div id="logo">
						<div class="imgLogo"><img src="" alt=""></div>
						<div class="phone">
							<section>
								<img src="../icon/navigation/phone-call-3.svg" alt="">
								<div>
									<p>+8 982 123 54 30</p>
									<p>+8 982 123 54 30</p>
								</div>
							</section>
							<section>
								<img src="../icon/navigation/mail-5.svg" alt="">
								<div>
									<p>+8 982 123 54 30</p>
									<p>+8 982 123 54 30</p>
								</div>
							</section>
						</div>		

		</div>
	

	<div id="catagory">
		
		<ul>
		<?php 
		for ($i=0; $i < 5; $i++) { 
		 	echo '<li>
			lorem1
				<ul class="drop">
					<li><a href="">lorem</a></li>
					<li><a href="">lorem</a></li>
					<li><a href="">lorem</a></li>
				</ul>
			</li>';
		 } ?>
		</ul>
		<div id="search">
			<input type="text">
			<input type="button">
		</div>
	</div>

	<div class="where">
		<div>
			<p><a href="">lorem</a></p>
			<p><a href="">lorem</a></p>
			<p><a href="">lorem</a></p>
			<p><a href="">lorem</a></p>
		</div>
	</div>
</header>