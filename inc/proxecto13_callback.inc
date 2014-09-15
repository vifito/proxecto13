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

  // Xerar etiqueta imaxe
  if(empty($user->picture)) {
    // Se non se estableceu empregar gravatar
    $picture = 'http://www.gravatar.com/avatar/' . md5(trim($user->mail)); 
  } else {
    // Imaxe gardada do perfil do usuario
    $picture = image_style_url('thumbnail', $user->picture->uri);
  }

  $out =<<<HTML
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 panel panel-default">
        <h2>Datos de Acceso</h2>
        <table class="table table-hover">
          <tr>
            <th>Nome de usuario</th>
            <td>{$user->name}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{$user->mail}</td>
          </tr>
          <tr>
            <th>Ultimo acceso</th>
            <td>$acceso</td>
          </tr>
        </table>
  
        <div>
            <img src="{$picture}" class="img-thumbnail" />
        </div>
      </div>

      <div class="col-md-6">
        <h2>Datos Perfil</h2>

        <table>
            <tr>
                <th>Localidade</th>
                <td></td>
            </tr>
            <tr>
                <th>Enderezo</th>
                <td></td>
            </tr>
            <tr>
                <th>Idade</th>
                <td></td>
            </tr>
            <tr>
                <th>Teléfono Móbil</th>
                <td></td>
            </tr>
        </table>
        
        <div>
            <a class="btn btn-primary" href="">Modificar Perfil</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h2>Datos Entorno</h2>

        
      </div>
    </div>
  </div>
HTML;

  return $out;
} 
