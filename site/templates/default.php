<?php snippet('header') ?>

<section class="container default-page">
	<div class="block default-page__block">
		<header class="default-page__header">
			<h1><?= $page->title() ?></h1>
		</header>
		<article class="default-page__article">
			<?= $page->text()->kirbytext() ?>
		</article>
	</div>
</section>

<section class="related"></section>

<?php snippet('footer') ?>