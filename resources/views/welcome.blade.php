<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activos Fijos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --verde-suave: #9CB080;
            --verde-medio: #618764;
            --verde-oscuro: #2B5748;
            --negro-profundo: #273338;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f6f8f5;
            color: var(--negro-profundo);
        }

        .hero {
            background:
                linear-gradient(90deg, rgba(39, 51, 56, 0.92) 0%, rgba(43, 87, 72, 0.82) 100%),
                url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=80') center/cover;
            color: white;
            padding: 120px 0;
        }

        .hero-card {
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.16);
            backdrop-filter: blur(8px);
            border-radius: 24px;
            padding: 32px;
        }

        .section-title {
            color: var(--verde-oscuro);
            font-weight: 700;
            margin-bottom: 24px;
        }

        .feature-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(39, 51, 56, 0.08);
            transition: transform .2s ease, box-shadow .2s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 36px rgba(39, 51, 56, 0.14);
        }

        .btn-hero {
            background: var(--verde-suave);
            border: none;
            color: var(--negro-profundo);
            font-weight: 600;
        }

        .btn-hero:hover {
            background: #a9bc8d;
            color: var(--negro-profundo);
        }

        .btn-outline-hero {
            border: 1px solid white;
            color: white;
        }

        .btn-outline-hero:hover {
            background: white;
            color: var(--negro-profundo);
        }

        .image-slot {
            background: linear-gradient(135deg, rgba(156, 176, 128, 0.14), rgba(43, 87, 72, 0.18));
            border: 2px dashed rgba(43, 87, 72, 0.35);
            border-radius: 20px;
            min-height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--verde-oscuro);
            font-weight: 600;
            text-align: center;
            padding: 24px;
        }

        .navbar-custom {
            background: rgba(39, 51, 56, 0.97);
        }

        .footer-custom {
            background: var(--negro-profundo);
            color: white;
            padding: 24px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">Activos Fijos</a>
            <div class="ms-auto">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-light">Panel</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Iniciar sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="hero-card">
                        <h1 class="display-5 fw-bold mb-3">Gestión de activos fijos</h1>
                        <p class="lead mb-4">
                            Controla, organiza y reporta tus activos institucionales con una plataforma fácil de usar.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('login') }}" class="btn btn-lg btn-hero">Acceder al sistema</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-lg btn-outline-hero">Crear cuenta</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-5">
                    <div class="image-slot">
                        Espacio para tu imagen de portada<br>colócala aquí y se verá elegante
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Funcionalidades destacadas</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card p-3">
                        <div class="card-body">
                            <h5 class="fw-bold">Gestión de activos</h5>
                            <p class="text-muted mb-0">Registra, edita y sigue cada activo con información completa y ordenada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card p-3">
                        <div class="card-body">
                            <h5 class="fw-bold">Responsables y oficinas</h5>
                            <p class="text-muted mb-0">Asigna responsables y organiza activos por oficina, grupo o estado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card p-3">
                        <div class="card-body">
                            <h5 class="fw-bold">Reportes y QR</h5>
                            <p class="text-muted mb-0">Genera reportes PDF y etiquetas con código QR para cada activo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: white;">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="image-slot">
                        <img src="{{ asset('storage/image1.png') }}" alt="" width="350" height="300">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Diseño pensado para claridad y control</h2>
                    <p class="text-muted">Tu sistema presenta información de forma limpia, visual y organizada, facilitando el control del inventario y la toma de decisiones.</p>
                    <ul class="text-muted">
                        <li>Interfaz moderna y profesional</li>
                        <li>Colores sobrios alineados con tu identidad</li>
                        <li>Experiencia más intuitiva para usuarios y administradores</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-custom text-center">
        <div class="container">
            Sistema de Registro y Control de Activos © {{ date('Y') }}
            <strong>Amilcar Quispe Santos</strong>
        </div>
    </footer>
</body>
</html>