<?php snippet('header') ?>

<section class="container search-bar" id="page__search-bar">
	<div class="block">
		<form action="<?= $pages->find('search')->url() ?>">
			<input type="search" name="q" value="<?php echo esc($query) ?>">
			<?php if($results->count() == null): ?>
				<div id="search-error"><p>Nothing found for <?php echo esc($query) ?>. Please try something else.</p></div>
			<?php endif ?>
			<input type="submit" value="Search">
		</form>
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