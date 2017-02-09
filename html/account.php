<?php include '../elem/head.php'; ?><body>
	
		<?php 
			include ("../elem/header.php");

			if ($_SESSION['enter'] == 1) {
				include '../elem/account.php';
			}
			else {
				echo '
					<div class="content">
						<p>Войдите в свой аккаунт</p>
					</div>
				';
			}

		 	include ("../elem/footer.php");
		?>
</body>
</html>