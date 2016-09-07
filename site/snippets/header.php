<!DOCTYPE html>
<!--#if expr="$HTTP_COOKIE=/fonts-loaded=true/" -->
<html lang="en" class="fonts-loaded">
<!--#else -->
<html lang="en">
<!--#endif -->
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">

	<title><?php e($page->isHomePage(), $site->title()->html(), $page->title()->html()) ?></title>
	<meta name="description" content="<?php e($page->description() != '', $page->description()->html(), $site->description()->html()) ?>">
	<meta name="keywords" content="<?php e($page->keywords() != '', $page->keywords()->html(), $site->keywords()->html()) ?>">
	<meta name="author" content="<?php e($page->author() != '', $page->author()->html(), $site->author()->html()) ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?= js('assets/js/lib/fontfaceobserver.min.js') ?>
	<?= js('assets/js/lib/jquery.lazyload.js') ?>
	<?= js('assets/js/main.js') ?>

	<?php snippet('scss') ?>

	<!--[if lte IE 9]>
		<script src="<?= js('assets/js/lib/fix/html5shiv-printshiv.min.js') ?>"></script>
		<script src="<?= js('assets/js/lib/fix/respond.min.js') ?>"></script>
		<script src="<?= js('assets/js/lib/fix/placeholders.min.js') ?>"></script>
	<![endif]-->

</head>
<body>

<section class="head">
	<?php snippet('head/nav') ?>
	<?php snippet('head/search') ?>
	<?php snippet('head/lead') ?>
</section>