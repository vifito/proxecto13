<?php
/**
 * @file
 * Plantilla para o proxecto13.
 *
 */
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

          <table>
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
              <a class="btn btn-primary" href="<?php echo $GLOBALS['base_url'] . '/user/' . $user->uid . '/edit' ?>">
                  <?php echo t('Modificar Perfil') ?>
              </a>
          </div>
        </div>
        <!-- }}} -->

      </div>
    </div>

    <div class="col-md-6">
      <h2><?php echo t('Datos Entorno') ?></h2>
      <div>

        <h3><?php echo $site_name ?></h3>

        <h4><?php echo $site_slogan ?: 'slogan sen definir' ?></h4>

        <a class="btn btn-primary" href="#">Modificar Entorno</a>
        <a class="btn btn-primary" href="#">Modificar Usuario</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h2><?php echo t('Descrición do sistema') ?></h2>

      <table class="table table-hover">
        <tr>
          <th><?php echo t('URL do Sitio') ?></th>
          <td><?php echo $GLOBALS['base_url'] ?></td>
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
            <?php echo date('d/m/Y H:i:s', $cron_last) ?>
            <a class="btn btn-primary" href="<?php echo $GLOBALS['base_url'] . '/cron.php?cron_key=' .
  $cron_key ?>">Executa</a>
          </td>
        </tr>
        <tr>
          <th><?php echo t('Perfil Instalado') ?></th>
          <td><?php echo $install_profile ?></td>
        </tr>
        <tr>
          <th><?php echo t('Páxina 404') ?></th>
          <td><?php echo $site_404 ?: 'sen definir' ?></td>
        </tr>
        <tr>
          <th><?php echo t('Páxina 403') ?></th>
          <td><?php echo $site_403 ?: 'sen definir' ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>