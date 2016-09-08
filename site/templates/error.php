<?php snippet('header') ?>

<section class="container search-bar" id="page__search-bar">
	<div class="block">
		<div class="row">
			<h1>404. The page doesn’t exist.</h1>
			<form action="<?= $pages->find('search')->url() ?>">
				<input type="search" name="q" placeholder="<?= $pages->find('search')->examplesearch()->html() ?>" value="" autocomplete="off">
				<input type="submit" value="Search">
			</form>
		</div>
	</div>
</section>

<?php snippet('footer') ?>