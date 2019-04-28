<head>
	<meta charset="UTF-8">
	<title><?php echo G::$GlobalM['title']; ?></title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="../../template/image/favicon.ico">

	<?php foreach (G::getPathes(G::$GlobalM['css'], 'css') as $value){ ?>
	<link rel="stylesheet" href="<?php echo $value; ?>">
	<?php } ?>

	<?php foreach (G::getPathes(G::$GlobalM['js'], 'css') as $value){ ?>
	<link rel="stylesheet" href="<?php echo $value; ?>">
	<?php } ?>





<!--
	<?php //if ($Global['fontawesome']){ ?>
	<script defer src="../../template/style/lib/fontawesome/all.js"></script>
	<script defer src="../../template/style/lib/fontawesome/v4-shims.js"></script>
	<?php //} ?>
-->

</head>