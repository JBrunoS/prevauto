<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PrevAuto</title>

   <!-- Custom fonts for this template-->
  <link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

<!--<script type="text/javascript" src="../js/carregaVeiculos.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>




</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PrevAuto</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tela Inicial</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Componentes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Adicionar Componentes:</h6>
            <a class="collapse-item" href="usuarios.php">Usuários</a>
            <a class="collapse-item" href="veiculos.php">Veículos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Serviços</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Serviços:</h6>
            <a class="collapse-item" href="manutencao.php">Manutenção</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Relatórios</span></a>
      </li>

      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark-800 small form-control bg-light"><?php 
                  echo " " . $_SESSION['nome_usuario'] . " - " . $_SESSION['empresa'];
                  ?></span>
                  <img class="img-profile rounded-circle" src="../user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Veículos</h1>
            <button type="button" name="btnNovo" id="btnNovo" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLarger"><i class="fas fa-plus"></i> Adicionar Novo</button>
          </div>

          <!-- Content Row -->
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Serviços</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive table-sm">
                <table class="table table-unbordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Veículo</th>
                      <th>Placa</th>
                      <th>Cor</th>
                      <th>Quilometragem</th>
                      <th>Detalhes</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Veículo</th>
                      <th>Placa</th>
                      <th>Cor</th>
                      <th>Quilometragem</th>
                      <th>Detalhes</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PrevAuto 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Register Modal-->
  <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLarger" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLAbel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Adicionar Novo Veículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="container-fluid">
                  
                      <form class="user" action="../model/validaVeiculo.php" method="POST">
                        <div class="form-group row">
                          <div class="col-sm-3 mb-3 mb-sm-0">
                            <label for="placa">Placa</label>
                            <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa do veículo" required="">
                          </div>
                          <div class="col-sm-6">
                            <label for="veiculo">Veiculo</label>
                            <input type="text" class="form-control" id="veiculo" name="modelo" placeholder="modelo" required="">
                          </div>
                          <div class="col-sm-3">
                            <label for="kms">Quilometragem</label>
                            <input type="text" class="form-control" id="kms" name="kms" placeholder="Quilometragem" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          

                          <div class="form-group col-sm-4">
                            <label for="dataModelo">Data Modelo</label>
                            <div class="input-group date" id="date1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" id="dataModelo" name="dataModelo" data-target="#datetimepicker1" required="" />
                              <div class="input-group-append" data-target="#date1" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <label for="dataFabricacao">Ano Fabricação</label>
                            <div class="input-group date" id="date2" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" id="dataFabricacao" name="dataFabricacao" data-target="#dateTimePicker2"  required="">
                            <div class="input-group-append" data-target="#date2" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                          </div>
                            </div>

                            <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="">
                          </div>
                            
                        </div>

                        <div class="form-group row">
                          
                          <div class="col-sm-4">
                            <label for="cor">Cor</label>
                            <input type="text" class="form-control" id="cor" name="cor" placeholder="" required="">
                          </div>
                          <div class="col-sm-4">
                            <label for="combustivel">Combustível</label>
                            <input type="text" class="form-control" id="combustivel" name="combustivel" placeholder="" required="">
                          </div>
                          <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="especie">Espécie</label>
                            <input type="text" class="form-control " id="especie" name="especie" placeholder="" required="">
                          </div>
                        </div>

                        <div class="form-group row">
                          
                          <div class="col-sm-4">
                            <label for="renavan">Número Renavan</label>
                            <input type="text" class="form-control " id="renavan" name="renavan" placeholder="" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                          </div>
                          <div class="col-sm-4">
                            <label for="chassi">Número Chassi</label>
                            <input type="text" class="form-control " name="chassi" id="chassi" placeholder="" required="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                          </div>
                          <div class="col-sm-4">
                            <label for="motor">Número Motor</label>
                            <input type="text" class="form-control" name="motor" id="motor" placeholder="" required="">
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="salvar" id="salvar" onclick="" >Save changes</button>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>

        <!-- Modal exibe informações do veículo-->

        <div class="modal fade bd-example-modal-lg" id="exibeVeiculo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLAbel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Dados do Veículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="container-fluid">
                  
                      <form class="user" action="" method="">
                        <div class="form-group row">
                          <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="placa">Placa</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infoplaca" name="infoplaca">
                          </div>


                          <div class="col-sm-4">
                            <label for="veiculo">Veiculo</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infoveiculo" name="infoveiculo">
                          </div>
                          <div class="col-sm-4">
                            <label for="kms">Quilometragem</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infokms" name="infokms">
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          

                          <div class="col-sm-4">
                            <label for="dataModelo">Data Modelo</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infodataModelo" name="infodataModelo">
                          </div>            
                

                          <div class="col-sm-4">
                            <label for="dataFabricacao">Ano Fabricação</label>
                            
                              <input type="text" readonly class="form-control form-control-plaintext" value="" id="infodataFabricacao" name="infodataFabricacao" >
                            
                          </div>
                            

                            <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="tipo">Tipo</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infotipo" name="infotipo" >
                          </div>
                            
                        </div>

                        <div class="form-group row">
                          
                          <div class="col-sm-4">
                            <label for="cor">Cor</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infocor" name="infocor">
                          </div>
                          <div class="col-sm-4">
                            <label for="combustivel">Combustível</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infocombustivel" name="infocombustivel">
                          </div>
                          <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="especie">Espécie</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="infoespecie" name="infoespecie">
                          </div>
                        </div>

                        <div class="form-group row">
                          
                          <div class="col-sm-4">
                            <label for="renavan">Número Renavan</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" id="inforenavan" name="inforenavan">
                          </div>
                          <div class="col-sm-4">
                            <label for="chassi">Número Chassi</label>
                            <input type="text" readonly class="form-control form-control-plaintext" value="" name="infochassi" id="infochassi">
                          </div>
                          <div class="col-sm-4">
                            <label for="motor">Número Motor</label>
                            <input type="text" readonly class=" form-control form-control-plaintext" value="" name="infomotor" id="infomotor">
                          </div>
                        </div>

                        
                    </form>
                  </div>
              </div>
            </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-center" data-dismiss="modal" >Fechar</button>
                <button type="button" class="btn btn-success pull-right" name="infosalvar" id="infosalvar"><i class="fas fa-download "></i> Baixar Arquivo</button>
              </div>
            </div>
          </div>
        </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../bootstrap/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../bootstrap/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  
  <script type="text/javascript" src="../js/carregaVeiculos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  

  <script type="text/javascript"> carregaVeiculos(); </script>

  <script type="text/javascript">
    $(function(){
      $("#dateTimePicker1").datetimepicker();
      $("#dateTimePicker2").datetimepicker();
    });

    $(function(){
            $("#date1").datetimepicker({
                format: 'L'
            });

            $("#date2").datetimepicker({
              format: 'L'
            });
        })

    $(document).ready(function(){
      var idpermissao = '<?php echo $_SESSION['permissao']; ?>' ;
      if (idpermissao == "NAO") {
        $("#btnNovo").attr('disabled', 'disabled');
      }
    });
  </script>


  <script type="text/javascript">
    $(function(){
      $("#placa").mask("aaa-9999");
      $("#kms").mask("");
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click', 'button[data-role=update]', function(){
        var id = $(this).data('id');

        $.post( "../model/exibeInfoVeiculos.php", {id: id}).done(function( data ) {
        var x = JSON.parse(data);

        $("#infoveiculo").val(x.modelo);
        $("#infoplaca").val(x.placa);
        $("#infokms").val(x.quilometragem);
        $("#infodataModelo").val(x.ano_modelo);
        $("#infodataFabricacao").val(x.ano_fabricacao);
        $("#infotipo").val(x.tipo);
        $("#infocor").val(x.cor);
        $("#infocombustivel").val(x.combustivel);
        $("#infoespecie").val(x.especie);
        $("#inforenavan").val(x.renavan);
        $("#infochassi").val(x.numero_chassi);
        $("#infomotor").val(x.numero_motor);
        
        
    });

      })
    });

  </script>

</body>

<?php if (isset($_POST['btnsair'])) {
  //echo "BRUNO";
  //session_destroy();
  echo session_id();
  $bruno = session_id();
  //echo "<script> alert('$bruno'); </script>";
  // echo "<script> location.href='../view/login.html'; </script>";
} 
?>

</html>
