<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <?php
    $title_1 = $view->field['title_1']->original_value;
    $period_start = $view->field['period_start']->original_value;
    $period_end = $view->field['period_end']->original_value;
    $tour_distance =$view->field['tour_distance']->original_value;
    $edit_list = $view->field['edit_list']->original_value;
    $description = $view->field['description']->original_value;
    $fid = $view->field['fid']->original_value;
    ?>
    <div class="view-header">
<!--      --><?php //print $header; ?>
      <h4>Meine Tour: <?php print $title_1 ?> | <?php print $period_start ?> - <?php print $period_end ?> | <span id="tour_distance"><?php print $tour_distance ?></span> M</h4>
      <a href="/de/user/touren">Meine Touren auflisten</a> | <?php print $edit_list ?>
      <p><?php print $description ?></p>
      <div class="hidden-fields" style="display:none"><input id="tour_id" value="<?php print $fid ?>" /></div>

    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <div class="row">
        <?php print $rows; ?>
      </div>
      <div class="row">
        <h4> Übersichtskarte </h4>
        <div style="width:100%;height:500px;" id="fh-touren-detail-map" ></div>
      </div>

    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>
