<?= $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>




<?= $this->include('cabecera'); ?> 


    <br>
    <div class="row">
        
        <div class="col-sm-4 centrado" style="margin-top: -120px">
            <div class="botones_menu">
              <a class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                Instructivos
              </a>
              <li class="nav-item" id="dropdown">
                <ul class="dropdown-menu">
                  <li> <a class="dropdown-item" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#conCedulaModal"> Con cédula &raquo; </a></li>
                  <li> <a class="dropdown-item" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#sinCedulaModal"> Sin cédula &raquo; </a></li>
                </ul>
              </li>
            </div>
            <div class="botones_menu"><a href="../instrucciones/direccion-mision-vision" class="btn btn-primary">Dirección, misión y visión</a></div>
            <div class="botones_menu"><a href="../instrucciones/reglamento" class="btn btn-primary">Reglamento</a></div>
            <div class="botones_menu"><a href="../instrucciones/metodologia" class="btn btn-primary">Metodología</a></div>
            <div class="botones_menu"><a href="../instrucciones/empadronamiento" class="btn btn-primary">Empadronamiento</a></div>
            <div class="botones_menu"><a href="../comunicaciones/videos" class="btn btn-primary">Vídeos</a></div>
            <div class="botones_menu"><a href="../comunicaciones/articulos" class="btn btn-primary">Artículos</a></div>
            <div class="botones_menu"><a href="../formularios/solicitud-afiliacion" class="btn btn-primary">Afiliación</a></div>
        </div>



        <div class="col-sm-6">
            
            <br>
            <div class="container">
              <nav aria-label="breadcrumb">
                <ol class="container-breadcrumb breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                  <li class="breadcrumb-item">  
                    <a class="" href=<?= base_url(); ?> style="color: red;">
                      <i class="bi bi-house-fill"></i>
                      Inicio
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="" href=<?= base_url() . "instrucciones/empadronamiento" ?> style="color: red;">
                      Empadronamiento
                    </a>
                  </li>
                </ol>
              </nav>
            </div>

            <div>
                <?= $this->include('docs/empadronamiento'); ?>
            </div>



        </div>



    </div>


    <?= $this->include('instrucciones/con-sin-cedula')  ?>


<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>

<?= $this->endSection(); ?>