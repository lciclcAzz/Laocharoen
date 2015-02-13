<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <!-- Created by Artisteer v4.1.0.59861 -->
    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
</head>
<body>

<div id="idx-main">
<header class="idx-header"><?php echo $view->position('position-30', 'idx-nostyle'); ?>


    <div class="idx-shapes">

            </div>




                
                    
</header>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="idx-nav">
    <div class="idx-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="idx-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="idx-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>
<div class="idx-sheet clearfix">
            <?php echo $view->position('position-15', 'idx-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'idx-block'); ?>
<div class="idx-layout-wrapper">
                <div class="idx-content-layout">
                    <div class="idx-content-layout-row">
                        <div class="idx-layout-cell idx-content">
<?php
  echo $view->position('position-19', 'idx-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'idx-article');
  echo $view->position('position-12', 'idx-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' idx-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'idx-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'idx-article');
  echo $view->position('position-25', 'idx-nostyle');
?>





                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'idx-block'); ?>
<?php echo $view->position('position-26', 'idx-nostyle'); ?>


    </div>
<footer class="idx-footer">
  <div class="idx-footer-inner">
<?php if ($view->containsModules('position-27')) : ?>
    <?php echo $view->position('position-27', 'idx-nostyle'); ?>
<?php else: ?>
<div class="idx-content-layout">
    <div class="idx-content-layout-row">
    <div class="idx-layout-cell" style="width: 67%">
        <p><br></p>
    </div><div class="idx-layout-cell layout-item-0" style="width: 33%">
        <p style="text-align: right;"><img width="100" height="108" alt="" class="idx-lightbox" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/HondaLCR_Logo_small.png"><br></p>
        <p style="text-align: right;">Copyright © 2015-2016. All Rights Reserved.<br></p><p style="text-align: right;">Honda Laocharoen Yasothon.</p>
    </div>
    </div>
</div>
<div class="idx-content-layout">
    <div class="idx-content-layout-row">
    <div class="idx-layout-cell" style="width: 100%">
        <p style="text-align: right;">
         <font color="#2062A0">@lciclcAzz</font>
         <a href="#"><img width="32" height="32" alt="" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/rss-017.png" class="">
        </a> 
         <a href="#"><img width="32" height="32" alt="" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/facebook-11.png" class="">
        </a> 
         <a href="#"><img width="32" height="32" alt="" src="<?php echo $document->baseurl ?>/templates/<?php echo $document->template; ?>/images/twitter-09.png" class="">
        </a> 
        </p>
    </div>
    </div>
</div>

  <?php endif; ?>
</div>
</footer>

</div>



<?php echo $view->position('debug'); ?>
</body>
</html>