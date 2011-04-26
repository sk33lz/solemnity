<?php
// $Id: page.tpl.php $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
 
<body>

	<div id="wrapper1">
	  <div id="wrapper2">
		  <div id="header">			
			  <?php if ($logo) : ?>
          <a class='site-logo' href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
        <?php endif; ?>
        <?php if ($site_name) : ?>
          <div class='site-name'><h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print($site_name) ?></a></h1></div>
        <?php endif;?>
        <?php if ($site_slogan) : ?>
          <div class='site-slogan'><h2 class='site-slogan'><?php print($site_slogan) ?></h2></div>
        <?php endif;?>
		      
		      <div id="nav">
		    <?php if ($primary_links): ?>
            <div id="primary-menu">
            <?php print $primary_links_tree; ?>
            </div><!-- /primary links menu -->
        <?php endif; ?>
	        </div>
			</div>

			<div id="container">
			  <?php if ($mission): print '<p class="description">'. $mission .'</p>'; 
				endif; ?>
			  
			  <div id="sidebar">
			    <?php if ($right): ?>
            <?php print $right ?>
          <?php endif; ?>	
	      </div>
	      			
				<div id="content">
					
							<div id="subnav">
		    <?php if ($secondary_links): ?>
            <?php print $secondary_links_tree; ?>
        <?php endif; ?>
	        </div>
					
					<?php print $breadcrumb; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>
          
            <?php print $content ?>
          
            <?php print $feed_icons ?>	
			  </div>  	
			</div>
			
			</div>
	</div>
<div id="footer"> 
  <p><?php print $footer_message . $footer ?><br />
   Drupal 6 Theme by <a href="http://arborwebdevelopment.com">Arbor Web Development</a> | Template design by <a href="http://www.sixshootermedia.com">Six Shooter Media</a>.
  </p>
					
					</div>
<?php print $closure ?>
</body>
</html>