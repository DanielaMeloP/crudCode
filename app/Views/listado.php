<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CRUD CODEIGNITER</title>
  </head>
  <body>

    <div class="container">
        <h1>CRUD con CodeIgniter 4</h1>
        <div class="row">
                <div class="col-sm-12">
                  <form method="POST" action="<?php echo base_url().'/crear' ?>">
                      <input type="text" name="idNombre" id="idNombre" hidden="">
                      <label for="nombre">Nombre</label>
                      <input type="text" name="nombre" id="nombre" class="form-control">

                      <label for="paterno">Apellido Paterno</label>
                      <input type="text" name="paterno" id="paterno" class="form-control">

                      <label for="materno">Apellido Materno</label>
                      <input type="text" name="materno" id="materno" class="form-control">

                      <br>
                      <button class="btn btn-primary">Guardar</button>
                      
                  
                  </form>
                </div>
            </div>

        <hr>
        <h2>Listado de personas</h2>

        <?php // print_r($datos); ?>

        <div class="row">
          <div class="col-sm-12">
            <div class="table table-responsive">

              <table class="table table-hover table-bordered">
                
                <tr>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php foreach($datos as $key):?>
                  <tr>
                    <td><?php echo $key->nombre ?></td>
                    <td><?php echo $key->paterno ?></td>
                    <td><?php echo $key->materno ?></td>
                    <td>
                      <a href="<?php echo base_url().'/obtenerNombre/$key->id_nombre' ?>" 
                      class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                      <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                  </tr>
                <?php endforeach; ?> 
              </table>

            </div>
          </div>
        </div>
    </div>


   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Import script sweetalert   -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Configuracion alerta   -->              
    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';
      if (mensaje == '1' ) {
        // swal('simbolo', mensaje, tipo mensaje)
        swal(':D', 'Agregado con exito', 'success');
        //alert("Agregado con exito");
      }else if (mensaje == '0'){
        swal(':C', 'No se logro grabar registro', 'error');
        //alert("No se logro grabar registro");
      }
    </script>

  </body>
</html>