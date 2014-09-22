<?php
/**
 * @file
 * Tema para a páxina de execución do cron.
 */
?>
<style type="text/css">
  @import '<?php echo $base_url . '/' . drupal_get_path('module', 'proxecto13') . '/files/proxecto13-pages.css' ?>'
</style>

<h2 class="proxecto13-page-title">
  <?php echo t('Última execución do cron') ?>
  <?php echo $cron_last ?>
</h2>

<div class="proxecto13-cron">
  <img src="<?php echo $base_url . '/' . drupal_get_path('module', 'proxecto13') . '/files/cron.jpg' ?>"
       alt=""/>
</div>
