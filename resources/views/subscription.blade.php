@extends('app')

@section('title', 'Planes y precios — DentOs Hub')

@section('meta_description', 'Planes de suscripción de DentOs Hub para clínicas dentales. Elige el plan ideal para tu consultorio.')

@section('meta_keywords', 'planes dentales, software dental precios, DentOs Hub suscripción')

@section('header-class')
    header-light
@endsection
@section('logo')
    <img class="logo-main" src="{{ asset('images/logo-black.webp') }}" alt="">
    <img class="logo-scroll" src="{{ asset('images/logo-black.webp') }}" alt="">
    <img class="logo-mobile" src="{{ asset('images/logo-black.webp') }}" alt="">
@endsection

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="pe-lg-3">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s">Membresias</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Elige el plan que impulsa tu consultorio</h2>
                            <p class="mb-0 wow fadeInUp" data-wow-delay=".6s"> Con DentosHub, tu membresía no es solo acceso
                                a una plataforma, es una herramienta profesional que optimiza la operación diaria de tu
                                consultorio, mejora el control clínico y fortalece la relación con tus pacientes. Todo en un
                                solo sistema, diseñado específicamente para odontólogos que buscan trabajar de forma más
                                organizada, eficiente y segura.<br>
                                <br>
                                Al suscribirte, obtienes acceso completo a las funciones clave de gestión clínica, sin
                                módulos ocultos ni costos adicionales. Desde la agenda y los expedientes hasta el dentagrama
                                digital y la comunicación con pacientes, DentosHub te permite centralizar tu operación y
                                proyectar una imagen moderna y profesional.<br>
                                <br>
                                Invierte en la eficiencia de tu práctica y en el crecimiento de tu consulta. Elige el plan
                                que mejor se adapte a tu ritmo de trabajo y comienza hoy mismo a gestionar tu consultorio
                                con la tecnología que tu profesión exige.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-6"> <img src="images/misc/l3.webp" class="w-100 rounded-1 mb-4" alt="">
                                <img src="images/misc/l2.webp" class="w-100 rounded-1" alt="">
                            </div>
                            <div class="col-6"> <img src="images/misc/l5.webp" class="w-100 rounded-1" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row mb-4 justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="subtitle id-color wow fadeInUp">Planes</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Membresías DentosHub</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s"> Elige el plan que mejor se adapte a tu consultorio y
                            comienza a optimizar tu gestión clínica. </p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">

                    <!-- PLAN GRATIS -->
                    <div class="col-lg-4 col-md-6">
                        <div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp">
                            <h4 class="mb-2">Gratis</h4>
                            <p class="mb-3">Para conocer la plataforma</p>
                            <ul class="ul-check text-start mb-4">
                                <li>Registro de pacientes</li>
                                <li>Agenda básica</li>

                            </ul>
                            <a href="https://admin.dentoshub.com/authentication/sign-up" class="btn-main btn-line w-100">
                                Empezar Gratis </a>
                        </div>
                    </div>

                    <!-- PLAN PROFESIONAL -->
                    <div class="col-lg-4 col-md-6">
                        <div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp"
                            style="border:2px solid var(--primary-color);">
                            <div class="mb-2"> <span class="badge bg-color text-light">Más Popular</span> </div>
                            <h4 class="mb-2">Profesional</h4>
                            <p class="mb-3">Consultorios en crecimiento</p>
                            <ul class="ul-check text-start mb-4">
                                <li>Registro de pacientes</li>
                                <li>Agenda completa</li>
                                <li>Historial clínico</li>
                                <li>Dentagrama digital</li>
                                <li>Recordatorios automáticos</li>
                                <li>Multiusuario limitado</li>
                            </ul>
                            <a href="/subscriptions#profesional" class="btn-main w-100"> Elegir Profesional </a>
                        </div>
                    </div>

                    <!-- PLAN PREMIUM -->
                    <div class="col-lg-4 col-md-6">
                        <div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp">
                            <h4 class="mb-2">Premium</h4>
                            <p class="mb-3">Clínicas y equipos completos</p>
                            <ul class="ul-check text-start mb-4">
                                <li>Todo lo del plan Profesional</li>
                                <li>Multiusuario ilimitado</li>
                                <li>Reportes y métricas</li>
                                <li>Soporte prioritario</li>
                                <li>Almacenamiento ampliado</li>
                            </ul>
                            <a href="/subscriptions#premium" class="btn-main btn-line w-100"> Elegir Premium </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content end -->
    </div>
@endsection
