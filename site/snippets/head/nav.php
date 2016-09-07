<header id="nav" class="container">
	<div class="block" id="desktop-nav">
		<div class="row">
			<div class="navigation" role="navigation">
				<h2 class="logo">
					<a class="logo__link" href="<?= $site->url() ?>" title="Home"><?= $site->logo() ?></a>
				</h2>
				<nav class="navigation__nav <?php e($page->depth() >= 2, 'breadcrumb-enabled', 'breadcrumb-disabled') ?>">
					<?php if($page->depth() >= 2): ?>
						<ul class="navigation__breadcrumb">
							<?php foreach($site->breadcrumb() as $crumb): ?>
								<?php if($crumb->intendedTemplate() != 'home'): ?>
									<li>
										<a<?php e($crumb->url() == $page->url(), ' class="active-menu-item"') ?> href="<?php echo $crumb->url() ?>">
											<?php echo html($crumb->title()) ?>
										</a>
									</li>
								<?php endif ?>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
					<ul class="navigation__list invisible closed">
						<?php foreach($pages->visible() as $p): ?>
							<li>
								<a <?php if($page->depth() <= 1): e($p->isOpen(), ' class="active-menu-item"'); endif ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>
							</li>
						<?php endforeach ?>
					</ul>
				</nav>
			</div>
			<aside class="interact__nav">
				<ul>
					<li class="interact__toggle">
						<a href="#" class="nav-toggle">Menu</a>
					</li>
					<?php if($page->template() != 'search'): ?>
						<li class="interact__search">
							<a href="<?= $pages->find('search')->url() ?>"><span class="inactive">Close</span> Search</a>
						</li>
					<?php else: ?>
						<li class="interact__search-disabled">
							<span>Search</span>
						</li>
					<?php endif ?>
				</ul>
			</aside>
		</div>
	</div>
	<ul class="navigation__mobile closed">
		<li class="mobile-search">
			<form action="<?= $pages->find('search')->url() ?>">
				<input type="search" name="q" value="">
				<input type="submit" value="Search">
			</form>
		</li>
		<?php foreach($pages->visible() as $p): ?>
			<li>
				<a <?php if($page->depth() <= 1): e($p->isOpen(), ' class="active"'); endif ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>
			</li>
		<?php endforeach ?>
	</ul>
</header>


