  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>

  <header id="header" role="banner" class="clearfix">
    <div class="container clearfix">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <button class="menu_trigger" type="button">Open the menu</button>

      <?php print render($page['top_links']); ?>

      <?php if ($main_menu || !empty($page['navigation'])): ?>
        <nav id="navigation" role="navigation">
          <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
          <?php if (empty($page['navigation'])): ?>
  		  <?php print theme('links__system_main_menu', array(
              'links' => $main_menu,
              'attributes' => array(
                'id' => 'main-menu',
                'class' => array('links', 'clearfix'),
              ),
              'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          <?php endif; ?>
        </nav> <!-- /#navigation -->
      <?php endif; ?>
    </div> <!-- /.container -->
  </header> <!-- /#header -->

  <?php if(drupal_is_front_page()) : ?>
  <section id="featured-home" class="clearfix">
    <div class="container clearfix">
      <?php print render($page['homepage_featured']) ?>
    </div> <!-- /.container -->
  </section> <!-- /featured-home -->
  <?php endif; ?>

  <section id="main" role="main" class="clearfix">
    <div class="container clearfix">

      <?php if (!isset($node)) { ?>
         <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="page-title listing"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
      <?php } ?>
     
      <?php print $messages; ?>
      <a id="main-content"></a>
      <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div> <!-- /.container -->
  </section> <!-- /#main -->

  <section id="featured-services" class="clearfix">
    <div class="container clearfix">
      <?php print render($page['featured_services']); ?>
    </div> <!-- /.container -->
  </section> <!-- /#main -->

  <footer id="footer" role="contentinfo" class="clearfix">
    <div class="container clearfix">
      <?php print render($page['footer_left']) ?>
      <?php print render($page['footer_right']) ?>
    </div> <!-- /.container -->
  </footer> <!-- /#footer -->

