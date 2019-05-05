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
			<div class="info__text">
				<h2>Забронировать место!</h2>
				<p>asdaijojafoasofjsoafjasjfosa</p>
			</div>
			<div class="info__blocks">
				<div class="info__block info__one"></div>
				<div class="info__block info__two"></div>
				<div class="info__block info__three"></div>
				<div class="info__block info__four"></div>
			</div>
		</section>
		<section class="form" id="form">
			<div class="form__block">

			</div>
		</section>
		

		<?php View::render('views/parts', 'footer.php') ?>

	</div>

<?php View::render('views/parts', 'scripts.php') ?>

</body>

</html>