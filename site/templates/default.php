<?php snippet('header') ?>

<section class="container default__page">
	<div class="block">
		<header class="default__header">
			<h1><?= $page->title() ?></h1>
		</header>
		<article class="default__article">
			<?= $page->text()->kirbytext() ?>
		</article>
	</div>
</section>

<section class="related"></section>

<?php snippet('footer') ?>