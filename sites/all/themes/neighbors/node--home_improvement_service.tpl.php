  <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_banner_image']);
      hide($content['field_featured_service_thumb']);
      hide($content['field_image']);
    ?>

<?php if ($teaser) { ?>
  <div class="services-teaser">
    <div class="thumb-image">
      <?php print render($content['field_featured_service_thumb']); ?>
    </div>
    <div class="services-icon-link"><a href="<?php print $node_url; ?>"><span>Read More</span></a></div>
    <div class="service-teaser-copy"<?php print $content_attributes; ?>>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h2><?php print $title; ?></h2><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($content); ?>   
      <a href="<?php print $node_url; ?>" class="read-more">Read More &gt;&gt;</a>
    </div>
  </div>
<?php } else { ?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if (!empty($content['field_banner_image'])): ?>
    <div class="banner-image">
      <?php print render($content['field_banner_image']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_image'])): ?>
    <div class="services-image">
      <?php print render($content['field_image']); ?>
    </div>
  <?php endif; ?>

  <div class="service-copy <?php if (!empty($content['field_image'])): ?>with-service-image<?php endif; ?>"<?php print $content_attributes; ?>>
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h2><?php print $title; ?></h2><?php endif; ?>
      <?php print render($title_suffix); ?>
      <div class="service-link"><a href="#" class="cta" title="">Get A Free Quote</a></div>
      <?php print render($content); ?>   
  </div>
  <a class="scroll-top-arrow" href="#top" id="top-link"><span>Top of Page</span></a>
</article> <!-- /.node -->
<?php } ?>

