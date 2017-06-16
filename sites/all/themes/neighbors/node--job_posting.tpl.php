
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
    ?>

  <div class="content"<?php print $content_attributes; ?>>
    <a href="apply-now" class="apply-now" title="Apply Now">Apply Now</a>
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h2 class="page-title"><?php print $title; ?></h2><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($content); ?>
  </div>

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>


  </article> <!-- /.node -->

