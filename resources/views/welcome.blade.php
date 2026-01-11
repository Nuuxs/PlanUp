<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PlanUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">PlanUp</a>

        <div class="ms-auto d-flex gap-3 align-items-center">
            @guest
                <a href="{{ route('login') }}" class="text-decoration-none text-dark">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm px-3">
                    Start for free
                </a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">
                    Dashboard
                </a>
            @endauth
        </div>
    </div>
</nav>

<!-- MAIN -->
<main class="hero-section mt-5">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Text -->
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="hero-title mb-4">
                    Clarity, finally.
                </h1>

                <p class="hero-desc mb-4">
                    Kelola tugas harianmu dengan cara yang sederhana, cepat,
                    dan bebas ribet. Fokus pada hal yang benar-benar penting.
                </p>

                <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-primary px-4 py-2">
                            Start for free
                        </a>
                        {{-- <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-secondary px-4 py-2">
                            Login
                        </a> --}}
                    @endguest

                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-primary px-4 py-2">
                            Go to Dashboard
                        </a>
                    @endauth
                </div>
            </div>

            {{-- <!-- Image -->
            <div class="col-lg-6 text-center">
                <img
                    src="{{ asset('img/Untitled-2.png') }}"
                    alt="PlanUp Preview"
                    class="img-fluid rounded-4 shadow preview-image"

                >
            </div> --}}

            <!-- Image Slider -->
            <div class="col-lg-6 text-center">
                <div id="previewCarousel"
                    class="carousel slide"
                    data-bs-ride="carousel"
                    data-bs-interval="3000">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="{{ asset('img/download (14).jpeg') }}"
                                class="img-fluid rounded-4 shadow preview-image"
                                alt="Preview 1">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/download (8).jpeg') }}"
                                class="img-fluid rounded-4 shadow preview-image"
                                alt="Preview 2">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/download (9).jpeg') }}"
                                class="img-fluid rounded-4 shadow preview-image"
                                alt="Preview 3">
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Features -->
        <div class=" hero-se row text-center mt-5 gy-5 ">

            <div class="col-md-4">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3 fs-1">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h6 class="fw-semibold">Simple & Fast</h6>
                    <p class="text-muted small">
                        Tambah dan kelola tugas tanpa ribet.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3 fs-1">
                        <i class="bi bi-lock"></i>
                    </div>
                    <h6 class="fw-semibold">Secure</h6>
                    <p class="text-muted small">
                        Data aman dan terikat ke akunmu.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3 fs-1">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h6 class="fw-semibold">Responsive</h6>
                    <p class="text-muted small">
                        Nyaman di desktop & mobile.
                    </p>
                </div>
            </div>


            {{-- <div class="col-md-4">
                <div class="feature-icon mb-3 fs-1">
                    <i class="bi bi-lock"></i>
                </div>
                <h6 class="fw-semibold">Secure</h6>
                <p class="text-muted small">
                    Data aman dan terikat ke akunmu.
                </p>
            </div>

            <div class="col-md-4">
                <div class="feature-icon mb-2 fs-1">
                    <i class="bi bi-phone"></i>
                </div>
                <h6 class="fw-semibold">Responsive</h6>
                <p class="text-muted small">
                    Nyaman di desktop & mobile.
                </p>
            </div> --}}
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="text-center py-3 text-muted small">
    © {{ date('Y') }} PlanUp — Built with Laravel
</footer>

</body>
</html>
