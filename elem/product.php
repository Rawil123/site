<?php 
	$result = mysql_query("SELECT * FROM `product`");
	$row = mysql_fetch_array($result);
	$maxPosts = 2;
	$numberPosts = mysql_num_rows($result);
	$numberPages =  intval(($numberPosts-1)/$maxPosts)+1;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = 1;
	}
	$liteDescr = substr($row['description'], 0,130);
?>
<div class="product">

<!--<div class="vie">
	<span id="block"></span>
	<span id="list"></span>
</div>-->

<div class="wrapperCell">
<?php 
	do {

		if (($row['id']>$page*$maxPosts-$maxPosts)&& ($row['id']<=$page*$maxPosts)) {


	echo '<div class="cell">
		<section class="imgProduct">
			<a href="http://localhost/shop/html/article.php?id='.$row["id"].'">
				<img src= '.$row["img"].' alt="product">
				<span>'.$liteDescr.'...</span>
			</a>
				
		</section>
		<a href="http://localhost/shop/html/article.php?">	<p class="nameProd">'.$row["name"].'</p></a>
		<section class="buy">

			<div>
				<p>'.$row["valueNew"].'</p>
				<p>usd</p>
			</div>
			<div>
				<p><a href="">lorem</a></p>
			</div>
		</section>
</div>';
		}
			

	
	} while ($row = mysql_fetch_array($result));
			





?>

</div>
</div>
<?php 
include 'page.php';
 ?>