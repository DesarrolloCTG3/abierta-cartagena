<?php
/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="pi-padding-bottom-40">
  <!-- Team member -->
    <div class="pi-img-w pi-img-round-corners pi-img-shadow">
      <?php print $fields['field_image']->content; ?>
      <div class="pi-img-overlay pi-img-overlay-darker">
        <div class="pi-caption-centered">
          <div>
            <?php print $fields['field_social_links']->content; ?>
            <h3 class="h4 pi-weight-300"><?php print $fields['title']->content; ?></h3>
            <ul class="pi-caption-links pi-margin-bottom-10">
              <li><?php print $fields['field_position']->content; ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <!-- End team member -->
</div>