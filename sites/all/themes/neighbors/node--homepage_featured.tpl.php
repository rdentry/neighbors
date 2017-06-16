
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_banner_image']);
    ?>

  <?php if (!empty($content['field_banner_image'])): ?>
    <div class="page-image">
      <div class="featured-home-gradient"></div>
      <?php print render($content['field_banner_image']); ?>
    </div>
  <?php endif; ?>

  <div class="content <?php if (!empty($content['field_banner_image'])): ?>with-image<?php endif; ?>"<?php print $content_attributes; ?>>
    <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php print render($content); ?>
  </div>

  <?php print render($content['comments']); ?>


  </article> <!-- /.node -->

