<!DOCTYPE html>
<html lang="ru">

<?php View::render('views/parts', 'head.php') ?>

<body>
	<div class="wrapper">
		<div class="line"><a href="/"><i class="fas fa-arrow-left"></i></a></div>
		<div class="login">
			<form class="login__form" action="POST">
				<a href="/"><img src="/template/image/logoCN1.png" alt="placeholder+image" width="80" height="80"></a>
				<span>Вход</span>
				<div class="login__block">
					<input class="form__input" type="text" name="login">
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>
				<div class="password__block">
					<span class="show-password"><i class="fa fa-eye eye" aria-hidden="true"></i></span>
					<input class="form__input" type="password" name="password">
					<span class="focus-input100"></span>
				</div>
			</form>
		</div>
		<div class="reg">
			<form class="reg__form" action="POST">
			</form>
		</div>
	</div>
</body>
</html>