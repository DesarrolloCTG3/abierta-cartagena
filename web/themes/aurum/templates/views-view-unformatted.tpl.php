<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div<?php if (isset($classes_array[0]) && $classes_array[0]) { print ' class="' . $classes_array[0] .'"';  } ?>>
  <?php foreach ($rows as $id => $row): ?>
      <?php print $row; ?>
  <?php endforeach; ?>
</div>