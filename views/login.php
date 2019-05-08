<!DOCTYPE html>
<html lang="ru">

<?php View::render('views/parts', 'head.php') ?>

<body>
	<div class="container">
		<div class="big-image"></div>
		<div class="wrapper">
			<a class="arrow-back" href="/"><i class="fa fa-arrow-left"></i></a>
			<div class="form__wrapper">
				<form class="form" method="post" onsubmit="validation(this)">
					<div class="logo__circle"><a class="logo__image" href="/"><img src="/template/image/logoCN1.png" alt="placeholder+image" width="70" height="70"></a></div>
					<span class="form__welcome">Добро пожаловать!</span>
					<div class="login out-input">	
						<input class="input-style" type="text" name="login" placeholder="Логин">
						<span class="focus-input" data-placeholder="Логин"></span>
					</div>
					<div class="password out-input">
						<input class="input-style" id="password" type="password" name="password" placeholder="Пароль">
						<span class="eye eye-active"><i class="fa fa-eye" aria-hidden="true"></i></span>
						<span class="eye"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
						<span class="focus-input" data-placeholder="Пароль"></span>
					</div>
					<div class="sign-in">
						<button class="button">Войти</button>		
					</div>
					<div></div>
					<div class="pop-reg">
						<span>У вас нет аккаунта? </span><label>Зарегистрироваться</label>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/template/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/template/js/login.js"></script>
</body>
</html>