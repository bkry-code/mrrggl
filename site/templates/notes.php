<?php snippet('header') ?>
<?php snippet('headline') ?>

<section class="container">
	<div class="block">
		<?php foreach($page->children()->visible() as $p): ?>
			<div>
				<h2><a href="<?= $p->url() ?>"><?= $p->title() ?></a></h2>
				<p><?= $p->text()->excerpt() ?></p>
				<p><?= $p->parents() ?></p>
			</div>
		<?php endforeach ?>
	</div>
</section>

<section class="related"></section>

<?php snippet('footer') ?>