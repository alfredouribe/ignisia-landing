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

        {{-- Hero --}}
        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="pe-lg-3">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s">Membresias</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Elige el plan que impulsa tu consultorio</h2>
                            <p class="mb-0 wow fadeInUp" data-wow-delay=".6s">Con DentosHub, tu membresía no es solo acceso
                                a una plataforma, es una herramienta profesional que optimiza la operación diaria de tu
                                consultorio, mejora el control clínico y fortalece la relación con tus pacientes. Todo en un
                                solo sistema, diseñado específicamente para odontólogos que buscan trabajar de forma más
                                organizada, eficiente y segura.<br><br>
                                Al suscribirte, obtienes acceso completo a las funciones clave de gestión clínica, sin
                                módulos ocultos ni costos adicionales. Desde la agenda y los expedientes hasta el dentagrama
                                digital y la comunicación con pacientes, DentosHub te permite centralizar tu operación y
                                proyectar una imagen moderna y profesional.<br><br>
                                Invierte en la eficiencia de tu práctica y en el crecimiento de tu consulta. Elige el plan
                                que mejor se adapte a tu ritmo de trabajo y comienza hoy mismo a gestionar tu consultorio
                                con la tecnología que tu profesión exige.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="images/misc/l3.webp" class="w-100 rounded-1 mb-4" alt="">
                                <img src="images/misc/l2.webp" class="w-100 rounded-1" alt="">
                            </div>
                            <div class="col-6">
                                <img src="images/misc/l5.webp" class="w-100 rounded-1" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Plans section --}}
        <section>
            <div class="container">
                <div class="row mb-4 justify-content-center text-center">
                    <div class="col-lg-6">
                        <div class="subtitle id-color wow fadeInUp">Planes</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Membresías DentosHub</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Elige el plan que mejor se adapte a tu consultorio y
                            comienza a optimizar tu gestión clínica.</p>
                    </div>
                </div>

                {{-- Status & notification banners (injected by JS) --}}
                <div id="sub-banners" class="mb-3"></div>

                {{-- Loading spinner --}}
                <div id="sub-loading" class="text-center py-5">
                    <div class="spinner-border" style="color: var(--primary-color);" role="status">
                        <span class="visually-hidden">Cargando...</span>
                    </div>
                    <p class="mt-3 text-muted">Cargando planes...</p>
                </div>

                {{-- Plan cards (injected by JS) --}}
                <div id="sub-plans" class="row g-4 justify-content-center" style="display:none;"></div>

                {{-- WhatsApp section (injected by JS, authenticated + has_whatsapp) --}}
                <div id="sub-whatsapp"></div>

                {{-- Guest CTA --}}
                <div id="sub-guest-cta" class="text-center mt-4" style="display:none;">
                    <p class="text-muted">
                        ¿Ya tienes una cuenta?
                        <a href="https://ignisia-frontend.vercel.app/authentication/sign-in">Inicia sesión en DentosHub</a>
                        para gestionar tu suscripción directamente aquí.
                    </p>
                </div>
            </div>
        </section>
    </div>

    {{-- ======================== MODAL: Confirmar plan gratuito ======================== --}}
    <div class="modal fade" id="modal-free-plan" tabindex="-1" aria-labelledby="freePlanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="freePlanModalLabel">
                        Cambiar a plan <span id="free-plan-name"></span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p>Al confirmar, tu cuenta cambiará inmediatamente al plan
                        <strong><span id="free-plan-name-2"></span></strong>.</p>
                    <p class="text-muted small mb-0">Si tenías un plan de pago, perderás acceso a sus funciones al completar el cambio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn-main" id="free-plan-confirm-btn">Confirmar cambio</button>
                </div>
            </div>
        </div>
    </div>

    {{-- ======================== MODAL: Cambio a plan de pago ======================== --}}
    <div class="modal fade" id="modal-paid-plan" tabindex="-1" aria-labelledby="paidPlanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paidPlanModalLabel">
                        Cambiar a plan <span id="paid-plan-name"></span>
                        <small class="text-muted ms-2" id="paid-plan-price"></small>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <form id="paid-plan-form" novalidate>
                    <div class="modal-body">
                        <div id="paid-plan-banking" class="mb-3"></div>
                        <p class="text-muted small mb-3">
                            Realiza la transferencia con los datos anteriores y sube el comprobante.
                            Tu solicitud será activada en un plazo de 24 horas hábiles.
                        </p>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Comprobante de transferencia <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="voucher" class="form-control"
                                   accept=".jpg,.jpeg,.png,.pdf" required>
                            <div class="form-text">Formatos: JPG, PNG, PDF. Máximo 5 MB.</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Fecha de transferencia <span class="text-danger">*</span>
                                </label>
                                <input type="date" name="transfer_date" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Monto transferido (MXN) <span class="text-danger">*</span>
                                </label>
                                <input type="number" name="amount" class="form-control"
                                       min="0" step="0.01" placeholder="650.00" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Referencia / folio <span class="text-muted small">(opcional)</span>
                            </label>
                            <input type="text" name="reference" class="form-control"
                                   placeholder="Número de referencia bancaria">
                        </div>

                        <div class="alert alert-danger" id="paid-plan-error" style="display:none;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn-main" id="paid-plan-submit-btn">Enviar solicitud</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ======================== MODAL: Comprar créditos WhatsApp ======================== --}}
    <div class="modal fade" id="modal-whatsapp-credits" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="whatsappModalLabel">Comprar créditos WhatsApp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <form id="whatsapp-credits-form" novalidate>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Mensajes adicionales <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="whatsapp_credits_amount" id="wa-credits-qty"
                                   class="form-control" min="1" step="1" placeholder="100" required
                                   oninput="subUpdateWaTotal()">
                            <div class="form-text">
                                Precio por mensaje: <strong id="wa-price-per-msg">$1.50</strong> MXN
                            </div>
                        </div>

                        <div class="p-3 rounded-1 mb-3" style="background:#f0fdf4;border:1px solid #bbf7d0;color:#166534;">
                            Total estimado: <strong id="wa-credits-total">$0.00 MXN</strong>
                        </div>

                        <div id="whatsapp-banking" class="mb-3"></div>
                        <p class="text-muted small mb-3">
                            Realiza la transferencia y sube el comprobante.
                            Los créditos se acreditarán en un plazo de 24 horas hábiles.
                        </p>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Comprobante de transferencia <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="voucher" class="form-control"
                                   accept=".jpg,.jpeg,.png,.pdf" required>
                            <div class="form-text">Formatos: JPG, PNG, PDF. Máximo 5 MB.</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Fecha de transferencia <span class="text-danger">*</span>
                                </label>
                                <input type="date" name="transfer_date" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Monto transferido (MXN) <span class="text-danger">*</span>
                                </label>
                                <input type="number" name="amount" class="form-control"
                                       min="0" step="0.01" placeholder="150.00" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Referencia / folio <span class="text-muted small">(opcional)</span>
                            </label>
                            <input type="text" name="reference" class="form-control"
                                   placeholder="Número de referencia bancaria">
                        </div>

                        <div class="alert alert-danger" id="whatsapp-credits-error" style="display:none;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn-main" id="whatsapp-credits-submit-btn">Enviar solicitud</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
(function () {
    'use strict';

    var API_BASE = '{{ env("API_URL", "") }}';

    // --- Token: read from ?token= URL param or localStorage ---
    var TOKEN = (function () {
        var p = new URLSearchParams(window.location.search);
        var t = p.get('token');
        if (t) {
            localStorage.setItem('dentos_token', t);
            var u = new URL(window.location);
            u.searchParams.delete('token');
            window.history.replaceState({}, '', u);
            return t;
        }
        return localStorage.getItem('dentos_token');
    })();

    var STATE = {
        plans: [],
        banking: null,
        subscription: null,
        whatsapp: null,
        upgradeStatus: null,
        currentPlanId: null,
        extraPricePerMsg: 1.50,
    };

    // --- HTTP helper ---
    async function api(path, opts) {
        opts = opts || {};
        var headers = { 'Accept': 'application/json' };
        if (TOKEN) headers['Authorization'] = 'Bearer ' + TOKEN;
        // Do NOT set Content-Type for FormData; browser must set it with boundary
        if (opts.body && !(opts.body instanceof FormData)) {
            headers['Content-Type'] = 'application/json';
        }
        var res = await fetch(API_BASE + path, Object.assign({}, opts, { headers: headers }));
        var json = await res.json().catch(function () { return null; });
        if (!res.ok) {
            if (res.status === 401) { localStorage.removeItem('dentos_token'); TOKEN = null; }
            throw { status: res.status, data: json };
        }
        return json;
    }

    // --- Bootstrap modal shorthand ---
    function bsModal(id) {
        return new bootstrap.Modal(document.getElementById(id));
    }
    function bsModalClose(id) {
        var m = bootstrap.Modal.getInstance(document.getElementById(id));
        if (m) m.hide();
    }

    // --- Helpers ---
    function esc(s) { return String(s || '').replace(/\\/g, '\\\\').replace(/'/g, "\\'"); }

    function fmtDate(str) {
        if (!str) return '';
        return new Date(str + 'T12:00:00').toLocaleDateString('es-MX', {
            day: 'numeric', month: 'long', year: 'numeric'
        });
    }

    function fmtPrice(p) {
        return p === 0 ? 'Gratis' : '$' + p + ' MXN/mes';
    }

    function limitLabel(v) {
        return (v === null || v === undefined) ? 'Ilimitado' : v;
    }

    function planFeatures(plan) {
        var li = [];
        if (plan.max_patients !== undefined && plan.max_patients !== null) {
            li.push(plan.max_patients + ' pacientes');
        } else if (plan.max_patients === null) {
            li.push('Pacientes ilimitados');
        }
        if (plan.max_clinics !== undefined && plan.max_clinics !== null) {
            li.push(plan.max_clinics + ' clínica' + (plan.max_clinics !== 1 ? 's' : ''));
        } else if (plan.max_clinics === null) {
            li.push('Clínicas ilimitadas');
        }
        if (plan.max_users !== undefined && plan.max_users !== null) {
            li.push(plan.max_users + ' usuario' + (plan.max_users !== 1 ? 's' : ''));
        } else if (plan.max_users === null) {
            li.push('Usuarios ilimitados');
        }
        if (plan.has_appointments)    li.push('Agenda y citas');
        if (plan.has_odontogram)      li.push('Odontograma digital');
        if (plan.has_medical_history) li.push('Historial clínico');
        if (plan.has_reports)         li.push('Reportes y métricas');
        if (plan.has_export)          li.push('Exportación de datos');
        if (plan.has_whatsapp) {
            li.push('WhatsApp (' + plan.whatsapp_messages_included + ' msg/mes)');
        }
        return li.map(function (x) { return '<li>' + x + '</li>'; }).join('');
    }

    function bankingHtml() {
        var b = STATE.banking;
        if (!b) return '';
        var rows = '';
        if (b.bank_name)    rows += '<li><strong>Banco:</strong> '    + b.bank_name    + '</li>';
        if (b.bank_holder)  rows += '<li><strong>Titular:</strong> '  + b.bank_holder  + '</li>';
        if (b.bank_clabe)   rows += '<li><strong>CLABE:</strong> '    + b.bank_clabe   + '</li>';
        if (b.bank_account) rows += '<li><strong>Cuenta:</strong> '   + b.bank_account + '</li>';
        if (b.bank_concept) rows += '<li><strong>Concepto:</strong> ' + b.bank_concept + '</li>';
        return '<div class="p-3 rounded-1 mb-3" style="background:#f8f9fa;border:1px solid #dee2e6;">' +
            '<p class="fw-bold mb-2 small"><i class="icofont-bank me-1 id-color"></i>Datos para transferencia</p>' +
            '<ul class="list-unstyled mb-0 small">' + rows + '</ul></div>';
    }

    function showLoading(v) {
        document.getElementById('sub-loading').style.display = v ? 'block' : 'none';
    }

    function addBanner(type, html) {
        var div = document.createElement('div');
        div.className = 'alert mb-3';
        if (type === 'warning') {
            div.style.cssText = 'background:#fff3cd;border:1px solid #ffc107;color:#856404;';
        } else {
            div.className += ' alert-' + type;
        }
        div.innerHTML = html;
        document.getElementById('sub-banners').appendChild(div);
    }

    function parsePlans(data) {
        if (!data) return;
        STATE.plans   = data.plans   || (data.data && data.data.plans)   || (Array.isArray(data) ? data : []);
        STATE.banking = data.banking || (data.data && data.data.banking) || null;
    }

    // --- Init ---
    async function init() {
        try {
            if (!TOKEN) {
                parsePlans(await api('/api/plans').catch(function () { return null; }));
                renderGuestPlans();
                return;
            }

            var results = await Promise.allSettled([
                api('/api/plans'),
                api('/api/me'),
                api('/api/welcome-dashboard'),
                api('/api/upgrade-requests/status'),
            ]);

            parsePlans(results[0].value);

            var me = results[1].value && results[1].value.data;
            if (!me || me.role !== 'cliente') {
                renderGuestPlans();
                return;
            }

            STATE.subscription   = me.subscription || null;
            STATE.currentPlanId  = me.subscription && me.subscription.plan ? me.subscription.plan.id : null;
            STATE.extraPricePerMsg = (me.subscription && me.subscription.plan && me.subscription.plan.whatsapp_extra_price)
                ? me.subscription.plan.whatsapp_extra_price : 1.50;

            var dash = results[2].value && results[2].value.data;
            if (dash) STATE.whatsapp = dash.whatsapp || null;

            STATE.upgradeStatus = results[3].value && results[3].value.data ? results[3].value.data : null;

            renderClientView();
        } catch (e) {
            console.error(e);
            renderGuestPlans();
        }
    }

    // =============================================================
    // Guest view
    // =============================================================
    function renderGuestPlans() {
        showLoading(false);
        var grid = document.getElementById('sub-plans');
        grid.style.display = '';
        grid.innerHTML = STATE.plans.length
            ? STATE.plans.map(guestCard).join('')
            : staticFallback();
        document.getElementById('sub-guest-cta').style.display = '';
    }

    function guestCard(plan, i) {
        var isPop = plan.is_popular;
        var border = isPop ? 'border:2px solid var(--primary-color);' : '';
        var btnCls = plan.price === 0
            ? 'btn-main btn-line text-dark text-over-light'
            : 'btn-main';
        var priceHtml = plan.price === 0
            ? '<span class="fs-4 fw-bold">Gratis</span>'
            : '<span class="fs-4 fw-bold">$' + plan.price + '</span> <small class="text-muted">MXN/mes</small>';
        return '<div class="col-lg-4 col-md-6">' +
            '<div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp" style="' + border + '" data-wow-delay="' + (i * 0.2).toFixed(1) + 's">' +
            (isPop ? '<div class="mb-2"><span class="badge bg-color text-light">Más Popular</span></div>' : '') +
            '<h4 class="mb-1">' + plan.name + '</h4>' +
            '<div class="mb-2">' + priceHtml + '</div>' +
            '<p class="mb-3 text-muted small">' + (plan.description || '') + '</p>' +
            '<ul class="ul-check text-start mb-4">' + planFeatures(plan) + '</ul>' +
            '<a href="https://ignisia-frontend.vercel.app/authentication/sign-in" class="' + btnCls + ' w-100">' +
            (plan.price === 0 ? 'Empezar Gratis' : 'Elegir ' + plan.name) +
            '</a></div></div>';
    }

    function staticFallback() {
        return '<div class="col-lg-4 col-md-6"><div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp">' +
            '<h4 class="mb-2">Gratis</h4><p class="mb-3">Para conocer la plataforma</p>' +
            '<ul class="ul-check text-start mb-4"><li>Registro de pacientes</li><li>Agenda básica</li></ul>' +
            '<a href="https://ignisia-frontend.vercel.app/authentication/sign-in" class="btn-main btn-line text-over-light text-dark w-100">Empezar Gratis</a>' +
            '</div></div>' +
            '<div class="col-lg-4 col-md-6"><div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp" style="border:2px solid var(--primary-color);">' +
            '<div class="mb-2"><span class="badge bg-color text-light">Más Popular</span></div>' +
            '<h4 class="mb-2">Pro</h4><p class="mb-3">Consultorios en crecimiento</p>' +
            '<ul class="ul-check text-start mb-4"><li>Agenda completa</li><li>Historial clínico</li><li>Odontograma digital</li><li>WhatsApp (200 msg/mes)</li></ul>' +
            '<a href="https://ignisia-frontend.vercel.app/authentication/sign-in" class="btn-main w-100">Elegir Pro</a>' +
            '</div></div>';
    }

    // =============================================================
    // Client view
    // =============================================================
    function renderClientView() {
        showLoading(false);
        renderStatusBanners();
        renderClientPlans();
        var hasPlan = STATE.subscription && STATE.subscription.plan;
        if (hasPlan && STATE.subscription.plan.has_whatsapp) {
            renderWhatsapp();
        }
    }

    function renderStatusBanners() {
        var sub = STATE.subscription;
        var status = sub ? sub.status : null;
        var up  = STATE.upgradeStatus;

        if (!sub) {
            addBanner('info', '<i class="icofont-info-circle me-2"></i><strong>Sin plan activo</strong> — Elige un plan para comenzar a usar DentosHub.');
        } else if (status === 'grace_period') {
            addBanner('warning',
                '<i class="icofont-warning me-2"></i><strong>Período de gracia</strong> — ' +
                'Tu suscripción vence el <strong>' + fmtDate(sub.grace_ends_at) + '</strong>. ' +
                'Renueva tu plan para mantener el acceso completo.');
        } else if (status === 'suspended') {
            addBanner('danger',
                '<i class="icofont-ban me-2"></i><strong>Cuenta suspendida</strong> — ' +
                'Tu suscripción está suspendida. Elige un plan para reactivarla.');
        }

        if (up && up.status === 'pending') {
            var label = up.type === 'plan_upgrade'
                ? 'cambio al plan <strong>' + (up.plan ? up.plan.name : '') + '</strong>'
                : 'compra de <strong>' + up.whatsapp_credits_amount + ' créditos WhatsApp</strong>';
            addBanner('info',
                '<i class="icofont-clock-time me-2"></i>Solicitud de ' + label +
                ' <strong>en revisión</strong>. Te notificaremos por correo al ser procesada.');
        } else if (up && up.status === 'rejected') {
            addBanner('warning',
                '<i class="icofont-close-circled me-2"></i>Tu última solicitud fue <strong>rechazada</strong>' +
                (up.notes ? ': ' + up.notes : '') + '. Puedes enviar una nueva solicitud.');
        }
    }

    function renderClientPlans() {
        var grid = document.getElementById('sub-plans');
        grid.style.display = '';
        var hasPending = STATE.upgradeStatus && STATE.upgradeStatus.status === 'pending';
        grid.innerHTML = STATE.plans.map(function (p, i) {
            return clientCard(p, i, hasPending);
        }).join('');
    }

    function clientCard(plan, i, hasPending) {
        var isCurrent = plan.id === STATE.currentPlanId;
        var isPop = plan.is_popular;
        var border = isCurrent
            ? 'border:2px solid var(--primary-color);'
            : (isPop ? 'border:2px solid var(--primary-color);opacity:.85;' : '');

        var priceHtml = plan.price === 0
            ? '<span class="fs-4 fw-bold">Gratis</span>'
            : '<span class="fs-4 fw-bold">$' + plan.price + '</span> <small class="text-muted">MXN/mes</small>';

        var badge = isCurrent
            ? '<div class="mb-2"><span class="badge bg-color text-light"><i class="icofont-check me-1"></i>Tu plan actual</span></div>'
            : (isPop ? '<div class="mb-2"><span class="badge bg-color text-light">Más Popular</span></div>' : '');

        var cta;
        if (isCurrent) {
            cta = '<button class="btn-main w-100" disabled style="opacity:.6;cursor:default;">' +
                  '<i class="icofont-check-circled me-1"></i>Plan activo</button>';
        } else if (hasPending) {
            cta = '<button class="btn-main btn-line text-dark text-over-light w-100" disabled style="opacity:.5;cursor:default;">Solicitud pendiente</button>';
        } else if (plan.price === 0) {
            cta = '<button class="btn-main btn-line text-dark text-over-light w-100" ' +
                  'onclick="subOpenFree(' + plan.id + ',\'' + esc(plan.name) + '\')">' +
                  'Cambiar a plan gratuito</button>';
        } else {
            cta = '<button class="btn-main w-100" ' +
                  'onclick="subOpenPaid(' + plan.id + ',\'' + esc(plan.name) + '\',' + plan.price + ')">' +
                  'Cambiar a ' + plan.name + '</button>';
        }

        return '<div class="col-lg-4 col-md-6">' +
            '<div class="border-gray p-40 h-100 rounded-1 text-center wow fadeInUp" style="' + border + '" data-wow-delay="' + (i * 0.2).toFixed(1) + 's">' +
            badge +
            '<h4 class="mb-1">' + plan.name + '</h4>' +
            '<div class="mb-2">' + priceHtml + '</div>' +
            '<p class="mb-3 text-muted small">' + (plan.description || '') + '</p>' +
            '<ul class="ul-check text-start mb-4">' + planFeatures(plan) + '</ul>' +
            cta +
            '</div></div>';
    }

    function renderWhatsapp() {
        var wa  = STATE.whatsapp;
        var sub = STATE.subscription;
        var included = sub && sub.plan ? (sub.plan.whatsapp_messages_included || 0) : 0;
        var hasPending = STATE.upgradeStatus && STATE.upgradeStatus.status === 'pending';

        var usageHtml;
        if (wa) {
            var total = wa.included_total || included || 1;
            var pct   = Math.min(100, Math.round((wa.used_this_month / total) * 100));
            var barColor = pct >= 90 ? '#ef4444' : pct >= 70 ? '#f59e0b' : 'var(--primary-color)';
            usageHtml =
                '<div class="mb-3">' +
                    '<div class="d-flex justify-content-between mb-1 small">' +
                        '<span>Usados este mes: <strong>' + wa.used_this_month + '</strong></span>' +
                        '<span>Incluidos: <strong>' + wa.included_total + '</strong></span>' +
                    '</div>' +
                    '<div class="progress" style="height:8px;">' +
                        '<div class="progress-bar" role="progressbar" style="width:' + pct + '%;background:' + barColor + ';"></div>' +
                    '</div>' +
                '</div>' +
                '<ul class="list-unstyled small mb-0">' +
                    '<li class="mb-1"><i class="icofont-check-circled id-color me-1"></i><strong>' + wa.included_remaining + '</strong> mensajes incluidos restantes</li>' +
                    '<li class="mb-1"><i class="icofont-plus-circle id-color me-1"></i><strong>' + wa.credits_remaining + '</strong> créditos adicionales</li>' +
                    '<li class="mb-2"><i class="icofont-star id-color me-1"></i><strong>' + wa.total_remaining + '</strong> disponibles en total</li>' +
                    (wa.resets_on ? '<li class="text-muted small">Se renueva el ' + fmtDate(wa.resets_on) + '</li>' : '') +
                '</ul>';
        } else {
            usageHtml = '<p class="text-muted mb-0">No hay datos de uso disponibles para este mes.</p>';
        }

        var creditsCard = hasPending
            ? '<div class="alert alert-info mb-0 small">Tienes una solicitud pendiente de revisión.</div>'
            : '<button class="btn-main w-100" onclick="subOpenWhatsapp()">Comprar créditos</button>';

        document.getElementById('sub-whatsapp').innerHTML =
            '<div class="row mt-5 pt-4" style="border-top:1px solid #eee;">' +
                '<div class="col-12 mb-4">' +
                    '<div class="subtitle id-color">WhatsApp</div>' +
                    '<h3 class="mb-0">Mensajes WhatsApp</h3>' +
                '</div>' +
                '<div class="col-lg-6 mb-4 mb-lg-0">' +
                    '<div class="border-gray p-40 rounded-1 h-100">' +
                        '<h5 class="mb-3">Uso del mes actual</h5>' +
                        usageHtml +
                    '</div>' +
                '</div>' +
                '<div class="col-lg-6">' +
                    '<div class="border-gray p-40 rounded-1 h-100">' +
                        '<h5 class="mb-3">Créditos adicionales</h5>' +
                        '<p class="text-muted small mb-3">Cuando agotas tus mensajes incluidos puedes comprar créditos.<br>' +
                        'Precio: <strong>$' + STATE.extraPricePerMsg.toFixed(2) + ' MXN</strong> por mensaje.</p>' +
                        creditsCard +
                    '</div>' +
                '</div>' +
            '</div>';
    }

    // =============================================================
    // Modal: Free plan
    // =============================================================
    window.subOpenFree = function (planId, planName) {
        document.getElementById('free-plan-name').textContent  = planName;
        document.getElementById('free-plan-name-2').textContent = planName;
        var btn = document.getElementById('free-plan-confirm-btn');
        btn.disabled = false;
        btn.textContent = 'Confirmar cambio';
        btn.onclick = function () { confirmFreePlan(planId); };
        bsModal('modal-free-plan').show();
    };

    async function confirmFreePlan(planId) {
        var btn = document.getElementById('free-plan-confirm-btn');
        btn.disabled = true;
        btn.textContent = 'Procesando...';
        try {
            await api('/api/upgrade-requests', {
                method: 'POST',
                body: JSON.stringify({ plan_id: planId }),
            });
            bsModalClose('modal-free-plan');
            addBanner('success', '<i class="icofont-check-circled me-2"></i>Plan actualizado correctamente. Recargando...');
            setTimeout(function () { location.reload(); }, 1500);
        } catch (err) {
            var msg = (err.data && err.data.message) || 'Error al procesar la solicitud. Inténtalo de nuevo.';
            btn.disabled = false;
            btn.textContent = 'Confirmar cambio';
            addBanner('danger', '<i class="icofont-warning me-2"></i>' + msg);
            bsModalClose('modal-free-plan');
        }
    }

    // =============================================================
    // Modal: Paid plan
    // =============================================================
    window.subOpenPaid = function (planId, planName, price) {
        document.getElementById('paid-plan-name').textContent  = planName;
        document.getElementById('paid-plan-price').textContent = fmtPrice(price);
        document.getElementById('paid-plan-banking').innerHTML  = bankingHtml();
        document.getElementById('paid-plan-error').style.display = 'none';
        var form = document.getElementById('paid-plan-form');
        form.reset();
        form.onsubmit = function (e) { e.preventDefault(); submitPaidPlan(planId, form); };
        var btn = document.getElementById('paid-plan-submit-btn');
        btn.disabled = false;
        btn.textContent = 'Enviar solicitud';
        bsModal('modal-paid-plan').show();
    };

    async function submitPaidPlan(planId, form) {
        var errEl = document.getElementById('paid-plan-error');
        var btn   = document.getElementById('paid-plan-submit-btn');

        var voucherInput = form.querySelector('[name="voucher"]');
        if (voucherInput.files[0] && voucherInput.files[0].size > 5 * 1024 * 1024) {
            errEl.textContent = 'El comprobante no puede superar 5 MB.';
            errEl.style.display = 'block';
            return;
        }
        errEl.style.display = 'none';
        btn.disabled = true;
        btn.textContent = 'Enviando...';

        var fd = new FormData(form);
        fd.set('plan_id', planId);

        try {
            await api('/api/upgrade-requests', { method: 'POST', body: fd });
            bsModalClose('modal-paid-plan');
            addBanner('success', '<i class="icofont-check-circled me-2"></i>Solicitud enviada. Te notificaremos cuando sea revisada.');
            setTimeout(function () { location.reload(); }, 2000);
        } catch (err) {
            errEl.textContent = (err.data && err.data.message) || 'Error al enviar. Verifica los datos e inténtalo de nuevo.';
            errEl.style.display = 'block';
            btn.disabled = false;
            btn.textContent = 'Enviar solicitud';
        }
    }

    // =============================================================
    // Modal: WhatsApp credits
    // =============================================================
    window.subOpenWhatsapp = function () {
        document.getElementById('whatsapp-banking').innerHTML = bankingHtml();
        document.getElementById('whatsapp-credits-error').style.display = 'none';
        document.getElementById('wa-price-per-msg').textContent = '$' + STATE.extraPricePerMsg.toFixed(2);
        document.getElementById('wa-credits-total').textContent = '$0.00 MXN';
        var form = document.getElementById('whatsapp-credits-form');
        form.reset();
        var btn = document.getElementById('whatsapp-credits-submit-btn');
        btn.disabled = false;
        btn.textContent = 'Enviar solicitud';
        form.onsubmit = function (e) { e.preventDefault(); submitWhatsappCredits(form); };
        bsModal('modal-whatsapp-credits').show();
    };

    window.subUpdateWaTotal = function () {
        var qty = parseInt(document.getElementById('wa-credits-qty').value) || 0;
        document.getElementById('wa-credits-total').textContent =
            '$' + (qty * STATE.extraPricePerMsg).toFixed(2) + ' MXN';
    };

    async function submitWhatsappCredits(form) {
        var errEl = document.getElementById('whatsapp-credits-error');
        var btn   = document.getElementById('whatsapp-credits-submit-btn');

        var voucherInput = form.querySelector('[name="voucher"]');
        if (voucherInput.files[0] && voucherInput.files[0].size > 5 * 1024 * 1024) {
            errEl.textContent = 'El comprobante no puede superar 5 MB.';
            errEl.style.display = 'block';
            return;
        }
        errEl.style.display = 'none';
        btn.disabled = true;
        btn.textContent = 'Enviando...';

        try {
            await api('/api/whatsapp-credits-requests', { method: 'POST', body: new FormData(form) });
            bsModalClose('modal-whatsapp-credits');
            addBanner('success', '<i class="icofont-check-circled me-2"></i>Solicitud de créditos enviada. Te notificaremos cuando sea aprobada.');
            setTimeout(function () { location.reload(); }, 2000);
        } catch (err) {
            errEl.textContent = (err.data && err.data.message) || 'Error al enviar la solicitud.';
            errEl.style.display = 'block';
            btn.disabled = false;
            btn.textContent = 'Enviar solicitud';
        }
    }

    // Boot
    init();
})();
</script>
@endpush
