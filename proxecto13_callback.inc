<?php
/**
 * @file
 */

function proxecto13_callback() {
  global $user;

  // Necesario cargar usuario para ter datos de $user->picture->uri
  $user = user_load($user->uid);

  // Formatear data de acceso
  $acceso = date('d-m-Y H:i:s', $user->access);

  // Xerar src da imaxe do perfil
  if(empty($user->picture)) {
    // Se non se estableceu empregar gravatar
    $picture = 'http://www.gravatar.com/avatar/' . md5(trim($user->mail)); 
  } else {
    // Imaxe gardada do perfil do usuario
    $picture = image_style_url('thumbnail', $user->picture->uri);
  }

  $enderezo = '';
  if(isset($user->field_enderezo) && isset($user->field_enderezo['und'])) {
    $enderezo   = $user->field_enderezo['und'][0]['value'];
  }

  $localidade = '';
  if(isset($user->field_localidade) && isset($user->field_localidade['und'])) {
    $localidade = $user->field_localidade['und'][0]['value'];
  }

  $idade = '';
  if(isset($user->field_idade) && isset($user->field_idade['und'])) {
    $idade = $user->field_idade['und'][0]['value'];
  }

  $mobil = '';
  if(isset($user->field_mobil) && isset($user->field_mobil['und'])) {
    $mobil = $user->field_mobil['und'][0]['value'];
  }

  $site_name   = variable_get('site_name', '');
  $site_slogan = variable_get('site_slogan', NULL);

  $install_profile = variable_get('install_profile', '');
  $cron_last = variable_get('cron_last', '');
  $cron_key  = variable_get('cron_key', '');
  $site_404  = variable_get('site_404', NULL);
  $site_403  = variable_get('site_403', NULL);


  // Usuario admin:  uid == 1
  $admin = user_load(1);

  return theme(
    'proxecto13',
    array(
      'user'       => $user,
      'acceso'     => $acceso,
      'picture'    => $picture,

      'localidade' => $localidade,
      'enderezo'   => $enderezo,
      'idade'      => $idade,
      'mobil'      => $mobil,

      'site_name'   => $site_name,
      'site_slogan' => $site_slogan,

      'admin' => $admin,
      'install_profile' => $install_profile,
      'cron_last' => $cron_last,
      'cron_key' => $cron_key,
      'site_404' => $site_404,
      'site_403' => $site_403,

    )
  );
} 
