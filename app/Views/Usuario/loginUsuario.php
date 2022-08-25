<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>
<h1>LOGIN- <?php /*echo $nombreDelAlmacen */?></h1>

<form method="POST" action="<?php echo base_url() . '/Secciones/crear' ?>">
    
    <div class="row">
        <div class="col-6">
            
           
            <div>
                <label for="nombreSeccion">correo</label>
                <input type="text" name="nombreSeccion" id="nombreSeccion" class="form-control">
            </div><br>
            <div>
                <label for="descripcion">contraseña</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div><br>
            <div class="col-md-8">
						<label for="id_seccion"><strong>Seccion</strong></label>
						<select class="form-control" id="id_seccion" name="id_seccion">
						
						<option value="cliente">cliente</option>
                        <option value="administrador">adminitrador</option>
                    
                		</select>
			</div>

            <div>
                <button class="btn btn-warning">RECUPERAR</button>
            </div><br>
        </div>
    </div>
</form>


<?= $this->endSection() ?>