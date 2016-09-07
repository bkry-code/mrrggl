<?php snippet('header') ?>





<section class="container" id="projects">
	<div class="block masonry__filter">
		<?php $tags = $page->children()->pluck('category', ',', true); ?>
		<ul>
			<li id="filter-reset" class="filter-class active-filter"><a id="all" href="#">All</a></li>
			<?php foreach($tags as $tag): ?>
				<li class="filter-class">
					<a id="<?= preg_replace('/ /', '-', $tag); ?>" href="#"><?= titlecase($tag) ?></a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="block">
		<?= $page->text()->kirbytext() ?>
	</div>
	<div class="block masonry__block">
		<?php foreach($pages->find('projects')->children()->visible() as $project): ?>
		<article class="masonry__item <?= preg_replace('/ /', '-', $project->category()); ?>">
			<a href="<?= $project->url() ?>">
				<header>
					<h1><?= $project->title() ?></h1>
				</header>
				<figure>
					<img class="lazy" width="400" height="500" data-src="<?= $project->url(); echo '/' . $project->thumbnail() ?>" alt="<?= $project->title() ?>" />
				</figure>
			</a>
		</article>
		<?php endforeach ?>
	</div>
</section>

<section class="related"></section>

<?php snippet('footer') ?>