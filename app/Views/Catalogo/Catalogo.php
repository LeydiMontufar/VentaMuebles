<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>
<h1>CATALOGO- <?php /*echo $nombreDelAlmacen */?></h1>

<form method="POST" action="<?php echo base_url() . '/Secciones/crear' ?>">
    
    <div class="row">
        <div class="col-6">

        </div>
    </div>
</form>


<?= $this->endSection() ?>