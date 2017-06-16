  
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
    ?>
  <?php if (!$teaser) { ?>
    <?php if (!empty($content['field_image'])): ?>
      <div class="page-image">
        <?php print render($content['field_image']); ?>
      </div>
    <?php endif; ?>
  <?php } ?>
  <div class="content <?php if (!empty($content['field_image'])): ?>with-image<?php endif; ?>"<?php print $content_attributes; ?>>
    <?php if ($teaser) { ?>
       <?php print render($title_prefix); ?>
      <?php if ($title): ?><h2 class="news-title"><?php print $title; ?></h2><?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php } else { ?>
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php } ?>
      <?php if ($teaser) { ?>
        <?php if (!empty($content['field_image'])): ?>
          <div class="page-image">
            <?php print render($content['field_image']); ?>
          </div>
        <?php endif; ?>
      <?php } ?>
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

