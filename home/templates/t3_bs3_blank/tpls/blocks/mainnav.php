<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?> 

<!-- MAIN NAVIGATION -->
<nav id="t3-mainnav" class="wrap navbar navbar-default navbar-fixed-top t3-mainnav">
	<div class="container">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div style="float:left"><img src="/home/images/Menu/LCR_Logo60x64.png"></div>
		<div class="navbar-header">
			<?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
				<?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
					<!--i class="fa fa-bars"></i-->
				</button>
			<?php endif ?>

			<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
				<?php $this->loadBlock ('off-canvas') ?>
			<?php endif ?>

		</div>

		<?php if ($this->getParam('navigation_collapse_enable')) : ?>
			<div class="t3-navbar-collapse navbar-collapse collapse"></div>
		<?php endif ?>


		<div class="t3-navbar navbar-collapse collapse">
			<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />

			<?php if ($this->countModules('head-search')) : ?>
			<!-- HEAD SEARCH -->
			<div class="head-search <?php $this->_c('head-search') ?>">
				<jdoc:include type="modules" name="<?php $this->_p('head-search') ?>" style="raw" />
			</div>
			<!-- //HEAD SEARCH -->
			<?php endif ?>

			<?php if ($this->countModules('languageswitcherload')) : ?>
				<!-- LANGUAGE SWITCHER -->
				<div class="languageswitcherload">
					<jdoc:include type="modules" name="<?php $this->_p('languageswitcherload') ?>" style="raw" />
				</div>
				<!-- //LANGUAGE SWITCHER -->
			<?php endif ?>	

		</div>
	</div>
</nav>
<!-- //MAIN NAVIGATION -->
