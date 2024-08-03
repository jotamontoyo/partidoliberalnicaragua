<?= $this->extend('plantilla'); ?>




<?= $this->section('contenido'); ?>








  <div class="" style="background-size: cover ; margin-top: 30px; background-image: url(public/img/fondos/paisaje-nubes.jpg); background-attachment: fixed; background-repeat: no-repeat;">

    <br><br>
    <div class="container">

      <div class="row centrado">
        <div class="col-sm-6">
          <img src="public/img/logos/logoPLN.jpg" style="max-width: 50%;" alt="">
        </div>
        <div class="col-sm-4">
          <div class="col d-flex flex-column gap-2">
              
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Instructivos
              </button>
              <li class="nav-item" id="dropdown">
                <ul class="dropdown-menu">
                  <li> <a class="dropdown-item" href=<?= base_url()?>> Con cédula &raquo; </a>
                    <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href=<?= base_url()?>>Ver video</a></li>
                      <li><a class="dropdown-item" href=<?= base_url()?>>Descargar pdf</a></li>

                    </ul>
                  </li>
                  <li> <a class="dropdown-item" href=<?= base_url()?>> Sin cédula &raquo; </a>
                    <ul class="submenu dropdown-menu">
                      <li><a class="dropdown-item" href=<?= base_url()?>>Ver video</a></li>
                      <li><a class="dropdown-item" href=<?= base_url()?>>Descargar pdf</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
          <h2 class="fw-bold text-body-emphasis">Tu participación es importante para el país.</h2>
          <p class="text-body-secondary">Afíliate. Rellena el formulario con tus datos y serás un miembro del cambio.</p>
          <a href="#formulario_solicitud" class="btn btn-success btn-lg"><i class="bi bi-table"></i> Afíliate</a>
        </div>

        <div class="col">

          <div class="row row-cols-1 row-cols-sm-2 g-4">
            
            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#direccionModal"><i class="bi bi-collection"></i> Dirección, Misión y Visión</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Dirección, Misión y Vision</h4>
              <p class="text-body-secondary"> Comité Ejecutivo fundador  y comisiones.  Que vamos hacer y objetivo general.
              </p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reglamentoModal"><i class="bi bi-card-list"></i> Reglamento</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Reglamento</h4>
              <p class="text-body-secondary">Normas a las que nos debemos y código de ética.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#metodologiaModal"><i class="bi bi-card-checklist"></i> Metodología</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Metodología</h4>
              <p class="text-body-secondary">Afiliación, procesos y administración de la organización.</p>
            </div>

            <div class="col d-flex flex-column gap-2">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#empadronamientoModal"><i class="bi bi-clipboard2-plus"></i> Empadronamiento</button>
              <h4 class="fw-semibold mb-0 text-body-emphasis">Empadronamiento</h4>
              <p class="text-body-secondary">Proyecto para hacer cumplir artículo 122 que permita votar a los Nicaragüenses del exterior residentes o en tránsito.</p>
            </div>
          
          </div>

        </div>

      </div>
    </div>
  </div>

  


  <!-- direccion mision y vision modal -->
  <div class="modal fade" id="direccionModal" tabindex="-1" aria-labelledby="direccionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="direccionModalLabel">Dirección, misión y visión</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4 py-5">
            <?= $this->include('docs/direccion_mision'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!-- reglamento modal -->
  <div class="modal fade" id="reglamentoModal" tabindex="-1" aria-labelledby="reglamentoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="reglamentoModalLabel">Reglamento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <?= $this->include('docs/reglamento'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!-- metodologia modal -->
  <div class="modal fade" id="metodologiaModal" tabindex="-1" aria-labelledby="metodologiaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" >Metodología</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <?= $this->include('docs/metodologia'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!-- empadronamiento modal -->
  <div class="modal fade" id="empadronamientoModal" tabindex="-1" aria-labelledby="empadronamientoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="empadronamientoLabel">Empadronamiento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <?= $this->include('docs/empadronamiento'); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>





  <!-- <div class="album py-5 bg-body-tertiary" style="background-image: url(public/img/fondos/P5040009.JPG);"> -->
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInLeft">
            <video src="public/videos/jorge_esgtrada.mp4" max-width="" height="250" controls></video>
            <div class="card-body">
              <p class="card-text">El contenido del video se basa en las acciones de apoyo realizadas por Don Jorge Estrada, miembro del comité ejecutivo provisional del Partido Liberar de Nicaragua</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInUp">
            <div class="centrado">
              <img src="public/img/comite/comandante_henry.jpg" max-width="400" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">El presidente Reagan recibió la  Dr. y Comandante Henry (Enrique Zelaya) miembro del estado mayor de la contra.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm animate__animated animate__backInRight">
            <div class="centrado">
              <iframe max-width="400" height="300" src="https://www.youtube.com/embed/tHTVkORVWdg?si=gwWDCaCmaXX4Jshd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text">Álvaro Somoza Urcuyo, hijo del presidente Luis Somoza y director de la la alianza por la Libertad con miles de afiliados y conductor del programa semanal "una hora con Álvaro Somoza".</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="centrado">
              <img src="public/img/comite/cesar_grijalba.jpg" max-width="300" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">Dr. Cesar Grijalva, Abogado, Economista con grado de Doctor . Experto en temas de gobierno de transición y representante de organizaciones.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="centrado">
              <img src="public/img/comite/eli_cabezas.jpg" max-width="200" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">Don Eli Cabezas desde los años 80's principal líder liberal de la diáspora y del nuevo exilio del canada.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm">
          <iframe max-width="400" height="250" src="https://www.youtube.com/embed/MidbScmkpw8?si=7zllNsgoUSxgHMLz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Politólogo, Informático y Experto electoral con amplia trayectoria en  documentacion de fraudes, tendidos electorales y administración de procesos electorales.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="centrado">
              <img src="public/img/comite/harlinton_orozco.jpg" width="100%" height="250" alt="" >
            </div>
            <div class="card-body">
              <p class="card-text">Harlinton Orozco y Henry Álvarez de Unión de Exiliados, formado por líderes de tranques durante la rebelion.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <iframe max-width="400" height="250" src="https://www.youtube.com/embed/f03tKMgzPl0?si=mwvaziFid7C1-Tx3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Podcast de Don Álvaro Somoza. El Robo del Siglo: Cómo Maduro se Burló de la Democracia en Venezuela.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  





<!-- formulario solicitud afilicacion  fondo azul-> style="background-color: #E0ECF8;" -->

  <div id="formulario_solicitud" name="formulario_solicitud"  style="background-color: #E0ECF8;">

    <div class="container">



      

        <br>
        <h4 class="mb-3 text-center">Solicitud de afiliación</h4>

        <hr>
        <h5>Datos personales</h5>
        <br>

        <form action="<?= base_url('solicitudes/crear') ?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="POST">
          <?php echo csrf_field(); ?>

          <div class="row g-3">


            <br>

            <div class="col-sm-5 form-floating">
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>" placeholder="Nombre">
              <label for="nombre">Nombre*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('nombre'); ?>
              </p>
            </div>

            <div class="col-sm-5 form-floating">
              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= set_value('apellidos'); ?>" placeholder="Apellidos">
              <label for="apellidos">Apellidos*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('apellidos'); ?>
              </p>
            </div>




            




            


            <div class="col-sm-2 form-floating">
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= set_value('fecha_nacimiento'); ?>" placeholder="Fecha de nacimiento*">
                <label for="fecha_nacimiento">Fecha de nacimiento*</label>
                <p class="small" style="color:red">
                  <?= validation_show_error('fecha_nacimiento'); ?>
                </p>              
            </div>

            <div class="col-sm-2 form-floating">
              <select class="form-select" id="genero" name="genero">
                <option value=""></option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
              <label for="genero">Género*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('genero'); ?>
              </p>
            </div>








            <div class="col-sm-2 form-floating">
                

                    <select class="form-select" id="estado_id" name="estado_id">
                        <option value=""></option>
                        <?php foreach($estados as $estado): ?>
                            <option value="<?= $estado['id'] ?>"><?= $estado['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="estado_id">País de residencia*</label>
                    <p class="small" style="color:red">
                        <?= validation_show_error('estado_id'); ?>
                    </p>

            </div>

            



          

            <!-- <div class="col-sm-4 form-floating">
                <div class="">
                    <select class="form-select" id="departamento_id" name="departamento_id" hidden>
                        <option value="">Seleccionar Estado, Región, Comunidad, Departamento</option>
                        <?php foreach($departamentos as $departamento): ?>
                            <option value="<?= $departamento['id'] ?>"><?= $departamento['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="small" style="color:red">
                        <?= validation_show_error('departamento_id'); ?>
                    </p>
                </div>
            </div>

            <div class="col-sm-4 form-floating">
                <div class="">
                    <select class="form-select" id="municipio_id" name="municipio_id" hidden>
                        <option value="">Ciudad, Municipio:</option>
                        <?php foreach($municipios as $municipio): ?>
                            <option value="<?= $municipio['id'] ?>"><?= $municipio['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="small" style="color:red">
                        <?= validation_show_error('municipio_id'); ?>
                    </p>
                </div>
            </div> -->



            <div class="col-sm-3 form-floating">
              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= set_value('ciudad'); ?>" placeholder="Ciudad*" hidden>
              <label for="ciudad" class="form-label" id="ciudad_label" hidden>Ciudad/Municipio*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('ciudad'); ?>
              </p>
            </div>


            <div class="col-sm-3 form-floating">
              <input type="text" class="form-control" id="pais" name="pais" value="<?= set_value('pais'); ?>" placeholder="Pais*" hidden>
              <label for="pais" class="form-label" id="pais_label" hidden>Estado, Región, Comunidad, Dpto*</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pais'); ?>
              </p>
            </div>






            <hr class="my-4">
            <h5>Identificación</h5>

            <div class="col-sm-1" id="tiene_cedula" hidden>
                <label for="estado_id" class="col-form-label">
                  ¿Tiene cédula?
                </label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula">
                <label class="form-check-label" for="radio_tiene_cedula">
                  No
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio_tiene_cedula" id="radio_tiene_cedula" checked>
                <label class="form-check-label" for="radio_tiene_cedula">
                  Si
                </label>
              </div>
            </div>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="cedula" name="cedula" value="<?= set_value('cedula'); ?>" placeholder="Cedula Nº:" hidden>
              <label for="cedula" class="form-label" id="cedula_label" hidden>Cédula Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula'); ?>
              </p>
            </div>
            
            <div class="col-sm-3">
              <label for="cedula_img" class="form-label" id="cedula_img_label" hidden>Imagen del documento:</label>
              <input type="file" class="form-control" accept="image/jpeg, image/png" id="cedula_img" name="cedula_img" value="<?= set_value('cedula_img'); ?>" hidden>
              <p class="small" style="color:red">
                <?= validation_show_error('cedula_img'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">

              <input type="text" class="form-control" id="pasaporte" name="pasaporte" value="<?= set_value('pasaporte'); ?>" placeholder="Pasaporte Nº:" hidden>
              <label for="pasaporte" class="form-label" id="pasaporte_label" hidden>Pasaporte Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('pasaporte'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">
              
              <input type="text" class="form-control" id="licencia" name="licencia" value="<?= set_value('licencia'); ?>" placeholder="Licencia Nº:" hidden>
              <label for="licencia" class="form-label" id="licencia_label" hidden>Licencia Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('licencia'); ?>
              </p>
            </div>

            <div class="col-sm-2 form-floating">
              
              <input type="text" class="form-control" id="residencia" name="residencia" value="<?= set_value('residencia'); ?>" placeholder="Residencia Nº:" hidden>
              <label for="residencia" class="form-label" id="residencia_label" hidden>Residencia Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('residencia'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Datos de contacto</h5>

            <div class="col-sm-2 form-floating">
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= set_value('whatsapp'); ?>" placeholder="WhatsApp nº">
              <label for="whatsapp" class="form-label">WhatsApp Nº:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('whatsapp'); ?>
              </p>
            </div>

            <div class="col-sm-4 form-floating">
              <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
              <label for="email" class="form-label">Email</label>
              <p class="small" style="color:red">
                <?= validation_show_error('email'); ?>
              </p>
            </div>


            <hr class="my-4">
            <h5>Tipo de participación</h5>
            

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="afiliado" name="afiliado" checked>
              <label class="form-check-label" for="flexCheckDefault">
                Afiliado
              </label>
              <p class="small" style="color:red">
                <?= validation_show_error('afiliado'); ?>
              </p>
            </div>


            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="cargo" name="cargo">
              <label class="form-check-label" for="flexCheckChecked">
                Cargo
              </label>
              <p class="small" style="color:red">
                <?= validation_show_error('cargo'); ?>
              </p>
            </div>

            <div class="col-sm-4 form-floating">
              <input type="text" class="form-control" id="posicion" name="posicion" value="<?= set_value('posicion'); ?>" placeholder="Posición">
              <label for="posicion" class="form-label">Posición:</label>
              <p class="small" style="color:red">
                <?= validation_show_error('posicion'); ?>
              </p>
            </div>
            
          </div>
          <div class="centrar_div">
            <br>              
            <button class="btn btn-primary btn-lg" type="submit"><i class="bi bi-send"></i> Enviar solicitud</button>
          </div>
          <br>

          <br>
        </form>

    </div>

  
  
  </div>










<script>



  $(".checkbox").on('change', function() {
    if ($(this).is(':checked')) {
      $(this).attr('value', 'true');
      var check = $(this).val();
      //console.log(check);
      //$('#afiliado value').val(check);
      //console.log($('#afiliado').val(check));
    } else {
      $(this).attr('value', 'false');
      var check = $(this).val();
      //console.log(check);
      //$('#afiliado').val(check);
      //console.log($('#afiliado').val(check));
    }
  });




  //muestra campos segun el pais elejido en el campo estado_id
  $(document).ready(function () {
    $(document).on('change','#estado_id',function() {

      var pais = document.getElementById("estado_id").value;
      /*if(pais == 1 | pais == 5) { // para paises con cedula
        $("#cedula").prop('hidden', false);
        $("#cedula_label").prop('hidden', false);
        $("#tiene_cedula").prop('hidden', false);
      } else {
        $("#cedula").prop('hidden', true);
        $("#cedula_label").prop('hidden', true);
        $("#tiene_cedula").prop('hidden', true);
      };*/

      $("#cedula_img_label").prop('hidden', false);
      $("#cedula_img").prop('hidden', false);
      $("#cedula").prop('hidden', false);
      $("#cedula_label").prop('hidden', false);
      $("#tiene_cedula").prop('hidden', false);
      $("#departamento_id").prop('hidden', false);
      $("#municipio_id").prop('hidden', false);
      $("#ciudad").prop('hidden', false);
      $("#ciudad_label").prop('hidden', false);
      $("#pais").prop('hidden', false);
      $("#pais_label").prop('hidden', false);

 
    });
  });


  

  // activa el campo nº de cedula o los campos alternativos pasaporte, licencia...
  $(document).ready(function () {
    $(document).on('click','#tiene_cedula',function() {
      var cedula = document.getElementById("radio_tiene_cedula").checked;
      if(cedula == true) {
        $("#cedula").prop('hidden', true);
        $("#cedula_label").prop('hidden', true);
        $("#pasaporte").prop('hidden', false);
        $("#pasaporte_label").prop('hidden', false);
        $("#licencia").prop('hidden', false);
        $("#licencia_label").prop('hidden', false);
        $("#residencia").prop('hidden', false);
        $("#residencia_label").prop('hidden', false);
      } else {
        $("#cedula").prop('hidden', false);
        $("#cedula_label").prop('hidden', false);
        $("#pasaporte").prop('hidden', true);
        $("#pasaporte_label").prop('hidden', true);
        $("#licencia").prop('hidden', true);
        $("#licencia_label").prop('hidden', true);
        $("#residencia").prop('hidden', true);
        $("#residencia_label").prop('hidden', true);
      };
    });
  });






</script>



    



<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
   
<?= $this->endSection(); ?>