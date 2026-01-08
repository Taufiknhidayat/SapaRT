<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengaduan Masyarakat RT/RW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-building-fill-check me-2"></i>SapaRT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary text-white fw-bold rounded-pill px-4 shadow-sm" href="auth/login.php">
                            Login Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section d-flex align-items-center text-center text-lg-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="badge bg-success bg-opacity-10 text-success mb-3 px-3 py-2 rounded-pill fw-bold">
                        <i class="bi bi-megaphone-fill me-1"></i> Suara Anda, Prioritas Kami
                    </span>
                    <h1 class="display-4 fw-bold mb-3 text-dark">Layanan Aspirasi & Pengaduan Warga</h1>
                    <p class="lead mb-4 text-secondary">
                        Sampaikan laporan, keluhan, atau aspirasi Anda langsung kepada pengurus RT/RW.
                        Wujudkan lingkungan yang aman, nyaman, dan transparan bersama kami.
                    </p>

                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="auth/login_warga.php" class="btn btn-warning btn-lg fw-bold shadow-sm px-4">
                            <i class="bi bi-pencil-square me-2"></i>Tulis Aduan
                        </a>
                        <a href="#tentang" class="btn btn-outline-primary btn-lg fw-bold px-4 rounded-pill">
                            Pelajari Alur
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <img src="assets/img/icon.png"
                        alt="Ilustrasi Aduan"
                        class="img-fluid rounded-4"
                        style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-2 text-dark">Kenapa Menggunakan Aplikasi Ini?</h2>
            <p class="text-muted mb-5">Keunggulan layanan pengaduan digital untuk warga</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 p-4 text-center">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-3">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h5 class="card-title fw-bold">Privasi Terjaga</h5>
                            <p class="card-text text-muted">Identitas pelapor dan isi laporan Anda tersimpan aman dalam sistem database kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 text-center">
                        <div class="card-body">
                            <div class="display-4 text-warning mb-3">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h5 class="card-title fw-bold">Respon Cepat</h5>
                            <p class="card-text text-muted">Laporan langsung masuk ke dashboard pengurus RT/RW untuk segera ditindaklanjuti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 text-center">
                        <div class="card-body">
                            <div class="display-4 text-success mb-3">
                                <i class="bi bi-phone-fill"></i>
                            </div>
                            <h5 class="card-title fw-bold">Akses Mudah</h5>
                            <p class="card-text text-muted">Pantau status aduan Anda (Diproses/Selesai) kapan saja melalui dashboard warga.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 text-center mt-auto">
        <div class="container">
            <p class="mb-1 fw-bold">&copy; 2026 Sistem Informasi RT/RW</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>