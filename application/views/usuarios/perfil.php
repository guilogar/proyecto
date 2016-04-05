<?php template_set('title', 'Perfil de Usuario') ?>

<div class="row fila_especia">
    <div class="row large-6 large-centered columns menu-login">
        <?php if ( ! empty(error_array())): ?>
            <div data-alert class="alert-box alert radius alerta">
              <?= validation_errors() ?>
              <a href="#" class="close">&times;</a>
            </div>
        <?php endif ?>
    </div>
    <div class="large-4 columns" style="border: 1px solid black">
        <?php foreach ($articulos_usuarios as $v): ?>
            <div class="">
                <?= anchor('/articulos/buscar/' . $v['id'], img('/imagenes_articulos/' . $v['id'] . '.jpg')) ?>
            </div>
            <div class="">
                <?= $v['precio'] ?>
            </div>
            <div class="">
                <?= anchor('/articulos/buscar/' . $v['id'], $v['nombre']) ?>
            </div>
            <div class="">
                <?= anchor('/frontend/portada/buscar_por_categoria/' . $v['nombre_categoria'], $v['nombre_categoria']) ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="large-4 columns">
        <h3>Datos del usuario</h3>
        <div class="">
            <p>Nick => <?= $usuario['nick'] ?></p>
            <p>Email => <?= $usuario['email'] ?></p>
            <p>Numero de compras =></p>
            <p>Valoraciones =></p>
        </div>
    </div>
    <div class="large-4 columns">
        Geolocalizacion
    </div>
</div>