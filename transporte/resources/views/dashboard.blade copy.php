{{-- @extends('layouts.inicio') --}}
<head>

    <style>
    .card {
        background-color: #fff;
        border-radius: 10px;
        border: none;
        position: relative;
        margin-bottom: 30px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
    }
    .l-bg-cherry {
        background: linear-gradient(to right, #493240, #f09) !important;
        color: #fff;
    }
    
    .l-bg-blue-dark {
        background: linear-gradient(to right, #373b44, #4286f4) !important;
        color: #fff;
    }
    
    .l-bg-green-dark {
        background: linear-gradient(to right, #0a504a, #38ef7d) !important;
        color: #fff;
    }
    
    .l-bg-orange-dark {
        background: linear-gradient(to right, #a86008, #ffba56) !important;
        color: #fff;
    }
    
    .card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
        font-size: 110px;
    }
    
    .card .card-statistic-3 .card-icon {
        text-align: center;
        line-height: 50px;
        margin-left: 15px;
        color: #000;
        position: absolute;
        right: -5px;
        top: 20px;
        opacity: 0.1;
    }
    
    .l-bg-cyan {
        background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
        color: #fff;
    }
    
    .l-bg-green {
        background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
        color: #fff;
    }
    
    .l-bg-orange {
        background: linear-gradient(to right, #f9900e, #ffba56) !important;
        color: #fff;
    }


</style>




































	{{-- <title>InfoDP | Full</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> --}}

    {{-- <!-- Para ICONOS -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/icoDP/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/icoDP/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/icoDP/apple-icon-72x72.png"')}}>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icoDP/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/icoDP/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/icoDP/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/icoDP/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/icoDP/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icoDP/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/icoDP/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/icoDP/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/icoDP/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/icoDP/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/img/icoDP/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/icoDP/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" href="{{ asset('assets/img/icoDP/favicon.ico" type="image/x-icon')}}">
	<link rel="icon" href="{{ asset('assets/img/icoDP/favicon.ico" type="image/x-icon')}}"> --}}
	
    <!-- ARCHIVOS CSS-->
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/bower_components/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
	 {{-- <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	 <!-- Custom CSS -->
    <link href="{{ asset('assets/bower_components/css/sb-admin-2.css" rel="stylesheet')}}">		
	
	<!--Archivos CSS para Alertify -->
	<!-- Alertify style -->
	<link href="{{ asset('assets/bower_components/alertify/css/alertify.min.css')}}" rel="stylesheet">
	<!-- Alertify theme -->
	<link href="{{ asset('assets/bower_components/alertify/css/themes/default.min.css')}}" rel="stylesheet"> --}}
    	
	<!--ARCHIVOS JS-->	
	 <!-- JQuery -->
    <script src="{{ asset('assets/bower_components/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    {{-- <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/bower_components/js/sb-admin-2.js')}}"></script>        
	<!--Código custom JS para alertify -->
    <script src="{{ asset('assets/bower_components/alertify/alertify.min.js')}}"></script>	 --}}


         {{-- <!--Archivos CSS para DataTables -->
        <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables/css/dataTables.bootstrap.min.css') }}">
        <!--extension BUTTONS para DataTables -->
        <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables/extensions/Buttons/css/buttons.dataTables.min.css') }}">		
         <!--extension SELECT para DataTables -->
        <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables/Select/css/select.bootstrap.min.css') }}">
        <!--scroller para datatables -->
        <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables/extensions/scroller/css/scroller.bootstrap.min.css') }}">    
        <!--Archivos CSS para JQuery UI -->
        <link rel="stylesheet" href="{{ asset('assets/bower_components/jqueryUI/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bower_components/jqueryUI/css/jquery-ui.theme.min.css') }}">	      
        
        <!--Archivos JS para DataTables -->
        <script src="{{ asset('assets/bower_components/datatables/js/jquery.dataTables.min.js') }}"></script>
        <!--Archivos JS para DataTables estilo Bootstrap -->
        <script src="{{ asset('assets/bower_components/datatables/js/dataTables.bootstrap.min.js') }}"></script>
        <!--extension BUTTONS para DataTables -->
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables/extensions/Buttons/js/buttons.colVis.min.js') }}"></script>
        <!--extension SELECT para DataTables -->
        <script src="{{ asset('assets/bower_components/datatables/Select/js/dataTables.select.min.js') }}"></script>    
        <!--extension KEYTABLES para DataTables -->
        <script src="{{ asset('assets/bower_components/datatables/extensions/keytable/dataTables.keyTable.min.js') }}"></script>    
        <!--scroller para datatables -->
        <!--	<script src="{{ asset('assets/bower_components/datatables/extensions/scroller/js/dataTables.scroller.min.js') }}"></script>-->
        <!--Código JS para JQuery UI -->
        <script src="{{ asset('assets/bower_components/jqueryUI/js/jquery-ui.min.js') }}"></script>    	
        <!--Plugin para Imprimir -->
        <script src="{{ asset('assets/bower_components/jquery-PrintArea/jquery.PrintArea.js') }}"></script>	
        <!--Código custom JS para alertify -->
        <script src="{{ asset('assets/bower_components/alertify/alertify.min.js') }}"></script>
        
        <!--Código JS propio dataTables -->
        <script src="{{ asset('assets/bower_components/js/codigo_dataTable.js') }}"></script>	 --}}
		
</head>


<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{-- <x-slot> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid">
                    <h2 class="page-header hstyle"><i class="fa fa-home fa-fw"></i> Inicio</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                3 </div>
                                            <div>Productos</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('productos')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver más</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                1 </div>
                                            <div>Ventas</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('ventas/crear')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Nueva Venta</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-azul cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-truck fa-flip-horizontal fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                1
                                            </div>
                                            <div>Compras</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('compras/crear')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Nueva Compra</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-lila cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-bar-chart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </div>
                                            <div>Reportes</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('reportes')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver más</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-male fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                4 </div>
                                            <div>Clientes</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('clientes')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver más</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-celeste cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-suitcase fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                5 </div>
                                            <div>Proveedores</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('proveedores')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver más</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-naranja cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                3 </div>
                                            <div>Usuarios</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('usuarios')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver más</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-bluedark cajasInicio">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-cog fa-spin fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                            </div>
                                            <div>Parámetros</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ asset('parametros')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">Configurar el Sistema</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </x-slot> --}}


bootstrap 4.4.1 included, to get the result that you can see in the preview selection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="col-md-10 ">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">New Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                3,243
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Customers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                15.07k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>9.23% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Ticket Resolved</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                578
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>10% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Revenue Today</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $11.61k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>