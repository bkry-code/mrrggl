<header class="container navigation">
	<!-- main-nav -->
	<div class="block main-nav">
		<div class="row">
			<nav class="main-nav__list <?php e($page->depth() >= 2, 'main-nav__list--breadcrumb-enabled') ?>">
				<ul>
					<li class="main-nav__logo"><a href="<?= $site->url() ?>"><?= $site->logo() ?></a></li>
					<ul class="main-nav__primary <?php e($page->depth() >= 2, 'hidden') ?>">
						<?php foreach($pages->visible() as $p): ?>
							<li><a <?php if($page->depth() <= 1): e($p->isOpen(), ' class="active"'); endif ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a></li>
						<?php endforeach ?>
					</ul>
					<?php if($page->depth() >= 2): ?>
						<ul class="main-nav__breadcrumb">
							<?php foreach($site->breadcrumb() as $crumb): ?>
								<?php if($crumb->intendedTemplate() != 'home'): ?>
									<li><a<?php e($crumb->url() == $page->url(), ' class="active"') ?> href="<?php echo $crumb->url() ?>"><?php echo html($crumb->title()) ?></a></li>
								<?php endif ?>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
				</ul>
			</nav>
			<aside class="main-nav__toggle">
				<ul>
					<li class="main-nav__toggle__mobile-nav"><a href="#">Menu</a></li>
					<?php if($page->template() != 'search'): ?>
						<li class="main-nav__toggle__search-bar"><a href="<?= $pages->find('search')->url() ?>"><span class="closed">Close </span>Search</a></li>
					<?php else: ?>
						<li class="main-nav__toggle__search-bar"><strong>Search</strong></li>
					<?php endif ?>
				</ul>
			</aside>
		</div>
	</div>
	<!-- end main-nav -->
	<!-- mobile-nav -->
	<div class="block mobile-nav closed">
		<nav class="mobile-nav__list">
			<ul>
				<li>
					<form action="<?= $pages->find('search')->url() ?>">
						<input type="search" name="q" value="" autocomplete="off">
						<input type="submit" value="Search">
					</form>
				</li>
				<?php foreach($pages->visible() as $p): ?>
					<li><a <?php if($page->depth() <= 1): e($p->isOpen(), ' class="active"'); endif ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a></li>
				<?php endforeach ?>
			</ul>
		</nav>
	</div>
	<!-- end mobile-nav -->
</header>