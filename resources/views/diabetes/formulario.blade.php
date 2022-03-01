<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prueba K2</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script language="javascript" src="{{ url('js/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#sepsis').on('change', function() {
                if (this.checked) {
                    $("#glucemia").show();
                } else {
                    $("#glucemia").hide();
                }
            })
        });
        $(document).ready(function() {
            $('#Cuadro').on('change', function() {
                if (this.checked) {
                    $("#glucemia").show();
                } else {
                    $("#glucemia").hide();
                }
            })
        });
        $(document).ready(function() {
            $('#Trastornos').on('change', function() {
                if (this.checked) {
                    $("#glucemia").show();
                } else {
                    $("#glucemia").hide();
                }
            })
        });
        $(document).ready(function() {
            $('#Agudas').on('change', function() {
                if (this.checked) {
                    $("#glucemia").show();
                } else {
                    $("#glucemia").hide();
                }
            })
        });
        $(document).ready(function() {
            $('#Signos').on('change', function() {
                if (this.checked) {
                    $("#glucemia").show();
                } else {
                    $("#glucemia").hide();
                }
            })
        });
    </script>
    <script>
        function casos() {
            /* Para obtener el valor */
            var resp = document.getElementById("nivelG").value;
            if ((resp > 7.0) && (resp < 13.8)) {
                $("#resp1").show();
                $("#resp3").hide();
                $("#resp2").hide();
            }
            else if ((resp > 13.7) && (resp < 33.1)) {
                $("#resp2").show();
                $("#resp1").hide();
                $("#resp3").hide();
            }
            else if (resp > 33) {
                $("#resp3").show();
                $("#resp1").hide();
                $("#resp2").hide();
            }
            else{
                $("#resp1").hide();
                $("#resp2").hide();
                $("#resp3").hide();
            }
        }
    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> K<sup>2</sup>!</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Reto K2
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Actividad #1</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Diabetes:</h6>
                        <a class="collapse-item" href="{{ url('/diabetes/insert') }}">Insertar</a>
                        <a class="collapse-item" href="{{ url('/diabetes/ver') }}">Ver</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-capsules"></i>
                    <span>Actividad #2</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hemogrobina:</h6>
                        <a class="collapse-item" href="{{ url('/hemogrobina/insert') }}">Insertar</a>
                        <a class="collapse-item" href="{{ url('/hemogrobina/ver') }}">Ver</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ url('img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reto desarollo K2
                            </a>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Stiven Ortega.</span>
                                <img class="img-profile rounded-circle" src="{{ url('img/undraw_profile.svg') }}">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informacion Guardada</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/diabetes/inser') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="Nombre" aria-describedby="emailHelp" placeholder="Enter Nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="Apellido">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" id="Apellido" aria-describedby="emailHelp" placeholder="Enter Apellido" required>
                                </div>
                                <div class="form-group">
                                    <label for="Cedula">Cedula</label>
                                    <input type="number" name="cedula" class="form-control" id="Cedula" aria-describedby="emailHelp" placeholder="Enter Cedula" required>
                                </div>
                                <div class="form-group">
                                    <label for="EPS">EPS</label>
                                    <input type="text" name="eps" class="form-control" id="EPS" aria-describedby="emailHelp" placeholder="Enter EPS" required>
                                </div>
                                <div>
                                    <hr>
                                    <h5>Marque si padece de los siguientes síntomas </h5>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="neurovegetativos" value="si" class="form-check-input" id="Cuadro">
                                    <label class="form-check-label" for="Cuadro">Cuadro neurovegetativos</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="trastornos" value="si" class="form-check-input" id="Trastornos">
                                    <label class="form-check-label" for="Trastornos">Trastornos de conciencia</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="deshidratación" value="si" class="form-check-input" id="Signos">
                                    <label class="form-check-label" for="Signos">Signos de deshidratación</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="sepsis" value="si" class="form-check-input" id="sepsis">
                                    <label class="form-check-label" for="Sepsis">Sepsis</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="patologias" value="si" class="form-check-input" id="Agudas">
                                    <label class="form-check-label" for="agudas">Patologías agudas cardiovascular neurológica</label>
                                </div>
                                <div class="form-group" id="glucemia" style="display: none;">
                                    <label for="nivel">Nivel De Glucemia </label>
                                    <input type="number" name="nivel" step="0.1"" onchange=" casos();" class=" form-control" id="nivelG" aria-describedby="emailHelp" placeholder="Enter Nivel...">
                                </div>
                                <br>
                                <div id="resp1" style="display: none;">
                                    <h4 class="alert-heading">HIPERGLICEMIA AISLADA</h4>
                                    <p>
                                        Indicar glucemia en ayunas y TGP en pacientes sin diagnóstico. - Si deshidratación, rehidratación oral o EV según las demandas. - Reevaluar conducta terapéutica en diabéticos y cumplimiento de los pilares. - Reevaluar dosis de hipoglucemiantes.
                                    </p>
                                    <hr>
                                </div>
                                <div id="resp2" style="display: none;">
                                    <h4 class="alert-heading">CETOACIDOSIS DIABÉTICA </h4>
                                    <p>
                                        Coordinar traslado y comenzar tratamiento. - Hidratación con Solución salina 40 ml/Kg en las primeras 4 horas. 1-2 L la primera hora. - Administrar potasio al restituirse la diuresis o signos de hipopotasemia (depresión del ST, Onda U ≤ 1mv, ondas U≤ T). - Evitar insulina hasta desaparecer signos de hipopotasemia. - Administrar insulina simple 0,1 U/kg EV después de hidratar.
                                    </p>
                                    <hr>
                                </div>
                                <div id="resp3" style="display: none;">
                                    <h4 class="alert-heading">ESTADO HIPEROSMOLAR HIPERGLUCÉMICO NO CETÓSICO</h4>
                                    <p>
                                        Coordinar traslado y comenzar tratamiento. - Hidratación con Solución Salina 10-15 ml/Kg/h hasta conseguir estabilidad hemodinámica. - Administrar potasio al restituirse la diuresis o signos de hipopotasemia (depresión del ST, Onda U ≤ 1mv, ondas U≤ T).
                                    </p>
                                    <hr>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Subir</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>

</body>

</html>