<?php
/**
 * @file
 *
 */

function proxecto13_install() {
  // Establecer a páxina principal ao valor da páxina do proxecto13
  variable_set('site_frontpage', 'proxecto13');

  watchdog('proxecto13', t('Estableceuse a páxina proxecto13 como site_frontpage.'));
}

function proxecto13_uninstall() {
  variable_set('site_frontpage', 'node');

  watchdog('proxecto13', t('Restableceuse a páxina site_frontpage ao valor node.'));
}