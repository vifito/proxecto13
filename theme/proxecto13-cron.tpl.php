<?php
/**
 * @file
 * Tema para a páxina de erro 403 forbidden.
 */
?>
<style type="text/css">
  @import '<?php echo $base_url . '/' . drupal_get_path('module', 'proxecto13') . '/files/cron.css' ?>'
</style>
<div class="proxecto13-403">
  <?php echo t('Última execución do cron') ?>
  <?php echo $cron_last ?>
</div>
