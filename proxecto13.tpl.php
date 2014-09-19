<?php
/**
 * @file
 * Plantilla para o proxecto13.
 *
 */

//var_dump(get_defined_vars());die();
firep(get_defined_vars());
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="row">

        <!-- Datos de acceso {{{ -->
        <div class="col-md-6">
          <h2>Datos de Acceso</h2>
          <table class="table table-hover">
            <tr>
              <th><?php echo t('Nome de usuario') ?></th>
              <td><?php echo $user->name ?></td>
            </tr>
            <tr>
              <th><?php echo t('Email') ?></th>
              <td><?php echo $user->mail ?></td>
            </tr>
            <tr>
              <th><?php echo t('Último acceso') ?></th>
              <td><?php echo $acceso ?></td>
            </tr>
          </table>

          <div>
            <img src="<?php echo $picture ?>" class="img-thumbnail" />
          </div>
        </div>
        <!-- }}} -->

        <!-- Datos Perfil {{{ -->
        <div class="col-md-6">
          <h2><?php echo t('Datos Perfil') ?></h2>

          <table class="table table-hover">
            <tr>
              <th><?php echo t('Localidade') ?></th>
              <td><?php echo $localidade ?></td>
            </tr>
            <tr>
              <th><?php echo t('Enderezo') ?></th>
              <td><?php echo $enderezo ?></td>
            </tr>
            <tr>
              <th><?php echo t('Idade') ?></th>
              <td><?php echo $idade ?></td>
            </tr>
            <tr>
              <th><?php echo t('Teléfono Móbil') ?></th>
              <td><?php echo $mobil ?></td>
            </tr>
          </table>

          <div>
            <a class="btn btn-primary" href="<?php echo $base_url . '/user/' . $user->uid . '/edit' ?>">
              <?php echo t('Modificar Perfil') ?>
            </a>
          </div>
        </div>
        <!-- }}} -->
      </div>
    </div>

    <div class="col-md-6">
      <h2><?php echo t('Datos Entorno') ?></h2>


      <table class="table table-hover">
        <tr>
          <th>Nome do sitio</th>
          <td><?php echo $site_name ?></td>
        </tr>
        <tr>
          <th>Slogan do sitio</th>
          <td><?php echo $site_slogan ?: '<em>slogan sen definir</em>' ?></td>
        </tr>
      </table>

      <div>
        <a class="btn btn-primary pull-left"
           href="<?php echo $base_url . '/proxecto13/contorno' ?>">Modificar
          Entorno</a>
        <a class="btn btn-primary pull-right"
           href="<?php echo $base_url . '/proxecto13/usuario'
           ?>">Engadir
          Usuario</a>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h2><?php echo t('Descrición do sistema') ?></h2>

      <table class="table table-hover">
        <tr>
          <th><?php echo t('URL do Sitio') ?></th>
          <td><?php echo $base_url ?></td>
        </tr>
        <tr>
          <th><?php echo t('Administrador do Sitio') ?></th>
          <td><?php echo $admin->name ?></td>
        </tr>
        <tr>
          <th><?php echo t('Email administrador do sitio') ?></th>
          <td><?php echo $admin->mail ?></td>
        </tr>
        <tr>
          <th><?php echo t('Estado SSL') ?></th>
          <td><?php echo isset($_SERVER['HTTPS'])? 'On': 'Off' ?></td>
        </tr>
        <tr>
          <th><?php echo t('Última execución do CRON') ?></th>
          <td>
            <span id="cron-last">
              <?php echo date('d/m/Y H:i:s', $cron_last) ?>
            </span>
            <a id="cron-button" class="btn btn-primary" 
               data-toggle="modal" data-target="#myModal" 
               href="<?php echo $base_url . '/cron.php?cron_key=' . $cron_key ?>">Executa</a>
          </td>
        </tr>
        <tr>
          <th><?php echo t('Perfil Instalado') ?></th>
          <td><?php echo $install_profile ?></td>
        </tr>
        <tr>
          <th><?php echo t('Páxina 404') ?></th>
          <td>
            <?php echo $site_404 ? '<a href="'. $base_url . '/' . $site_404 . '">' . $site_404 . '</a>':
                                   '<span class="text-muted">sen definir</span>' ?>
          </td>
        </tr>
        <tr>
          <th><?php echo t('Páxina 403') ?></th>
          <td>
            <?php echo $site_403 ? '<a href="'. $base_url . '/' . $site_403 . '">' . $site_403 . '</a>':
                                   '<span class="text-muted">sen definir</span>' ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Cron</h4>
      </div>
      <div class="modal-body">
        Cron en execución ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Pechar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery('a#cron-button').click(function(evt) {
    evt.preventDefault();
    evt.stopPropagation();

    jQuery('#myModal').modal('show'); 
    jQuery('span#cron-last').html('Executando cron...');

    jQuery.get('<?php echo $base_url . '/proxecto13/cron' ?>', function(data) {
      // TODO: mostrar mensaxe de erro
      jQuery('span#cron-last').html(data.cron_last);
      jQuery('#myModal .modal-body').html('Cron actualizado con data: ' + data.cron_last);      
    });

    return false;
  });
});
</script>
