<!DOCTYPE html>
<html lang="ru">

<?php View::render('views/parts', 'head.php') ?>

<body>
	<div class="wrapper">
		<div class="wrapper__navigation" id="wrapper__navigation"></div>
	
			<?php View::render('views/parts', 'nav.php') ?>

		<?php View::render('views/parts', 'footer.php') ?>
		
	</div>

	<?php View::render('views/parts', 'scripts.php') ?>

</body>
</html>