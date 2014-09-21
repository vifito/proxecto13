<?php
/**
 * @file
 * Callbacks para as páxinas HTTP 40X.
 */

/**
 * Renderizar plantilla para a páxina 403.
 *
 * @return string
 *   Contido HTML coa plantilla da páxina 404.
 */
function proxecto13_404_callback() {
  return theme(
    'proxecto13-404',
    array()
  );
}

/**
 * Renderizar plantilla para a páxina 403.
 *
 * @return string
 *   Contido HTML coa plantilla da páxina 403.
 */
function proxecto13_403_callback() {
  return theme(
    'proxecto13-403',
    array()
  );
}
