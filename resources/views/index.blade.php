@extends('app')

@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section id="section-intro" class="text-light no-top no-bottom relative overflow-hidden">

            <div class="relative">
                <div class="abs abs-centered w-100 z-2">
                    <div class="container">
                        <div class="row g-4 align-items-center justify-content-between">

                            <div class="col-lg-6">
                                <div class="spacer-single sm-hide"></div>
                                <div class="subtitle">Plataforma de Gestión Dental Familiar</div>
                                <h1>Control profesional para la práctica dental.</h1>
                                <a class="btn-main btn-line fx-slide" href="/subscriptions"><span>Adquiere Tu
                                        Membresía</span></a>
                            </div>

                            <!--  <div class="d-lg-flex align-items-center">
                                            <div class="me-3">Google Rating</div>
                                            <div class="de-flex justify-content-start align-items-center">
                                                <div class="me-3">5.0</div>
                                                <div class="d-flex fs-14 d-rating me-3">
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                    <i class="fa fa-solid fa-star m-1"></i>
                                                </div>
                                            </div>
                                            <div class="me-3">Basado en 23k Reviews</div>
                                        </div>-->

                        </div>

                    </div>
                </div>

                <div class="mh-800">
                    <div class="swiper wow scaleIn">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-inner" data-bgimage="url({{ asset('images/slider/1.webp') }}) center">
                                    <div class="sw-overlay op-5"></div>
                                    <div class="gradient-edge-left z-2"></div>

                                </div>
                            </div>
                            <!-- Slides -->

                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-inner" data-bgimage="url({{ asset('images/slider/2.webp') }}) center">
                                    <div class="sw-overlay op-5"></div>
                                    <div class="gradient-edge-left z-2"></div>
                                </div>
                            </div>
                            <!-- Slides -->

                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-inner" data-bgimage="url({{ asset('images/slider/3.webp') }}) center">
                                    <div class="sw-overlay op-5"></div>
                                    <div class="gradient-edge-left z-2"></div>
                                </div>
                            </div>
                            <!-- Slides -->
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="bg-dark text-light pt-50 pb-30">
            <div class="container relative">
                <div class="row g-4 grid-divider">
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="d-flex justify-content-center">
                            <i class="fs-60 id-color icon_phone"></i>
                            <div class="ms-3">
                                <h4 class="mb-0">Necesitas Gestionar tu Clínica?</h4>
                                <p><a href="tel:+525544992158">Llámanos: +52 55 4499 2158</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="d-flex justify-content-center">
                            <i class="fs-60 id-color icon_clock"></i>
                            <div class="ms-3">
                                <h4 class="mb-0">Controla tu Agenda</h4>
                                <p>365 días 24/7</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="d-flex justify-content-center">
                            <i class="fs-60 id-color icon_mail"></i>
                            <div class="ms-3">
                                <h4 class="mb-0">Membresias</h4>
                                <p><a href="mailto:contacto@dentoshub">contacto@dentoshub.com</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class=" rounded-1 overflow-hidden wow zoomIn">
                                            <img src="{{ asset('images/misc/p1.webp') }}" class="w-100 wow scaleIn" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="col-lg-12">
                                        <div class=" rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                            <img src="{{ asset('images/misc/p2.webp') }}" class="w-100 wow scaleIn" alt=""
                                                data-wow-delay=".3s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="me-lg-3">
                            <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Acerca de DentOs Hub
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">La plataforma profesional para la
                                gestión integral de tu consultorio dental</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Dentos Hub es una solución digital
                                diseñada para odontólogos que buscan optimizar la operación de su práctica, mejorar
                                el control clínico y ofrecer una experiencia más organizada a sus pacientes. Integra
                                en un solo sistema la agenda, los expedientes clínicos y el seguimiento de
                                tratamientos, permitiéndote trabajar con mayor eficiencia y seguridad.

                                Creamos Dentos Hub para apoyar el crecimiento profesional de los dentistas,
                                facilitando la administración diaria del consultorio mediante herramientas
                                tecnológicas confiables, intuitivas y adaptadas al entorno clínico real.<br>
                                <br>
                            </p>
                            <p data-start="885" data-end="921"><strong data-start="885" data-end="921">Con tu
                                    membresía anual obtienes:</strong></p>
                            <ul data-start="922" data-end="1219">
                                <li data-start="922" data-end="969">
                                    <p data-start="924" data-end="969">Gestión centralizada de citas y horarios
                                    </p>
                                </li>
                                <li data-start="970" data-end="1018">
                                    <p data-start="972" data-end="1018">Expedientes clínicos y dentagrama digital
                                    </p>
                                </li>
                                <li data-start="1019" data-end="1069">
                                    <p data-start="1021" data-end="1069">Comunicación estructurada con tus
                                        pacientes</p>
                                </li>
                                <li data-start="1070" data-end="1120">
                                    <p data-start="1072" data-end="1120">Almacenamiento seguro de información
                                        médica</p>
                                </li>
                                <li data-start="1121" data-end="1162">
                                    <p data-start="1123" data-end="1162">Acceso desde cualquier dispositivo</p>
                                </li>
                                <li data-start="1163" data-end="1219">
                                    <p data-start="1165" data-end="1219">Implementación rápida sin instalaciones
                                        complejas</p>
                                </li>
                            </ul>
                            <p class="wow fadeInUp" data-wow-delay=".4s">&nbsp; </p>
                            <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">

                            </ul>

                            <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                href="/subscriptions"><span>Adquiere Tu Membresía</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color-op-1">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Beneficios</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Con nuestra membresía anual</h2>
                        <p class="col-lg-8 offset-lg-2 mb-0 wow fadeInUp">Dentos Hub centraliza toda la operación
                            clínica de tu consultorio en una sola plataforma segura y confiable. Desde la agenda de
                            citas hasta el historial médico y el dentagrama digital, toda la información de tus
                            pacientes está organizada, disponible en tiempo real y protegida bajo estándares de
                            confidencialidad. Esto te permite reducir errores, optimizar tiempos administrativos y
                            concentrarte en lo más importante: la atención clínica.</p>
                        <div class="spacer-single"></div>
                        <div class="spacer-half"></div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1">
                                <img src="{{ asset('images/icons/tooth-1.png') }}" class="w-70px mb-3 wow scaleIn" alt="">
                                <div class="relative mt-4 wow fadeInUp">
                                    <h4>Experiencia</h4>
                                    <p>Mejora la experiencia de tus pacientes sin aumentar tu carga de trabajo. A
                                        través de la plataforma, tus pacientes pueden agendar citas, recibir
                                        recordatorios y consultar su información relevante, lo que disminuye
                                        inasistencias y llamadas al consultorio. Una mejor comunicación fortalece la
                                        relación médico-paciente y proyecta una imagen moderna y profesional de tu
                                        práctica.</p>



                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1">
                                <img src="{{ asset('images/icons/tooth-2.png') }}" class="w-70px mb-3 wow scaleIn" alt="">
                                <div class="relative mt-4 wow fadeInUp">
                                    <h4>Gestión</h4>
                                    <p>Toma decisiones clínicas y administrativas con mayor control y visibilidad.
                                        Dentos Hub te permite dar seguimiento a tratamientos, historial de
                                        procedimientos y evolución del paciente de forma estructurada, además de
                                        ofrecerte reportes que facilitan la gestión del consultorio. Esto se traduce
                                        en procesos más claros, mayor productividad del equipo y una mejor
                                        planificación de tu agenda y recursos.</p>



                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1">
                                <img src="{{ asset('images/icons/tooth-3.png') }}" class="w-70px mb-3 wow scaleIn" alt="">
                                <div class="relative mt-4 wow fadeInUp">
                                    <h4>Plataforma</h4>
                                    <p>La membresía anual de Dentos Hub es una inversión en eficiencia, crecimiento
                                        y prestigio profesional. Al integrarte a la plataforma, formas parte de una
                                        comunidad de odontólogos que apuestan por la digitalización, el orden
                                        clínico y la mejora continua. Con una sola suscripción obtienes herramientas
                                        que elevan el nivel de tu consulta, optimizan tu operación diaria y
                                        fortalecen la confianza de tus pacientes en tu práctica.</p>


                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1">
                                <img src="{{ asset('images/icons/tooth-4.png') }}" class="w-70px mb-3 wow scaleIn" alt="">
                                <div class="relative mt-4 wow fadeInUp">
                                    <h4>Atractivo</h4>
                                    <p>Proyecta una imagen profesional y moderna ante tus pacientes. El uso de
                                        herramientas digitales fortalece la confianza, mejora la percepción del
                                        servicio y posiciona a tu consultorio como una clínica actualizada y
                                        organizada.</p>



                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                                <div class="col-lg-12 mt-5 text-center">
                                    <a class="btn-main fx-slide" href="services.html"><span>Ver todos los servicios</span></a>
                                </div>
                                -->

                </div>
            </div>
        </section>
        <!--
                    <section class="bg-dark text-light pt-60 pb-60">
                        <div class="container">

                            <div class="row g-4">
                                <div class="col-md-3 col-sm-6 text-center">
                                    <div class="de_count wow fadeInRight" data-wow-delay=".0s">
                                        <h3 class="fs-40 mb-0"><span class="timer" data-to="10000" data-speed="3000">0</span>+</h3>
                                       Doctores Eficientes
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 text-center">
                                    <div class="de_count wow fadeInRight" data-wow-delay=".2s">
                                        <h3 class="fs-40 mb-0"><span class="timer" data-to="2500" data-speed="3500">0</span>+</h3>
                                        Pacienets felices
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 text-center">
                                    <div class="de_count wow fadeInRight" data-wow-delay=".4s">
                                        <h3 class="fs-40 mb-0"><span class="timer" data-to="800" data-speed="3000">0</span>+</h3>
                                        Historial médico accesible
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 text-center">
                                    <div class="de_count wow fadeInRight" data-wow-delay=".6s">
                                        <h3 class="fs-40 mb-0"><span class="timer" data-to="15" data-speed="3000">0</span>+</h3>
                                        Dentagrama de control
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>-->

        <section>
            <div class="container">
                <div class="row gy-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">¿Por qué elegir nuestra
                            plataforma?</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Accede a una solución integral con una sola
                            membresía anual.</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s"> Sin costos ocultos ni módulos adicionales,
                            Dentos Hub te ofrece las herramientas necesarias para administrar tu práctica dental de
                            forma ordenada, segura y escalable.</p>

                        <div class="border-bottom mb-4"></div>

                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Optimiza la gestión de tu consultorio con una plataforma diseñada para
                                            odontólogos.</h5>
                                        <p class="mb-0">Dentos Hub integra agenda, expedientes y seguimiento de
                                            tratamientos en un entorno digital intuitivo que se adapta a tu flujo de
                                            trabajo diario, sin complicaciones ni procesos innecesarios.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Reduce tiempos administrativos y aumenta la eficiencia de tu equipo.
                                        </h5>
                                        <p class="mb-0">Automatiza tareas clave como confirmación de citas y
                                            organización de expedientes, permitiendo que tú y tu personal se
                                            enfoquen en la atención clínica y no en el papeleo.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Agenda digital centralizada</h5>
                                        <p class="mb-0">con control total de citas y horarios.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Expedientes clínicos y dentagrama en un solo sistema,</h5>
                                        <p class="mb-0">Recordatorios automáticos para pacientes que reducen
                                            inasistencias.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="row g-4 align-items-center">
                            <div class="col-6 text-end">
                                <div class="w-80 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                    <img src="{{ asset('images/misc/s2.webp') }}" class="w-100 wow scaleIn" alt="">
                                </div>
                                <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                    <img src="{{ asset('images/misc/s3.webp') }}" class="w-100 wow scaleIn" alt="">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                    <img src="{{ asset('images/misc/p3.webp') }}" class="w-100 wow scaleIn" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="bg-color-op-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Conozca a nuestros Miembros Destacados</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Comprometidos con tu sonrisa</h2>
                        <p class="wow fadeInUp">Nuestro experimentado equipo dental está aquí para que cada visita
                            sea positiva y personalizada. Con delicadeza y un corazón atento.</p>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="relative rounded-1 overflow-hidden">
                            <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                <img src="{{ asset('images/team/1.webp') }}" class="w-100 wow scaleIn" alt="">
                            </div>

                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                    <h4 class="mb-0">Dra. Juana Peréz</h4>
                                    <p class="mb-2">Dentista Destacado</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="relative rounded-1 overflow-hidden">
                            <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                <img src="{{ asset('images/team/2.webp') }}" class="w-100 wow scaleIn" alt="">
                            </div>

                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                    <h4 class="mb-0">Dra. Maya Lin</h4>
                                    <p class="mb-2">Dentista Cosmetica Destacada</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="relative rounded-1 overflow-hidden">
                            <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                <img src="{{ asset('images/team/3.webp') }}" class="w-100 wow scaleIn" alt="">
                            </div>

                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                    <h4 class="mb-0">Dr. Miguel Reyes</h4>
                                    <p class="mb-2">Especialista en Pediatria</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="relative rounded-1 overflow-hidden">
                            <div class="rounded-1 overflow-hidden wow fadeIn zoomIn">
                                <img src="{{ asset('images/team/4.webp') }}" class="w-100 wow scaleIn" alt="">
                            </div>

                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="p-2 rounded-10 m-3 text-center bg-white wow fadeInDown">
                                    <h4 class="mb-0">Dr. Jaime Castro</h4>
                                    <p class="mb-2">Endodoncista</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Todo lo que necesitas
                            saber</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Preguntas Frecuentes</h2>
                    </div>

                    <div class="col-lg-7">
                        <div class="accordion s2 wow fadeInUp">
                            <div class="accordion-section">
                                <div class="accordion-section-title" data-tab="#accordion-a1">
                                    ¿La información de mis pacientes está segura en Dentos Hub?
                                </div>
                                <div class="accordion-section-content" id="accordion-a1">Sí. Dentos Hub utiliza
                                    protocolos de seguridad para proteger los datos clínicos y el acceso a la
                                    plataforma está restringido únicamente al personal autorizado de tu consultorio.
                                    La información se almacena de forma segura y cumple con buenas prácticas de
                                    manejo de datos médicos.
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a2">
                                    ¿Necesito instalar algún programa en mis computadoras o dispositivos?
                                </div>
                                <div class="accordion-section-content" id="accordion-a2">
                                    No. Dentos Hub funciona desde el navegador en cualquier dispositivo con conexión
                                    a internet, ya sea computadora, tablet o celular. No requiere instalaciones ni
                                    configuraciones técnicas complejas.
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a3">
                                    ¿Cuánto tiempo me tomará comenzar a usar la plataforma?
                                </div>
                                <div class="accordion-section-content" id="accordion-a3">
                                    El registro y configuración inicial son rápidos. En pocos minutos puedes crear
                                    tu cuenta, configurar tu agenda y comenzar a registrar pacientes, sin afectar la
                                    operación de tu consultorio.
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a4">
                                    ¿Qué incluye exactamente la membresía anual?
                                </div>
                                <div class="accordion-section-content" id="accordion-a4">
                                    La membresía incluye acceso completo a la plataforma: agenda de citas,
                                    expedientes clínicos, historial de tratamientos, dentagrama digital y
                                    herramientas de comunicación con pacientes, sin costos adicionales por módulo.
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a5">
                                    ¿Dentos Hub funciona para clínicas con varios doctores y asistentes?
                                </div>
                                <div class="accordion-section-content" id="accordion-a5">
                                    Sí. Dentos Hub permite organizar el trabajo de varios profesionales dentro de
                                    una misma cuenta, facilitando la gestión de pacientes, horarios y expedientes de
                                    forma centralizada.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color-op-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Testimoniales</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Nuestros Doctores Felices</h2>
                        <p class="wow fadeInUp">Únase a miles de Dentistas y pacientes satisfechos que confían en
                            nosotros para una atención y gestión experta. ¡Su experiencia dental perfecta comienza
                            aquí!</p>
                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots text-center">
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/1.webp') }}">
                                        <div>Dr. Andres Márquez, <span>Odontopediatra, CDMX</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“Desde que implementé Dentos Hub en mi
                                        consultorio, la organización de citas y expedientes mejoró notablemente.
                                        Ahora mi equipo dedica menos tiempo a tareas administrativas y más a la
                                        atención de pacientes.”
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/2.webp') }}">
                                        <div>Dr. Pablo Reyes, <span>Cirujano Dentista, Monterrey</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“La integración de historial clínico y
                                        dentagrama electrónico facilitó el seguimiento de tratamientos complejos.
                                        Mis diagnósticos son ahora más precisos y el flujo de trabajo está
                                        perfectamente estructurado.”</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/3.webp') }}">
                                        <div>Dr. Leonel Gómez, <span>Clínica Dental Integral, Guadalajara</span>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“Dentos Hub nos permitió reducir las
                                        inasistencias gracias a los recordatorios automáticos. Mis pacientes valoran
                                        la comunicación y yo tengo una agenda más eficiente.”</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/4.webp') }}">
                                        <div>Dr. Luis Ortega, <span>Odontólogo General, Querétaro</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“Como consultorio con varios doctores,
                                        necesitábamos una herramienta que centralizara la información. Dentos Hub
                                        resolvió eso y ahora todos tenemos acceso rápido a los datos que
                                        necesitamos.”</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/5.webp') }}">
                                        <div>Dr. Mariano Del Valle,<span> Estética Dental, Puebla</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“La curva de aprendizaje fue mínima y en
                                        poco tiempo estábamos usando la plataforma como parte natural de nuestra
                                        operación. La implementación fue muy sencilla.”</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/6.webp') }}">
                                        <div>Dr. Ricardo Torres, <span>Endodoncista, Tijuana</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“Me encanta que puedo acceder a la
                                        información desde cualquier dispositivo. Ya no dependo de software instalado
                                        ni archivos dispersos.”</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/7.webp') }}">
                                        <div>Dr. Patricio Ruiz,<span> Odontóloga Restauradora, León</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“La claridad en la presentación de
                                        historiales y el dentagrama digital nos ha ayudado a explicar tratamientos a
                                        los pacientes con mayor profesionalismo.”</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="{{ asset('images/testimonial/8.webp') }}">
                                        <div>Dr. Andrés Castillo, <span>Periodoncista, Mérida</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">“Dentos Hub me ha dado confianza
                                        organizativa. Saber que mis expedientes están seguros y bien estructurados
                                        mejora incluso mi planificación diaria.”</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color text-light pt-40 pb-40">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">¿Es fácil usar DentOs Hub?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main btn-line fx-slide" href="/subscriptions"><span>Adquiere Tu
                                Membresía</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
    <div class="col-lg-6 offset-lg-3">
        <div class="p-40 bg-color-op-1 rounded-1">
            <h3>Contáctanos</h3>
            <form name="contactForm" id="contact_form" method="post">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Tu Nombre"
                        required>
                </div>

                <div class="mb-4">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Tu Correo"
                        required>
                </div>

                <div class="mb-4">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Tu Teléfono"
                        required>
                </div>

                <div class="mb-4 mb20">
                    <textarea name="message" id="message" class="form-control" placeholder="Tu Mensaje" required></textarea>
                </div>


                <div id='submit' class="mt20">
                    <input type='submit' id='send_message' value='Mandar Mensaje' class="btn-main">
                </div>

                <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                <div id="success_message" class='success'>
                    Tu mensaje se ha enviado correctamente. Actualiza esta página si quieres enviar más mensajes.
                </div>
                <div id="error_message" class='error'>
                    Lo sentimos, hubo un error al enviar su formulario.
                </div>
            </form>
        </div>
    </div>
@endsection
