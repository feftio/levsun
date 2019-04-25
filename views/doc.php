<?php
$into['menu__active'] = 'doc';
?>
<!DOCTYPE html>
<html lang="ru">

<?php include_once ROOT . '/views/parts/head.php'; ?>

<body>
	<div class="wrapper">
		<div class="wrapper__navigation" id="wrapper__navigation"></div>
		<header class="header">
			<div class="header__overlay"></div>
			
			<?php include_once ROOT . '/views/parts/nav.php'; ?>

		</header>
		<?php include_once ROOT . '/views/parts/footer.php'; ?>
	</div>

	<?php include_once ROOT . '/views/parts/scripts.php'; ?>

</body>
</html>