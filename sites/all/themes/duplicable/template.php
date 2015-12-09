<?php
function duplicable_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

$conf['admin_menu_cache_client'] = FALSE;

function duplicable_bootstrap_search_form_wrapper($variables) {
  $output = '<div class="input-group">';
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';
  $output .= '<button class="btn btn-alert" type="submit"><i class="visible-sm visible-xs fa fa-search"></i><span class="visible-lg visible-md">Rechercher</span></button>';
  $output .= '</span>';
  $output .= '</div>';
  return $output;
}
/**
 * Implements hook_wysiwyg_editor_settings_alter().
 */
function ckeditor_settings_alter(&$settings, $context) {
  if ($context['profile']->editor == 'ckeditor') {
    $settings['allowedContent'] = TRUE;
  }
}
/*
if ($form_id == 'views_exposed_form') {
$form['field_district']['#type'] = 'checkbox';
}
*/
?>

