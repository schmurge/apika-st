<?php
	$groups = array(
		1=>'ПЕРЕГОРОДКИ',
		2=>'ДВЕРИ',
		3=>'ИЗДЕЛИЯ ИЗ СТЕКЛА',
		4=>'ИЗДЕЛИЯ ИЗ СТЕКЛА И СТАЛИ',
		5=>'ИЗДЕЛИЯ ИЗ ДЕРЕВА',
		6=>'ХУДОЖЕСТВЕННАЯ ОБРАБОТКА СТЕКЛА',
	);

	$products = array(
		1=>array('id'=>1,'label'=>'АЛЮМИНИЕВЫЕ ПЕРЕГОРОДКИ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>1,'label'=>'Алюминиевые')),
		2=>array('id'=>2,'label'=>'ЦЕЛЬНОСТЕКЛЯННЫЕ ПЕРЕГОРОДКИ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>1,'label'=>'Цельностеклянные (безрамные)')),
		3=>array('id'=>3,'label'=>'САНТЕХНИЧЕСКИЕ ПЕРЕГОРОДКИ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>1,'label'=>'Сантехнические')),
		4=>array('id'=>4,'label'=>'ПРОТИВОПОЖАРНЫЕ ПЕРЕГОРОДКИ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>1,'label'=>'Противопожарные')),

		5=>array('id'=>5,'label'=>'ДВЕРИ СТЕКЛЯННЫЕ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>2,'label'=>'Стеклянные распашные')),
		6=>array('id'=>6,'label'=>'ДВЕРИ ГЛУХИЕ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>2,'label'=>'Глухие распашные')),
		7=>array('id'=>7,'label'=>'ДВЕРИ ЦЕЛЬНОСТЕКЛЯННЫЕ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>2,'label'=>'Цельностеклянные распашные, маятниковые')),
		8=>array('id'=>7,'label'=>'ДВЕРИ ЦЕЛЬНОСТЕКЛЯННЫЕ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>2,'label'=>'Цельностеклянные раздвижные')),
		9=>array('id'=>8,'label'=>'ДВЕРИ МЕТАЛЛИЧЕСКИЕ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>2,'label'=>'Металлические')),
		10=>array('id'=>9,'label'=>'ВХОДНЫЕ ГРУППЫ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>2,'label'=>'Входные группы (теплые, холодные)')),

		11=>array('id'=>11,'label'=>'ДУШЕВЫЕ КАБИНЫ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>3,'label'=>'Душевые кабины')),
		12=>array('id'=>12,'label'=>'КУХОННЫЕ ФАРТУКИ (СКИНАЛИ)','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>3,'label'=>'Кухонные фартуки (скинали)')),

		13=>array('id'=>13,'label'=>'СТЕКЛЯННЫЕ ЛЕСТНИЦЫ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>4,'label'=>'Стеклянные лестницы')),
		14=>array('id'=>14,'label'=>'ЛЕСТНИЧНЫЕ ОГРАЖДЕНИЯ И ПЕРИЛА','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>4,'label'=>'Лестничные ограждения и перила')),

		15=>array('id'=>15,'label'=>'ДЕКОРАТИВНЫЕ НАВЕСНЫЕ ПАНЕЛИ','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>5,'label'=>'Декоративные навесные панели')),
		16=>array('id'=>16,'label'=>'СТОЙКИ РЕСЕПШН','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>5,'label'=>'Стойки ресепшен')),

		17=>array('id'=>17,'label'=>'ХУДОЖЕСТВЕННАЯ ОБРАБОТКА СТЕКЛА','thumbUrl'=>'','images'=>array(''),'menu'=>array('group'=>6,'label'=>'Художественная обработка стекла')),
	);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo isset($_HEADER) ? $_HEADER : ''; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/css/styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="/js/scripts.js"></script>
		<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->

		<link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
		<link href="/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
		<!-- <link href="/css/owl.theme.green.min.css" rel="stylesheet" type="text/css"> -->
		<script type="text/javascript" src="/js/owl.carousel.min.js"></script>

	</head>
	<body class="">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">