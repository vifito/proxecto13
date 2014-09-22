<?php
/**
 * @file
 * Callbacks para páxina execución do cron.
 */

/**
 * Renderizar plantilla para a páxina cron.
 *
 * @return string
 *   Contido HTML coa plantilla da páxina cron.
 */
function proxecto13_cron_callback() {
  // Executar o cron.
  $result = drupal_cron_run();
  $cron_last = variable_get('cron_last');

  // Detectar se a petición ben por Ajax.
  if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
           ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')) {

    // Datos para enviar en formato json.
    $data = array(
      'success'   => $result,
      'cron_last' => date('d/m/Y H:i:s', $cron_last),
    );

    // Renderizar JSON.
    drupal_json_output($data);
  }
  else {
    // Renderizar una páxina completa.
    return theme(
      'proxecto13-cron',
       array(
         'success'   => $result,
         'cron_last' => date('d/m/Y H:i:s', $cron_last),
       )
    );
  }
}
