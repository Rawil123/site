<div id="wrapperRegLog">
	<div>
		<p class="h1">Регистрация</p>
		<div id="reg">
		<p class="error"></p>
			<section>
				<p>Ваше имя :</p>
				<input type="text" id="login">
			</section>
			<section>
				<p>Ваша фамилия :</p>
				<input type="text" id="lastName">
			</section>
			<section>
				<p>Пароль :</p>
				<input type="password" id="password">
			</section>
			<section>
				<p>Повторите пароль :</p>
				<input type="password" id="repitPassword">
			</section>
			<section>
				<p>Ваш Email:</p>
				<input type="email" id="email">
			</section>
			<section>
				<input type="submit" value="enter" id="regSubmit" onclick="query('reg','login.lastName.password.repitPassword.email')">
			</section>
		</div>
	</div>
</div>