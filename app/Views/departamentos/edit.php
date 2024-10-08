<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<br>

<div class="container">

    <h4 class="centrado">Editar Departamento</h4>

    <br>
    <br>
    


    <form action="<?= base_url('departamentos/' . $id); ?>" method="POST" name="edit_form" autocomplete="off">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

        <div class="col-sm-2">
            <label for="codigo" class="col-sm-2 col-form-label" style="text-align: right">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo" value="<?= $departamento['codigo']; ?>">
        </div>
        
        <div class="col-sm-2">
            <label for="nombre" class="col-sm-2 col-form-label" style="text-align: right">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $departamento['nombre']; ?>" autofocus>
            <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
            </p>
        </div>

              

        <br>

        <div style="text-align: center">
            <button type="submit" class="btn btn-sm btn-outline-primary">Guardar</button>
            <a href="<?= base_url('departamentos') ?>"><button type="button" class="btn btn-sm btn-outline-danger">Cancelar</button></a>
        </div>

        <br>

    </form>


</div>


<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>