<?php if($page->template() != 'search'): ?>
<section class="container search-bar search-bar__drop-down" style="display: none;">
	<div class="block">
		<h1>Search:</h1>
		<form action="<?= $pages->find('search')->url() ?>">
			<input type="search" name="q" placeholder="<?= $pages->find('search')->examplesearch()->html() ?>" value="" autocomplete="off">
			<input type="submit" value="Search">
		</form>
	</div>
</section>
<?php endif ?>