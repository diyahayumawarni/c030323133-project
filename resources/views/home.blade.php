<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>SistemInformasiPenerimaanBeasiswa | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle" >Selamat Datang </h4>
                <h1 class="header-title">Sistem Informasi </h1>
                <h1 class="header-title"> Penerimaan Beasiswa</h1>
            </div>
        </div>
    </header>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">Home</a>
</li>

    <a href="{{ route('beasiswa.index') }}" class="nav-link">
        <button class="btn btn-primary">Beasiswa</button>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pendaftaran.index') }}" class="nav-link">
        <button class="btn btn-primary">Pendaftaran</button>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dokumen.index') }}" class="nav-link">
        <button class="btn btn-primary">Dokumen Pendukung</button>
    </a>
</li>

<li class="nav-item">
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-outline-danger">Logout</button>
    </form>
</li>


                </ul>
                <ul class="navbar-nav brand"></ul>
                    </li>
                </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">DESCRIPTION OF SIPB</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">Sistem Informasi Penerimaan Beasiswa</h5>
                <p class="mt-20">Sistem Informasi Penerimaan Beasiswa adalah sebuah platform digital yang dirancang untuk mempermudah proses pendaftaran, seleksi, dan pengelolaan beasiswa secara terorganisir dan efisien. Sistem ini mengintegrasikan berbagai fungsi, seperti pengelolaan data pelamar, verifikasi dokumen, seleksi berbasis kriteria tertentu, hingga pengumuman penerimaan secara transparan.</p>

            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nama</span> : Diyah Ayu Mawarni </li>
                    <li><span>Email</span> : diyahayumawarnu@gmail.com</li>
                    <li><span>NIM</span> : C030323133</li>
                    <li><span>Kelas</span> : TI-3Axioo</li>

                    </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nama</span> : Noor Alfa Rahmah </li>
                    <li><span>Email</span> : nooralfa001@gmail.com</li>
                    <li><span>NIM</span> : C030323146</li>
                    <li><span>Kelas</span> : TI-3Axioo</li>

            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Manfaat Sistem Informasi Penerimaan Beasiswa</h3>
                <div class="row mb-4 p-3 rounded shadow-sm" style="background-color: #f0f8ff; border-left: 4px solid #007bff;">
        <div class="col-1 text-primary pt-1">
            <i class="ti-time icon-lg"></i>
        </div>
        <div class="col-10 ml-auto mr-3">
            <h6 class="text-dark">Efisiensi Proses</h6>
            <p class="subtitle text-muted">Mempermudah pendaftaran dan mengurangi waktu serta biaya administrasi.</p>
        </div>
    </div>

    <div class="row mb-4 p-3 rounded shadow-sm" style="background-color: #f8f9fa; border-left: 4px solid #28a745;">
        <div class="col-1 text-success pt-1">
            <i class="ti-eye icon-lg"></i>
        </div>
        <div class="col-10 ml-auto mr-3">
            <h6 class="text-dark">Transparansi</h6>
            <p class="subtitle text-muted">Proses seleksi lebih terbuka dan memudahkan pengawasan.</p>
        </div>
    </div>
     <div class="row mb-4 p-3 rounded shadow-sm" style="background-color: #fffbe0; border-left: 4px solid #ffc107;">
        <div class="col-1 text-warning pt-1">
            <i class="ti-bell icon-lg"></i>
        </div>
        <div class="col-10 ml-auto mr-3">
            <h6 class="text-dark">Kemudahan Informasi</h6>
            <p class="subtitle text-muted">Notifikasi otomatis terkait tahapan seleksi dan pengumuman.</p>
        </div>
    </div>
                <div class="row mb-4 p-3 rounded shadow-sm" style="background-color: #fff5f5; border-left: 4px solid #dc3545;">
        <div class="col-1 text-danger pt-1">
            <i class="ti-archive icon-lg"></i>
        </div>
        <div class="col-10 ml-auto mr-3">
            <h6 class="text-dark">Pengelolaan Data</h6>
            <p class="subtitle text-muted">Data pendaftar tersimpan dengan aman dan terpusat.</p>
        </div>
    </div>

                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <section class="section" id="resume">
    <div class="container">
        <h2 class="mb-5 text-center"><span class="text-primary">Sistem Informasi Penerimaan Beasiswa</span></h2>
        <div class="row">
            <!-- Expertise Card -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mt-2">Keahlian untuk Penerima Beasiswa</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="text-primary">Pengembang Sistem Informasi Beasiswa</h6>
                        <p>Memahami desain sistem informasi untuk penerimaan beasiswa dengan mempertimbangkan aspek kemudahan penggunaan (UX) dan kecepatan sistem.</p>
                        <hr>
                        <h6 class="text-primary">Pengelolaan Data Penerima Beasiswa</h6>
                        <p>Memastikan integritas data yang diterima dari calon penerima beasiswa dan menyusun prosedur verifikasi data secara efisien.</p>
                    </div>
                </div>
            </div>
            <!-- Education Card -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mt-2">Kualifikasi Pendidikan</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="text-primary">2017 - Sekarang</h6>
                        <p>Program Studi Sistem Informasi, Politeknik Banjarmasin</p>
                        <p>Mempelajari pengelolaan sistem informasi, database, dan pengembangan aplikasi untuk penerimaan beasiswa.</p>
                        <hr>
                        <h6 class="text-primary">2015 - 2017</h6>
                        <p>Diploma Teknik Komputer</p>
                        <p>Mempelajari dasar-dasar pemrograman dan pengelolaan data yang dibutuhkan dalam pengembangan sistem informasi.</p>
                    </div>
                </div>
            </div>
            <!-- Skills Card -->
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mt-2">Keahlian yang Dibutuhkan</h4>
                    </div>
                    <div class="card-body pb-2">
                        <h6>Pengembangan Sistem Informasi</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 90%" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Desain Database</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-info" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Keamanan Data</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Analisis Data Penerima</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Languages Card -->
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mt-2">Bahasa yang Diperlukan</h4>
                    </div>
                    <div class="card-body pb-2">
                        <h6>Bahasa Pemrograman (PHP, JavaScript)</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>SQL untuk Manajemen Database</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-info" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Bahasa Inggris</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gradient text-center">
    <div class="container">
        <div class="row text-center">
            <!-- Total Applicants -->
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-user icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-primary font-weight-bold font40">1,200</h1>
                        <p class="text-light mb-1">Total Applicants</p>
                    </div>
                </div>
            </div>
            <!-- Scholarships Awarded -->
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-medall icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-success font-weight-bold font40">500</h1>
                        <p class="text-light mb-1">Scholarships Awarded</p>
                    </div>
                </div>
            </div>
            <!-- Successful Candidates -->
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-check-box icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-warning font-weight-bold font40">400</h1>
                        <p class="text-light mb-1">Successful Candidates</p>
                    </div>
                </div>
            </div>
            <!-- Ongoing Applications -->
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-time icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-info font-weight-bold font40">100</h1>
                        <p class="text-light mb-1">Ongoing Applications</p>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
</section>

<style>
    /* Gradient background for section */
    .section.bg-gradient {
        background: linear-gradient(90deg,rgb(216, 116, 116),rgb(128, 5, 5));
        padding: 60px 0;
    }

    .icon-xl {
        font-size: 3rem;
        color: #ffffff;
    }

    .text-primary {
        color: #3498db !important;  /* Soft blue */
    }

    .text-success {
        color: #28a745 !important;  /* Green */
    }

    .text-warning {
        color: #f39c12 !important;  /* Yellow */
    }

    .text-info {
        color: #17a2b8 !important;  /* Light blue */
    }

    .font40 {
        font-size: 40px;
        font-weight: bold;
    }

    .text-light {
        color: #ecf0f1;
    }

    .border-right {
        border-right: 1px solidrgb(236, 123, 123);
    }

    /* Customizing card hover effect */
    .row .col-5:hover {
        background-color: #34495e;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    /* Responsiveness for mobile and smaller screens */
    @media (max-width: 768px) {
        .row {
            margin-top: 20px;
        }
    }

</style>
<section class="section bg-light" id="service">
    <div class="container">
        <h2 class="mb-5 pb-4 text-center"><span class="text-primary">Layanan</span> Sistem Informasi Penerimaan Beasiswa</h2>
        <div class="row">
            <!-- Pendaftaran Mahasiswa -->
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5 shadow-lg">
                   <div class="card-header has-icon">
                        <i class="ti-pencil-alt text-primary" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Pendaftaran Mahasiswa</h5>
                        <p class="subtitle">Proses pendaftaran mahasiswa baru untuk penerimaan beasiswa, dengan mengisi data pribadi, akademik, dan dokumen pendukung melalui platform online yang mudah diakses dan efisien.</p>
                    </div>
                </div>
            </div>
            <!-- Seleksi Mahasiswa -->
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5 shadow-lg">
                   <div class="card-header has-icon">
                        <i class="ti-check-box text-success" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Seleksi Mahasiswa</h5>
                        <p class="subtitle">Seleksi dilakukan dengan mempertimbangkan berbagai kriteria, seperti nilai akademik, prestasi, dan kebutuhan finansial. Hasil seleksi akan diumumkan secara transparan melalui platform ini.</p>
                    </div>
                </div>
            </div>
            <!-- Hasil Review Mahasiswa -->
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5 shadow-lg">
                   <div class="card-header has-icon">
                        <i class="ti-comment-alt text-info" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Hasil Review Mahasiswa</h5>
                        <p class="subtitle">Setelah proses seleksi, mahasiswa yang lolos akan menerima hasil review dan umpan balik untuk memastikan kelayakan pemberian beasiswa.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Mendapatkan Biaya Tambahan -->
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5 shadow-lg">
                   <div class="card-header has-icon">
                        <i class="ti-wallet text-warning" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Mendapatkan Biaya Tambahan</h5>
                        <p class="subtitle">Mahasiswa yang membutuhkan biaya tambahan untuk pendidikan dapat mengajukan permohonan kepada pihak terkait, dengan mengisi formulir khusus untuk mendapatkan bantuan biaya pendidikan tambahan secara transparan.</p>
                    </div>
                </div>
            </div>
            <!-- Dukungan Beasiswa -->
            <div class="col-md-4 col-sm-6">
                <div class="card mb-5 shadow-lg">
                   <div class="card-header has-icon">
                        <i class="ti-headphone-alt text-success" aria-hidden="true"></i>
                    </div>
                    <div class="card-body px-4 py-3">
                        <h5 class="mb-3 card-title text-dark">Dukungan Beasiswa</h5>
                        <p class="subtitle">Kami menyediakan layanan dukungan untuk mahasiswa yang membutuhkan bantuan lebih lanjut dalam proses pendaftaran atau klarifikasi terkait beasiswa yang diterima.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section bg-custom-gray" id="beasiswa">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">Sistem Informasi</span> Penerimaan Beasiswa</h1>
        <div class="row align-items-center">
            <!-- Beasiswa Gratis -->
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4" style="background-color: #fce4ec; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h3 class="price-card-title" style="color: #d81b60;">Beasiswa Gratis</h3>
                    <div class="price-card-cost">
                        <span class="num" style="font-size: 32px; color: #d81b60;">0</span>
                        <span class="date" style="font-size: 16px; color: #c2185b;">IDR</span>
                    </div>
                    <ul class="list" style="list-style-type: none; padding: 0; font-size: 14px; color: #444;">
                        <li class="list-item">Kuota Terbatas</li>
                        <li class="list-item">Beasiswa untuk Semua Jurusan</li>
                        <li class="list-item">Syarat: IPK ≥ 3.00</li>
                        <li class="list-item">Pendaftaran hingga 31 Desember</li>
                    </ul>
                </div>
            </div>
            <!-- Beasiswa Dasar -->
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4" style="background-color: #f8bbd0; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h3 class="price-card-title" style="color: #d81b60;">Beasiswa Dasar</h3>
                    <div class="price-card-cost">
                        <span class="num" style="font-size: 32px; color: #d81b60;">0</span>
                        <span class="date" style="font-size: 16px; color: #c2185b;">IDR</span>
                    </div>
                    <ul class="list" style="list-style-type: none; padding: 0; font-size: 14px; color: #444;">
                        <li class="list-item">Kuota 50 Beasiswa</li>
                        <li class="list-item">Syarat: IPK ≥ 3.50</li>
                        <li class="list-item">Beasiswa untuk Semua Fakultas</li>
                        <li class="list-item">Pendaftaran hingga 15 Januari</li>
                    </ul>
                </div>
            </div>
            <!-- Beasiswa Prestasi -->
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center price-card-required mb-4" style="background-color: #f3e5f5; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h3 class="price-card-title" style="color: #d81b60;">Beasiswa Prestasi</h3>
                    <div class="price-card-cost">
                        <span class="num" style="font-size: 32px; color: #d81b60;">0</span>
                        <span class="date" style="font-size: 16px; color: #c2185b;">IDR</span>
                    </div>
                    <ul class="list" style="list-style-type: none; padding: 0; font-size: 14px; color: #444;">
                        <li class="list-item">Kuota 20 Beasiswa</li>
                        <li class="list-item">Syarat: IPK ≥ 3.75 dan Prestasi Akademik</li>
                        <li class="list-item">Beasiswa untuk Program Sarjana</li>
                        <li class="list-item">Pendaftaran hingga 30 Januari</li>
                    </ul>
                </div>
            </div>
            <!-- Beasiswa Penuh -->
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4" style="background-color: #fce4ec; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h3 class="price-card-title" style="color: #d81b60;">Beasiswa Penuh</h3>
                    <div class="price-card-cost">
                        <span class="num" style="font-size: 32px; color: #d81b60;">0</span>
                        <span class="date" style="font-size: 16px; color: #c2185b;">IDR</span>
                    </div>
                    <ul class="list" style="list-style-type: none; padding: 0; font-size: 14px; color: #444;">
                        <li class="list-item">Kuota 10 Beasiswa</li>
                        <li class="list-item">Beasiswa Full-Tuition</li>
                        <li class="list-item">Syarat: IPK ≥ 4.00 dan Karya Tulis Ilmiah</li>
                        <li class="list-item">Pendaftaran hingga 5 Februari</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 </div>
</div>
        </div>
    </section>

    <!-- Beasiswa Section -->
<section class="section bg-custom-gray" id="beasiswa">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">Sistem Informasi</span> Penerimaan Beasiswa</h1>
        <div class="row justify-content-center">
            <!-- Beasiswa Gratis -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Beasiswa Gratis">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Gratis</h6>
                            <p class="subtitle">Beasiswa yang diberikan tanpa biaya untuk mahasiswa dengan IPK ≥ 3.00. Kuota terbatas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Dasar -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Beasiswa Dasar">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Dasar</h6>
                            <p class="subtitle">Beasiswa untuk mahasiswa dengan IPK ≥ 3.50. Tersedia untuk semua fakultas dengan kuota terbatas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Prestasi -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Beasiswa Prestasi">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Prestasi</h6>
                            <p class="subtitle">Beasiswa yang diberikan kepada mahasiswa dengan prestasi akademik tinggi dan IPK ≥ 3.75.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Penuh -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Beasiswa Penuh">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Penuh</h6>
                            <p class="subtitle">Beasiswa full-tuition untuk mahasiswa dengan IPK ≥ 4.00 dan prestasi luar biasa.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Lainnya -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Beasiswa Lainnya">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Lainnya</h6>
                            <p class="subtitle">Beasiswa yang ditawarkan oleh berbagai organisasi dan sponsor untuk mendukung pendidikan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Prestasi 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Beasiswa Prestasi 2">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Prestasi 2</h6>
                            <p class="subtitle">Beasiswa dengan syarat prestasi tinggi di bidang olahraga atau seni.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Pengabdian -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Beasiswa Pengabdian">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Pengabdian</h6>
                            <p class="subtitle">Beasiswa untuk mahasiswa yang aktif dalam kegiatan pengabdian masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Penuh 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Beasiswa Penuh 2">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Penuh 2</h6>
                            <p class="subtitle">Beasiswa untuk mahasiswa yang berprestasi di bidang akademik dan sosial.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beasiswa Umum -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Beasiswa Umum">
                    <div class="content-holder">
                        <div class="text-holder">
                            <h6 class="title">Beasiswa Umum</h6>
                            <p class="subtitle">Beasiswa yang diberikan untuk mahasiswa dari latar belakang ekonomi menengah ke bawah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Beasiswa Section -->


<section class="section" id="blog">
    <div class="container">
        <h2 class="mb-5">Latest <span class="text-danger">Updates on Beasiswa</span></h2>
        <div class="row">
            <!-- Blog Card 1 -->
            <div class="blog-card">
                <div class="img-holder">
                    <img src="assets/imgs/web-1.jpg" alt="Beasiswa Gratis untuk Mahasiswa Berprestasi">
                </div>
                <div class="content-holder">
                    <h6 class="title">Beasiswa Gratis untuk Mahasiswa Berprestasi</h6>
                    <p class="post-details">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                        <a href="#"><i class="ti-comment"></i> 123</a>
                    </p>
                    <p>Beasiswa ini ditujukan untuk mahasiswa dengan IPK ≥ 3.00. Informasi lebih lanjut mengenai persyaratan dan cara pendaftaran bisa ditemukan di halaman detail.</p>
                </div>
            </div><!-- end of blog wrapper -->

            <!-- Blog Card 2 -->
            <div class="blog-card">
                <div class="img-holder">
                    <img src="assets/imgs/web-2.jpg" alt="Beasiswa Prestasi Akademik Tinggi">
                </div>
                <div class="content-holder">
                    <h6 class="title">Beasiswa Prestasi Akademik Tinggi</h6>
                    <p class="post-details">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                        <a href="#"><i class="ti-comment"></i> 264</a>
                    </p>
                    <p>Beasiswa untuk mahasiswa dengan IPK ≥ 3.75. Ini adalah kesempatan besar untuk mahasiswa yang memiliki prestasi luar biasa dalam bidang akademik.</p>
                </div>
            </div><!-- end of blog wrapper -->

            <!-- Blog Card 3 -->
            <div class="blog-card">
                <div class="img-holder">
                    <img src="assets/imgs/web-3.jpg" alt="Beasiswa Penuh Bagi Mahasiswa Kurang Mampu">
                </div>
                <div class="content-holder">
                    <h6 class="title">Beasiswa Penuh Bagi Mahasiswa Kurang Mampu</h6>
                    <p class="post-details">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 431</a>
                        <a href="#"><i class="ti-comment"></i> 312</a>
                    </p>
                    <p>Beasiswa penuh ditawarkan untuk mahasiswa yang membutuhkan dukungan finansial dalam melanjutkan studi mereka. Pelajari lebih lanjut tentang persyaratan dan prosedur pendaftaran.</p>
                </div>
            </div><!-- end of blog wrapper -->

        </div>
    </div>
</section>
