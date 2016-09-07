<section class="container search-bar" id="navigation__search-bar" style="display: none;">
	<div class="block">
		<form action="<?= $pages->find('search')->url() ?>">
			<input type="search" name="q" value="">
			<input type="submit" value="Search">
		</form>
	</div>
</section>