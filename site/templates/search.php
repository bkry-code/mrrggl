<?php snippet('header') ?>

<section class="container" id="search">
	<div class="block">
		<form action="<?= $pages->find('search')->url() ?>">
			<input type="search" name="q" value="">
			<input type="submit" value="Search">
		</form>
	</div>
</section>

<ul>
  <?php foreach($results as $result): ?>
  <li>
    <a href="<?php echo $result->url() ?>">
      <?php echo $result->title()->html() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>