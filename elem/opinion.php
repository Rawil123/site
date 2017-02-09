<?php
	$id =$_GET['id'];
	$queryOpinion =mysql_query(" SELECT * FROM `opinion` WHERE `idProduct` = $id; ");
	$rowOpinion = mysql_fetch_array($queryOpinion);
 ?>
<div class="opinion">
	<p class="titledDescr">Коментарии</p>
		<section>
		<?php 	
			do {

					echo '<p class="user">'.$rowOpinion["username"].'</p>
						  <p class="titleOpi">'.$rowOpinion["titleOpinion"] .'</p>
						  <p class="opinionText">'.$rowOpinion["textOpinion"].'...</p>';

				
			} while ($rowOpinion = mysql_fetch_array($queryOpinion));
		 ?>
			
		</section>
</div>