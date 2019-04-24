<head>
	<meta charset="UTF-8">
	<title><?php echo $Global['title']; ?></title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="../../template/image/favicon.ico">


	<?php if ($Global['default.css']){ ?>
	<link rel="stylesheet" href="../../template/style/default.css">
	<?php } ?>

	<?php if ($Global['nav.css']){ ?>
	<link rel="stylesheet" href="../../template/style/nav.css">
	<?php } ?>

	<?php if ($Global['main__style.css']){ ?>
	<link rel="stylesheet" href="../../template/style/main__style.css">
	<?php } ?>



<!-- JavaScript -->
<?php if ($Global['fontawesome']){ ?>
	<script defer src="../../template/style/lib/fontawesome/all.js"></script>
	<script defer src="../../template/style/lib/fontawesome/v4-shims.js"></script>
<?php } ?>
<!-- ---------- -->

</head>