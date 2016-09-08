<?php snippet('header') ?>

<section class="container search-bar" id="page__search-bar">
	<div class="block">
		<div class="row">
			<h1>Search:</h1>
			<form action="<?= $pages->find('search')->url() ?>">
				<input type="search" name="q" placeholder="<?= $pages->find('search')->examplesearch()->html() ?>" value="<?php echo esc($query) ?>" autocomplete="off">
				<?php if($results->count() == null): ?>
					<span class="search-error">Nothing found. Please try something else.</span>
				<?php endif ?>
				<input type="submit" value="Search">
			</form>
		</div>
	</div>
</section>

<section class="container" id="search-results">
	<div class="block">
		<ul>
			<?php foreach($results as $result): ?>
			<li>
				<a href="<?php echo $result->url() ?>">
					<?php echo $result->title()->html() ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</section>

<?php snippet('footer') ?>