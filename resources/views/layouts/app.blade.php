<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inicio - Universidad Nacional de Colombia') }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>



        <!-- 
  =============================================================================
  === PLANTILLA DESARROLLADA POR LA OFICINA DE MEDIOS DIGITALES - UNIMEDIOS ===
  =============================================================================
-->

    <!-- base href="http://subdominio.unal.edu.co/" -->
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.ico') }}" type="image/x-icon">


    <meta name="revisit-after" content="1 hour">
    <meta name="distribution" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
    <meta name="expires" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all">


    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap-theme.min.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/reset.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/unal.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/base.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/tablet.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/phone.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/small.css')  }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/printer.css')  }}" media="print">


    <script src="{{ asset('public/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/js/unal.js')}}" type="text/javascript"></script>
    <!--[if lt IE 9]><script src="js/html5shiv.js" type="text/javascript"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js" type="text/javascript"></script><![endif]-->


    <style type="text/css">
        body {
            background:url(http://localhost:8080/bienestar.palmira.unal.edu.co/public/images/fondos/23-02-2017.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        .firstMenu{
            opacity: 0.8;
        }

        .logo{
               position: relative;
                z-index: 1;
        }
    </style>


    <title></title>



</head>
<body>



    <div id="services">
        <div class="indicator hidden-xs"></div>
        <ul class="dropdown-menu">
            <li>
                <a href="http://correo.unal.edu.co" target="_blank"><img src="{{ asset('public/images/icnServEmail.png') }}" width="32" height="32" alt="Correo Electrónico">Correo Electrónico</a>
            </li>
            <li>
                <a href="http://www.sia.unal.edu.co" target="_blank"><img src="{{ asset('public/images/icnServSia.png') }}" width="32" height="32" alt="Sistema de Información Académica">Sistema de Información Académica</a>
            </li>
            <li>
                <a href="http://www.sinab.unal.edu.co" target="_blank"><img src="{{ asset('public/images/icnServLibrary.png') }}" width="32" height="32" alt="Biblioteca">Biblioteca</a>
            </li>
            <li>
                <a href="http://168.176.5.43:8082/Convocatorias/indice.iface" target="_blank"><img src="{{ asset('public/images/icnServCall.png') }}" width="32" height="32" alt="Convocatorias">Convocatorias</a>
            </li>
            <li>
                <a href="http://identidad.unal.edu.co"><img src="{{ asset('public/images/icnServIdentidad.png') }}" width="32" height="32" alt="Identidad U.N.">Identidad U.N.</a>
            </li>
            <!--AgregandoLogin-->
            <li>
                <a href="{{ asset('login') }}"><img src="{{ asset('public/images/iconos/admisiones.png') }}" width="32" height="32" alt="Iniciar Sesión">Iniciar Sesión</a>
            </li>

        </ul>
    </div>
    <header id="unalTop">
        <div class="logo">
            <a href="http://unal.edu.co">
                <!--[if (gte IE 9)|!(IE)]><!-->
                <svg width="93%" height="93%">
          <image xlink:href="{{ asset('public/images/escudoUnal.svg') }}" width="100%" height="100%" class="hidden-print"/>
        </svg>

                <!--<![endif]-->
                <!--[if lt IE 9]>
          <img src="images/escudoUnal.png" width="93%" height="auto" class="hidden-print"/> 
      <![endif]-->
                <img src="{{ asset('public/images/escudoUnal_black.png') }}" class="visible-print" />
            </a>
        </div>
        <div class="seal">
            <img class="hidden-print" alt="Escudo de la República de Colombia" src="{{ asset('public/images/sealColombia.png') }}" width="66" height="66" />

            <img class="visible-print" alt="Escudo de la República de Colombia" src="{{ asset('public/images/sealColombia_black.png') }}" width="66" height="66" />
        </div>
        <div class="firstMenu">

            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
    </button>
            <div class="btn-group languageMenu hidden-xs">
                <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">es<span class="caret"></span></div>
                <ul class="dropdown-menu">
                    <li><a href="index.html#">es</a></li>
                    <li><a href="index.html#">en</a></li>
                </ul>
            </div>
            <ul class="socialLinks hidden-xs">
                <li>
                    <a href="https://www.facebook.com/UNColombia" target="_blank" class="facebook" title="Página oficial en Facebook"></a>
                </li>
                <li>
                    <a href="https://twitter.com/UNColombia" target="_blank" class="twitter" title="Cuenta oficial en Twitter"></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg" target="_blank" class="youtube" title="Canal oficial de Youtube"></a>
                </li>
                <li>
                    <a href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html" target="_blank" class="rss" title="Suscripción a canales de información RSS"></a>
                </li>
            </ul>
            <div class="navbar-default">
                <nav id="profiles">
                    <ul class="nav navbar-nav dropdown-menu">
                        <li class="item_Aspirantes #>"><a href="index.html#">Aspirantes</a></li>
                        <li class="item_Estudiantes #>"><a href="index.html#">Estudiantes</a></li>
                        <li class="item_Egresados #>"><a href="index.html#">Egresados</a></li>
                        <li class="item_Docentes #>"><a href="index.html#">Docentes</a></li>
                        <li class="item_Administrativos #>"><a href="index.html#">Administrativos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="bs-navbar" class="navbar-collapse collapse navigation">
            <div class="site-url">
                <a href="http://subdominio.unal.edu.co/">subdominio.unal.edu.co</a>
            </div>
            <div class="buscador">
                <div class="gcse-searchbox-only" data-resultsUrl="http://unal.edu.co/resultados-de-la-busqueda/" data-newWindow="true"></div>
            </div>
            <div class="mainMenu">
                <div class="btn-group"><a href="index.html#" class="btn btn-default dropdown-toggle">Item menu ejemplo</a><span class="caret-right"></span></div>
                <div class="btn-group">
                    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">Sedes<span class="caret"></span></div>
                    <ul class="dropdown-menu dropItem-16">
                        <li><a href="http://www.imani.unal.edu.co" target="_blank">Amazonia</a><span class="caret-right"></span></li>
                        <li><a href="http://www.bogota.unal.edu.co" target="_blank">Bogotá</a><span class="caret-right"></span></li>
                        <li><a href="http://www.caribe.unal.edu.co" target="_blank">Caribe</a><span class="caret-right"></span></li>
                        <li><a href="http://www.manizales.unal.edu.co" target="_blank">Manizales</a><span class="caret-right"></span></li>
                        <li><a href="http://www.medellin.unal.edu.co" target="_blank">Medellín</a><span class="caret-right"></span></li>
                        <li><a href="http://www.orinoquia.unal.edu.co" target="_blank">Orinoquia</a><span class="caret-right"></span></li>
                        <li><a href="http://www.palmira.unal.edu.co" target="_blank">Palmira</a><span class="caret-right"></span></li>
                        <li><a href="http://www.tumaco-pacifico.unal.edu.co" target="_blank">Tumaco</a><span class="caret-right"></span></li>
                    </ul>
                </div>
            </div>
            <div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
                <div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuServicios" data-target="#services">Servicios<span class="caret"> </span>
                </div>
            </div>
            <div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
                <div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuPerfiles" data-target="#profiles">Perfiles<span class="caret"> </span>
                </div>
            </div>
        </div>

    </header>

    <main class="detalle">
        <div class="breadcrumb-class">Está en:<a href="index.html" target="_self" title="Inicio">Inicio</a>/<span>Item menu ejemplo</span></div>


    @yield('content')



    </main>




<!--</body>


    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        
    </div>

    <!-- Scripts -->




    <footer class="clear">
        <nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
            <a href="http://www.legal.unal.edu.co" target="_top">Régimen Legal</a>
            <a href="http://www.unal.edu.co/dnp" target="_top">Talento humano</a>
            <a href="http://www.unal.edu.co/contratacion/" target="_top">Contratación</a>
            <a href="http://www.unal.edu.co/dnp/" target="_top">Ofertas de empleo</a>
            <a href="http://rendiciondecuentas.unal.edu.co/" target="_top">Rendición de cuentas</a>
            <a href="http://docentes.unal.edu.co/concurso-profesoral/" target="_top">Concurso docente</a>
            <a href="http://www.pagovirtual.unal.edu.co/" target="_top">Pago Virtual</a>
            <a href="http://www.unal.edu.co/control_interno/index.html" target="_top">Control interno</a>
            <a href="http://unal.edu.co/siga/" target="_top">Calidad</a>
            <a href="http://unal.edu.co/buzon-de-notificaciones/" target="_self">Buzón de notificaciones</a>
        </nav>
        <nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
            <a href="http://correo.unal.edu.co" target="_top">Correo institucional</a>
            <a href="index.html#">Mapa del sitio</a>
            <a href="http://redessociales.unal.edu.co" target="_top">Redes Sociales</a>
            <a href="index.html#">FAQ</a>
            <a href="http://unal.edu.co/quejas-y-reclamos/" target="_self">Quejas y reclamos</a>
            <a href="http://unal.edu.co/atencion-en-linea/" target="_self">Atención en línea</a>
            <a href="http://unal.edu.co/encuesta/" target="_self">Encuesta</a>
            <a href="index.html#">Contáctenos</a>
            <a href="http://www.onp.unal.edu.co" target="_top">Estadísticas</a>
            <a href="index.html#">Glosario</a>
        </nav>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-xxs-12 footer-info">
            <p class="col-sm-12 col-md-6 contacto">
                <b>Contacto página web:</b><br/> Dirección .....<br/> Edificio ...<br/> Bogotá D.C., Colombia<br/> (+57 1) 316 5000 Ext.
            </p>
            <p class="col-sm-12 col-md-6 derechos">
                © Copyright 2014<br/> Algunos derechos reservados.<br/>
                <a title="Comuníquese con el administrador de este sitio web" href="mailto:EMAIL@unal.edu.co">EMAIL@unal.edu.co</a><br/>
                <a href="index.html#">Acerca de este sitio web</a><br/> Actualización:31/05/16
            </p>
        </div>

        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 logos">
            <div class="col-xs-6 col-sm-12 col-md-6 no-padding">
                <a class="col-xs-6 col-sm-12" href="http://www.orgulloun.unal.edu.co">
                    <img class="hidden-print" alt="Orgullo UN" src="{{ asset('public/images/log_orgullo.png') }}" width="78" height="21" />
                    <img class="visible-print" alt="Orgullo UN" src="{{ asset('public/images/log_orgullo_black.png') }}" width="94" height="37" />
                </a>

                <a class="col-xs-6 col-sm-12 imgAgencia" href="http://www.agenciadenoticias.unal.edu.co/inicio.html">
                    <img class="hidden-print" alt="Agencia de noticias" src="{{ asset('public/images/log_agenc.png') }}" width="94" height="25" />
                    <img class="visible-print" alt="Agencia de noticias" src="{{ asset('public/images/log_agenc_black.png') }}" width="94" height="37" />
                </a>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6 no-padding">
                <a class="col-xs-6 col-sm-12" href="https://www.sivirtual.gov.co/memoficha-entidad/-/entidad/T0356">
                    <img alt="Trámites en línea" src="{{ asset('public/images/log_gobiern.png') }}" width="67" height="51" />
                </a>

                <a class="col-xs-6 col-sm-12" href="http://www.contaduria.gov.co/">
                    <img alt="Contaduría general de la republica" src="{{ asset('public/images/log_contra.png') }}" width="67" height="51" />
                </a>
            </div>

        </div>
    </footer>



    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
