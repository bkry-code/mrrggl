<?php if($page->template() != 'search' && $page->template() != 'error'): ?>
<section class="container search-bar search-bar__drop-down" style="display: none;">
	<div class="block">
		<div class="row">
			<h1>Search:</h1>
			<form action="<?= $pages->find('search')->url() ?>">
				<input type="search" name="q" placeholder="<?= $pages->find('search')->examplesearch()->html() ?>" value="" autocomplete="off">
				<input type="submit" value="Search">
			</form>
		</div>
	</div>
</section>
<?php endif ?>