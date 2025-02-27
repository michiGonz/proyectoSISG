<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Sistema de Indicadores de Gestión</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">

    <link href="{{asset('assets/js/googleapis.js')}}" />
    <link rel="{{asset('assets/js/apis.js')}}" />
    <!-- Flag sprites service provided by Martijn Lafeber,
        https://github.com/lafeber/world-flags-sprite/blob/master/LICENSE -->

    <link href="{{asset('assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/vendor/select2/js/select2.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="{{asset('assets/vendor/DataTables/datatables.min.css')}}" rel="stylesheet">

    <script src="{{asset('assets/vendor/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/js.js')}}"></script>

    <!-- graficas-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('/') }}">
                <div class="">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-2">Sistema Indicadores de Gestión</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('/') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><b>Inicio</b></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <li class="nav-item">
                <a class="nav-link" href="{{ route('crearindicador.index') }}">
                    <i class="fas fa-edit"></i>
                    <span><b>Crear Indicador</b><small>"En construccion"</small></span></a>
            </li>

            <!-- reportes planificados -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('indicadorplan.index') }}">
                    <i class="fa fa-calendar"></i>
                    <span><b>Planificación de Indicadores</b></span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('indicators.index') }}">
                    <i class="fa fa-check-circle"></i>
                    <span><b>Gestión de Indicadores</b></span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-book"></i>
                    <span><b>Reportes</b><small>"En construccion"</small></span>
                </a>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('configuracion.index') }}">
                    <i class="fa fa-cog"></i>
                    <span><b>Configuración</b></span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('indicators.index') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b> {{str_replace('-',',',Auth::user()->name) }}</b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Content Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Salir del sistema</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Si desea salir de su sesión presione salir.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}">Salir del sistema</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>