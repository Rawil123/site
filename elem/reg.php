<div id="wrapperRegLog">
	<div>
		<p class="h1">lorem</p>
		<form action="" id="reg">
			<section>
				<p>lorem</p>
				<input type="text" name="login">
				<!--<p class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit minima deserunt rerum tenetur eius consequatur dignissimos. Officia quasi maxime reiciendis.</p>-->
			</section>
			<section>
				<p>lorem</p>
				<input type="password" name="password">
			</section>
			<section>
				<p>lorem</p>
				<input type="password" name="repitPassword">
			</section>
			<section>
				<p>lorem</p>
				<input type="email" name="email">
			</section>
			<section>
				<input type="submit" value="enter" id="regSubmit">
			</section>
		</form>
		<script>
		$('#reg').submit(function() {
			var res = $(this).serialize();
				$.ajax ({
					type: 'POST',
					url: '../php/main.php',
					data:res,
					success : function(html) {
					alert(html)
				}
			})
		})
		</script>
	</div>
</div>