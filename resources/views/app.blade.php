<!DOCTYPE html>
<html lang="es">

<head>
    <title>@yield('title', 'DentOs Hub — Gestión clínica dental, en un solo lugar.')</title>

    <link rel="icon" href="{{ asset('images/icon.webp') }}" type="image/webp" sizes="16x16">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('meta_description', 'DentOs Hub — Gestión clínica dental, en un solo lugar.')">

    <meta name="keywords" content="@yield('meta_keywords', 'software dental, gestión clínica dental, DentOs Hub')">

    <meta name="author" content="@yield('meta_author', 'DentOs Hub')">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        <!-- header begin -->
        <header class="transparent scroll-light @yield('header-class')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="/">
                                        @section('logo')
                                            <img class="logo-main" src="{{ asset('images/logo-white.webp') }}"
                                                alt="">
                                            <img class="logo-scroll" src="{{ asset('images/logo-black.webp') }}"
                                                alt="">
                                            <img class="logo-mobile" src="{{ asset('images/logo-white.webp') }}"
                                                alt="">
                                        @show
                                    </a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainemenu begin -->
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Inicio</a>
                                    </li>
                                    <li><a class="menu-item"
                                            href="https://ignisia-frontend.vercel.app/authentication/sign-in">Iniciar
                                            Sesión</a>
                                    </li>
                                    <li><a class="menu-item"
                                            href="https://ignisia-frontend.vercel.app/authentication/sign-up">Registro</a>
                                    </li>
                                    <li><a class="menu-item" href="/subscriptions">Membresías</a></li>
                                </ul>
                                <!-- mainmenu end -->
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="/subscriptions" class="btn-main fx-slide"><span>Adquiere Tu
                                            Membresía</span></a>
                                    <span id="menu-btn"></span>
                                </div>

                                <div id="btn-extra">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        @yield('content')

        <!-- footer begin -->
        <footer class="section-dark">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <img src="{{ asset('images/logo-white.webp') }}" class="logo-footer" alt="">
                        <div class="spacer-20"></div>
                        <p>En Dentos Hub, nos dedicamos a desarrollar soluciones digitales que apoyan el trabajo diario
                            de los odontólogos. Nuestra plataforma integra herramientas de gestión clínica y
                            administrativa que permiten organizar pacientes, tratamientos y agenda de forma eficiente,
                            utilizando tecnología diseñada específicamente para las necesidades reales del consultorio
                            dental.

                            A través de Dentos Hub, los doctores pueden optimizar sus procesos, mejorar el control
                            clínico y ofrecer un servicio más organizado y profesional, fortaleciendo la confianza de
                            sus pacientes y facilitando el crecimiento de su práctica mediante una operación más
                            estructurada y moderna.</p>

                        <div class="social-icons mb-sm-30">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="widget">
                                    <h5>Plataforma</h5>
                                    <ul>
                                        <li><a href="/">Inicio</a></li>
                                        <li><a href="services.html">Crea tu cuenta</a></li>
                                        <li><a href="gallery.html">Membresías</a></li>
                                        <li><a href="contact.html">Inicia Sesión</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                        <div class="widget">
                            <h5>Contáctanos</h5>
                            <div class="fw-bold text-white"><i class="icofont-location-pin me-2 id-color"></i>
                                Ubicación</div>
                            México City y Guadalajara, Jalisco

                            <div class="spacer-20"></div>

                            <div class="fw-bold text-white"><i class="icofont-phone me-2 id-color"></i>Llámanos</div>
                            +55 5555 5555

                            <div class="spacer-20"></div>

                            <div class="fw-bold text-white"><i class="icofont-envelope me-2 id-color"></i>Mándanos un
                                mensaje</div>
                            contacto@dentoshub.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    Derechos Reservados 2026 - DentOs Hub</div>
                                <ul class="menu-simple">
                                    <li><a href="#">Términos y Condiciones</a></li>
                                    <li><a href="#">Políticas de Privacidad</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="{{ asset('images/logo-white.webp') }}" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>DentOs Hub</h5>
            <ul class="ul-check">
                <li><a href="service-general-dentistry.html">Agenda digital inteligente</a></li>
                <li><a href="service-cosmetic-dentistry.html">Expediente y dentagrama en línea</a></li>
                <li><a href="service-pediatric-dentistry.html">Datos clínicos seguros</a></li>
                <li><a href="service-restorative-dentistry.html">Menos administración, más clínica</a></li>
                <li><a href="service-preventive-dentistry.html">Acceso desde cualquier dispositivo</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contáctanos</h5>
            <div><i class="icofont-clock-time me-2 op-5"></i>Lunes - Domingo 24/7</div>
            <div><i class="icofont-location-pin me-2 op-5"></i>México </div>
            <div><i class="icofont-envelope me-2 op-5"></i>contacto@dentoshub.com </div>

            <div class="spacer-30-line"></div>

            <h5>Acerca de Nosotros</h5>
            <p>En Dentos Hub desarrollamos una plataforma digital especializada para apoyar la gestión integral de
                consultorios dentales, facilitando el control de agenda, expedientes clínicos y seguimiento de
                tratamientos en un solo entorno seguro y eficiente.

                Nuestro objetivo es brindar a los odontólogos herramientas tecnológicas confiables y fáciles de usar que
                optimicen sus procesos diarios, mejoren la organización del consultorio y fortalezcan la atención
                profesional que ofrecen a sus pacientes, impulsando así el crecimiento y modernización de su práctica.
            </p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

                <a href="#"><i class="fa-brands fa-instagram"></i></a>

                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/custom-swiper-1.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeTll0sAAAAAD6PvBT34i2gx2Pqs0blx8MLKvz_"></script>
    {{-- <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?LR-verbose&snipver=1&LiveTest=1"></' + 'script>')
    </script> --}}
</body>

</html>
