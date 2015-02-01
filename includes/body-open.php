<?php

	define('IMAGES_URL', "/images/");
	define('IMAGES_PATH', dirname(__FILE__).'/../images/');
	
	define('CAROUSEL_IMAGES_URL', IMAGES_URL.'carousel/');
	define('CAROUSEL_IMAGES_PATH', IMAGES_PATH.'carousel/');

	define('PRODUCT_IMAGES_PATH', IMAGES_PATH.'products/');
	define('PRODUCT_IMAGES_URL', IMAGES_URL.'products/');
	define('PRODUCT_THUMBS_FOLDER_NAME', 'thumbs');

	$_GROUPS = array(
		array(
			'id'=>1
			,'label'=>'ОФИСНЫЕ ПЕРЕГОРОДКИ И ДВЕРИ'
			,'thumbName'=>'1.jpg'
			,'products'=>array(
				array('productId'=>1,'label'=>'Стационарные перегородки','thumbName'=>'1.jpg')
				,array('productId'=>2,'label'=>'Цельностеклянные перегородки','thumbName'=>'1.jpg')
				,array('productId'=>3,'label'=>'Противопожарные перегородки','thumbName'=>'1.jpg')
				,array('productId'=>4,'label'=>'Офисные двери','thumbName'=>'1.jpg')
			)
		),
		array(
			'id'=>2
			,'productId'=>5
			,'label'=>'МЕТАЛЛИЧЕСКИЕ ДВЕРИ'
			,'thumbName'=>'1.jpg'
		),
		array(
			'id'=>3
			,'productId'=>6
			,'label'=>'ВХОДНЫЕ ГРУППЫ (ТЕПЛЫЕ, ХОЛОДНЫЕ)'
			,'thumbName'=>'1.jpg'
		),
		array(
			'id'=>4
			,'productId'=>7
			,'label'=>'САНТЕХНИЧЕСКИЕ КАБИНЫ'
			,'thumbName'=>'1.jpg'
		),
		array(
			'id'=>5
			,'label'=>'ИЗДЕЛИЯ ИЗ СТЕКЛА И СТАЛИ'
			,'thumbName'=>'1.jpg'
			,'products'=>array(
				array('productId'=>8,'label'=>'Душевые кабины','thumbName'=>'1.jpg')
				,array('productId'=>9,'label'=>'Кухонные фартуки (скинали)','thumbName'=>'1.jpg')
				,array('productId'=>10,'label'=>'Стеклянные лестницы','thumbName'=>'1.jpg')
				,array('productId'=>11,'label'=>'Лестничные ограждения и перила','thumbName'=>'1.jpg')
				,array('productId'=>12,'label'=>'Навесные панели','thumbName'=>'1.jpg')
			)
		),
		array(
			'id'=>6
			,'productId'=>13
			,'label'=>'РЕСЕПШЕН, БАРНЫЕ СТОЙКИ'
			,'thumbName'=>'1.jpg'
		),
		array(
			'id'=>7
			,'productId'=>14
			,'label'=>'ХУДОЖЕСТВЕННАЯ ОБРАБОТКА СТЕКЛА'
			,'thumbName'=>'1.jpg'
		),
		array(
			'id'=>8
			,'productId'=>15
			,'label'=>'НЕСТАНДАРТНЫЕ РЕШЕНИЯ'
			,'thumbName'=>'1.jpg'
		),
	);

	if (!empty($_GET['product'])) {
		foreach ($_GROUPS as $key=>$group) {
			if (isset($group['productId']) && $group['productId'] == $_GET['product']) {
				$_GROUPS[$key]['active'] = true;
			}
		}
	}









	$groups = array(
		array('id'=>1, 'label'=>'ПЕРЕГОРОДКИ', 'isSub'=>false),
		array('id'=>2, 'label'=>'ДВЕРИ', 'isSub'=>false),
		array('id'=>3, 'label'=>'ИЗДЕЛИЯ ИЗ СТЕКЛА', 'isSub'=>false),
		array('id'=>4, 'label'=>'ИЗДЕЛИЯ ИЗ СТЕКЛА И СТАЛИ', 'isSub'=>false),
		array('id'=>5, 'label'=>'ИЗДЕЛИЯ ИЗ ДЕРЕВА', 'isSub'=>false),
		array('id'=>6, 'label'=>'ХУДОЖЕСТВЕННАЯ ОБРАБОТКА СТЕКЛА', 'isSub'=>false),
	);

	$_MENU = array(
		array('group'=>1,'label'=>'Алюминиевые', 'productId'=>1),
		array('group'=>1,'label'=>'Цельностеклянные (безрамные)', 'productId'=>2),
		array('group'=>1,'label'=>'Сантехнические', 'productId'=>3),
		array('group'=>1,'label'=>'Противопожарные', 'productId'=>4),
		
		array('group'=>2,'label'=>'Стеклянные распашные', 'productId'=>5),
		array('group'=>2,'label'=>'Глухие распашные', 'productId'=>6),
		array('group'=>2,'label'=>'Цельностеклянные распашные, маятниковые', 'productId'=>7),
		array('group'=>2,'label'=>'Цельностеклянные раздвижные', 'productId'=>7),
		array('group'=>2,'label'=>'Металлические', 'productId'=>8),
		array('group'=>2,'label'=>'Входные группы (теплые, холодные)', 'productId'=>9),
		
		array('group'=>3,'label'=>'Душевые кабины', 'productId'=>10),
		array('group'=>3,'label'=>'Кухонные фартуки (скинали)', 'productId'=>11),
		
		array('group'=>4,'label'=>'Стеклянные лестницы', 'productId'=>12),
		array('group'=>4,'label'=>'Лестничные ограждения и перила', 'productId'=>13),
		
		array('group'=>5,'label'=>'Декоративные навесные панели', 'productId'=>14),
		array('group'=>5,'label'=>'Стойки ресепшен', 'productId'=>15),
		
		array('group'=>6,'label'=>'Художественная обработка стекла', 'productId'=>16),
	);

	if (!empty($_GET['product'])) {
		foreach ($_MENU as $key=>$menuItem) {
			if ($menuItem['productId'] == $_GET['product']) {
				$_MENU[$key]['active'] = true;
			}
		}
	}

	$_PRODUCTS = array(
		array('id'=>1,'label'=>'АЛЮМИНИЕВЫЕ ПЕРЕГОРОДКИ','thumbName'=>'1.jpg','images'=>array('')),
		array('id'=>2,'label'=>'ЦЕЛЬНОСТЕКЛЯННЫЕ ПЕРЕГОРОДКИ','thumbName'=>'1.jpg','images'=>array('')),
		array('id'=>3,'label'=>'САНТЕХНИЧЕСКИЕ ПЕРЕГОРОДКИ','thumbName'=>'6.jpg','images'=>array('')),
		array('id'=>4,'label'=>'ПРОТИВОПОЖАРНЫЕ ПЕРЕГОРОДКИ','thumbName'=>'2.jpg','images'=>array('')),

		array('id'=>5,'label'=>'ДВЕРИ СТЕКЛЯННЫЕ','thumbUrl'=>'','images'=>array('')),
		array('id'=>6,'label'=>'ДВЕРИ ГЛУХИЕ','thumbUrl'=>'','images'=>array('')),
		array('id'=>7,'label'=>'ДВЕРИ ЦЕЛЬНОСТЕКЛЯННЫЕ','thumbUrl'=>'','images'=>array('')),
		array('id'=>8,'label'=>'ДВЕРИ МЕТАЛЛИЧЕСКИЕ','thumbUrl'=>'','images'=>array('')),
		array('id'=>9,'label'=>'ВХОДНЫЕ ГРУППЫ','thumbUrl'=>'','images'=>array('')),

		array('id'=>10,'label'=>'ДУШЕВЫЕ КАБИНЫ','thumbUrl'=>'','images'=>array('')),
		array('id'=>11,'label'=>'КУХОННЫЕ ФАРТУКИ (СКИНАЛИ)','thumbUrl'=>'','images'=>array('')),

		array('id'=>12,'label'=>'СТЕКЛЯННЫЕ ЛЕСТНИЦЫ','thumbUrl'=>'','images'=>array('')),
		array('id'=>13,'label'=>'ЛЕСТНИЧНЫЕ ОГРАЖДЕНИЯ И ПЕРИЛА','thumbUrl'=>'','images'=>array('')),

		array('id'=>14,'label'=>'ДЕКОРАТИВНЫЕ НАВЕСНЫЕ ПАНЕЛИ','thumbUrl'=>'','images'=>array('')),
		array('id'=>15,'label'=>'СТОЙКИ РЕСЕПШН','thumbUrl'=>'','images'=>array('')),

		array('id'=>16,'label'=>'ХУДОЖЕСТВЕННАЯ ОБРАБОТКА СТЕКЛА','thumbUrl'=>'','images'=>array('')),
	);

	function getProductById($productId){
		global $_PRODUCTS;
		foreach ($_PRODUCTS as $p) {
			if ($p['id'] == $productId) {
				return $p;
			}
		}
		return null;
	}

	function getMenuByGroupId($groupId){
		$menuArray = array();
		global $_MENU;
		foreach ($_MENU as $m) {
			if ($m['group'] == $groupId) {
				$menuArray[] = $m;
			}
		}
		return $menuArray;
	}
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