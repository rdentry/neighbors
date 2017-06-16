
  <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_subtitle']);
      hide($content['field_image']);
    ?>
  <div class="project-content"<?php print $content_attributes; ?>>
    <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
    
    <?php if (!empty($content['field_subtitle'])): ?>
      <h2><span>Project:</span> <?php print $content['field_subtitle'][0]['#markup']; ?></h2>
    <?php endif; ?>
    <?php print render($content);
    ?>
  </div>

