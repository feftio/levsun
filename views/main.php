<!DOCTYPE html>
<html lang="ru">

<?php View::render('views/parts', 'head.php') ?>

<body>
	<div class="wrapper">
		<div class="wrapper__navigation" id="wrapper__navigation"></div>
		<header class="header">
			<div class="header__overlay"></div>
			
			<?php View::render('views/parts', 'nav.php') ?>

			<section class="header__text">
				<div class="header__text__block">
					<p class="header__text__p1">Онлайн-покупка билетов на киноночь!</p>
					<p class="header__text__p2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>
			</section>
		</header>
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

		<?php View::render('views/parts', 'footer.php') ?>

	</div>

<?php View::render('views/parts', 'scripts.php') ?>

</body>

</html>