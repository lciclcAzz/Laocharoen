<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$slogan    = $this->params->get('slogan', '');
$logotype  = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', T3Path::getUrl('images/logo.png', '', true)) : '';
$logoimgsm = ($logotype == 'image' && $this->params->get('enable_logoimage_sm', 0)) ? $this->params->get('logoimage_sm', T3Path::getUrl('images/logo-sm.png', '', true)) : false;

if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

$logosize = 'col-sm-12';
if ($headright = $this->countModules('head-search or languageswitcherload')) {
	$logosize = 'col-sm-8';
}

?>

<!-- HEADER -->
<header id="t3-header" class="container t3-header">
	<div class="row">
		<!-- LOGO >
		<div class="col-xs-12 <?//php echo $logosize ?> logo">
			<div class="logo-<?//php echo $logotype, ($logoimgsm ? ' logo-control' : '') ?>">
				<a href="<?//php echo JURI::base(true) ?>" title="<?//php echo strip_tags($sitename) ?>">
					<?//php if($logotype == 'image'): ?>
						<img class="logo-img" src="<?//php echo JURI::base(true) . '/' . $logoimage ?>" alt="<?//php echo strip_tags($sitename) ?>" />
					<?//php endif ?>
					<?//php if($logoimgsm) : ?>
						<img class="logo-img-sm" src="<?//php echo JURI::base(true) . '/' . $logoimgsm ?>" alt="<?//php echo strip_tags($sitename) ?>" />
					<?//php endif ?>
					<span><?//php echo $sitename ?></span>
				</a>
				<small class="site-slogan"><?//php echo $slogan ?></small>
			</div>
		</div-->
		<!-- //LOGO -->

                
		<?php if ($headright): ?>
                            <jdoc:include type="modules" name="<?php $this->_p('header') ?>" />                              
		<?php endif ?>

	</div>
</header>
<!-- //HEADER -->
