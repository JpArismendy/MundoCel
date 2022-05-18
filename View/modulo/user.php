<input type="hidden" name="txtCodigo" id="txtCodigo">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      🐎USUARIOS🐎
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">CAPTURA DE DATOS</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
              <form method="post" id="form">
              <div class="box-body">
              <!-- Small boxes (Stat box) -->
          <div class="row">

              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i ></i>Nombre</span>
                      <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                      <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i ></i>Apellido</span>
                      <input type="text" class="form-control" id="txtApellido" name="txtApellido" >
                      <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>
              </div>
              <!-- ./col -->
          </div>
          <br>
          <div class="row pt-3">

              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i></i>Usuario</span>
                      <input type="text" class="form-control" id="txtUsuario" name="txtUsuario">
                      <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i ></i>Contraseña</span>
                      <input type="text" class="form-control" id="txtClave" name="txtClave">
                      <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>
              </div>
              <!-- ./col -->
          </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <button class="btn btn-app" type="submit" onclick="validate(event)">
                  <i class="fa fa-save"></i> Guardar
                </button>
                <button class="btn btn-app" onclick="getGeneraReporte(event)">
                  <i class="fa fa-print"></i> Reporte
                </button>
              </div>
              <!-- /.box-footer-->
              </form>
            <?php
            if (isset($_POST['txtNombre'])){
              $objCtruser = new UserController();
              $objCtruser -> setInsertUser(
                $_POST['txtNombre'],
                $_POST['txtApellido'],
                $_POST['txtUsuario'],
                $_POST['txtClave']
              );
            }
            ?>
        </div>




        <!--SEGUNDA VENTANA-->
        <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="submit" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="users" class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
              <th class="text-center">Code</th>
              <th class="text-center">Nombre</th>
              <th class="text-center">Apellido</th>
            <th class="text-center">Usuario</th>
            <th class="text-center">Password</th>
            <th class="text-center">Acciones</th>
            </tr>
            </thead>
          <tbody>
            <form action="" method="post">
            <?php
            $objCtruserAll = new UserController();
            if (gettype($objCtruserAll -> getSearchAllUser()) == 'boolean'){

              echo'
              <tr>
              <tdcolspan="5">no hay datos que mostrar</td>
              </tr>';
            }else{
              foreach ($objCtruserAll -> getSearchAllUser() as $key => $value) {
              echo '
                <tr>
                <td>'.$value["CODE"].'</td>
                <td>'.$value["NAME"].'</td>
                <td>'.$value["LASTNAME"].'</td>
                <td>'.$value["user"].'</td>
                <td>'.$value["PASSWORD"].'</td>
                <td class="text-center">
                <button class="btn btn-social-icon btn-bitbucket" onclick="getData(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                <button class="btn btn-social-icon btn-google" onclick="erase(this.parentElement.parentElement)"><i class="fa fa-trash"></i></button>
                </td>
                </tr>';
             }//fin foreach
            }//fin else}
              ?>
              </form>
          </tbody>
        </table>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg bg-info">
        <h4 class="modal-title">Editar usuario</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" id="formModificar">
        <input type="hidden" name="txtCodigoM" id="txtCodigoM">
              <div class="box-body">
              <!-- Small boxes (Stat box) -->
          <div class="row">

              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i ></i>Nombre</span>
                      <input type="text" class="form-control" id="txtNombreM" name="txtNombreM">
                      <span class="input-group-addon"><i class="fa fa-info"></i></span>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i ></i>Apellido</span>
                      <input type="text" class="form-control" id="txtApellidoM" name="txtApellidoM" >
                      <span class="input-group-addon"><i class="fa fa-info"></i></span>
                  </div>
              </div>
              <!-- ./col -->
          </div>
          <br>
          <div class="row pt-3">

              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i></i>Usuario</span>
                      <input type="text" class="form-control" id="txtUsuarioM" name="txtUsuarioM">
                      <span class="input-group-addon"><i class="fa fa-info"></i></span>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
              <!-- small box -->
                  <div class="input-group">
                      <span class="input-group-addon"><i ></i>Contraseña</span>
                      <input type="text" class="form-control" id="txtClaveM" name="txtClaveM">
                      <span class="input-group-addon"><i class="fa fa-info"></i></span>
                  </div>
              </div>
              <!-- ./col -->
          </div>

              </div>
              <!-- /.box-body -->
          
              <!-- /.box-footer-->
            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <div class="box-footer">
      
        <button class="btn btn-danger" type="submit" onclick="validateModify(event)" >Guardar</button>
        <?php
        if (isset($_POST['txtNombreM'])){
              $objCtruser = new UserController();
              $objCtruser -> setUpdateUser(
                $_POST['txtCodigoM'],
                $_POST['txtNombreM'],
                $_POST['txtApellidoM'],
                $_POST['txtUsuarioM'],
                $_POST['txtClaveM']
              );
            }
            ?>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>

    </div>
  </div>
</div>