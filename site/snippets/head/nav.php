<header id="nav" class="container">
	<div class="block">
		<div class="row">
			<div class="navigation">
				<h2 class="logo">
					<a class="logo__link" href="<?= $site->url() ?>" title="Home"><?= $site->logo() ?></a>
				</h2>
				<nav class="navigation__nav <?php e($page->depth() >= 2, 'breadcrumb-enabled', 'breadcrumb-disabled') ?>">
					<ul class="navigation__list invisible closed">
						<li class="navigation__mobile-search">
							<form action="" method="post">
								<div>
									<input autocomplete="off" name="searchterm" type="text" placeholder="Search">
									<input type="hidden" name="language" value="en-US">
								</div>
								<div>
									<input type="submit" value="Search">
								</div>
							</form>
						</li>
						<?php foreach($pages->visible() as $p): ?>
							<li>
								<a <?php if($page->depth() <= 1): e($p->isOpen(), ' class="active"'); endif ?> href="<?= $p->url() ?>"><?= $p->title()->html() ?></a>
							</li>
						<?php endforeach ?>
					</ul>
					<?php if($page->depth() >= 2): ?>
						<ul class="navigation__breadcrumb">
							<?php foreach($site->breadcrumb() as $crumb): ?>
								<?php if($crumb->intendedTemplate() != 'home'): ?>
									<li>
										<a<?php e($crumb->url() == $page->url(), ' class="active"') ?> href="<?php echo $crumb->url() ?>">
											<?php echo html($crumb->title()) ?>
										</a>
									</li>
								<?php endif ?>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
				</nav>
			</div>
			<aside class="interact__nav">
				<ul>
					<li class="interact__toggle">
						<a href="#" class="nav-toggle">Menu</a>
					</li>
					<li class="interact__search">
						<a href="/search/" disabled="disabled">
							<span class="inactive">Search</span>
							<span class="active" style="display: none;">Close Search</span>
						</a>
					</li>
				</ul>
			</aside>
		</div>
	</div>
</header>