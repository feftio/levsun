<?php
$into = [
	'title' => 'Киноночь Алматы',
	'fontawesome' => False
];
?>
<!DOCTYPE html>
<html lang="ru">

<?php include_once ROOT . '/views/parts/head.php'; ?>

<body>
	<div class="wrapper">

		<?php include_once ROOT . '/views/parts/header.php'; ?>

		<section class="info" id="info">
			<div class="info__headline">
				<h1 class="info__headline__h1">Inforamation about!</h1>
				<p class="info__healine__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>

			<div class="info__wrapper">
				<div class="info__block img__glasses">
					<div class="info__circle"></div>
					<h2 class="info__h2">One part!</h3>
					<p class="info__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="info__block img__glasses">
					<div class="info__circle"></div>
					<h2 class="info__h2">Two part!</h3>
					<p class="info__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="info__block img__glasses">
					<div class="info__circle"></div>
					<h2 class="info__h2">Three part!</h3>
					<p class="info__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="info__block img__glasses">
					<div class="info__circle"></div>
					<h2 class="info__h2">Four part!</h3>
					<p class="info__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
		</section>

		<footer class="footer">
			<div class="social">
				<a class="social__a" href="#">
					<i class="fab fa-vk"></i>
					<span>Вконтакте</span>
				</a>
				<a class="social__a" href="#">
					<i class="fa fa-telegram" aria-hidden="true"></i>
					<span>Телеграм</span>
				</a>
				<a class="social__a" href="#">
					<i class="fab fa-facebook-f"></i>
					<span>Фейсбук</span>
				</a>
				<a class="social__a" href="#">
					<i class="fab fa-instagram"></i>
					<span>Инстаграм</span>
				</a>
			</div>
		</footer>

	</div>
<?php include_once ROOT . '/views/parts/scripts.php'; ?>
</body>

</html>