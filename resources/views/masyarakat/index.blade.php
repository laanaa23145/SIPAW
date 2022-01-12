<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Pengaduan Mahasiswa</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Sistem Pengaduan Mahasiswa</h1>
                <h3 class="mb-5"><em>Terjadi Fenomena di Sekitar Anda? Adukan Pada Kami!</em></h3>
                <h3 class="mb-5"><em>Punya Aspirasi tapi tidak tau bagaimana menyalurkannya? Laporkan Pada Kami!</em></h3>
                <a class="btn btn-primary btn-xl" href="/loginmasyarakat">Login</a><!-- ROUTE KE LOGIN-->
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Sistem Pengaduan Mahasiswa Akan Menjadi Teman Baru Kamu!</h2>
                        <p class="lead mb-5">
                            Kami siap menampung Aspirasimu!
                        </p>
                        <a class="btn btn-dark btn-xl" href="#services">Fitur Unggulan</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Jasa</h3>
                    <h2 class="mb-5">Untuk Mahasiswa</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong>24/7</strong></h4>
                        <p class="text-faded mb-0">Mahasiswa dapat melapor kapanpun.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                        <h4><strong>Responsif</strong></h4>
                        <p class="text-faded mb-0">Laporan akan secepat mungkin diproses.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                        <h4><strong>Disukai</strong></h4>
                        <p class="text-faded mb-0">
                            Student
                            <i class="fas fa-heart"></i>
                            Friendly
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
                        <h4><strong>Privasi</strong></h4>
                        <p class="text-faded mb-0">Identitas pelapor aman.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    Tempat
                    <em>lapor</em>
                    Terbaik
                </h2>
                <a class="btn btn-primary btn-xl" href="/register">Daftar Sekarang!</a><!-- ROUTE KE DAFTAR-->
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Hal Yang Sering Dilaporkan</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Aspirasi</div>
                                    <p class="mb-0">Mahasiswa yang memiliki ide-ide yang dapat memajukan JTI namun malu untuk menyampaikannya secara langsung.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/aspi.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Kritik & Saran</div>
                                    <p class="mb-0">Kritik dan saran mengenai pembelajaran di JTI.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/krisan.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Kerusakan Sarana</div>
                                    <p class="mb-0">Lampu & Air Conditioner tidak menyala, Kartu listrik hilang, Meja Kursi sudah Usang, dan berbagai sarana kampus yang harusnya diganti</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/kacpec.png" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Kriminalitas</div>
                                    <p class="mb-0">Pencurian, Copet, Bullying, dan hal-hal yang melanggar aturan kampus.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/bully.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="content-section bg-primary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Jangan Takut Melaporkan!</h2>
                @if (Auth::guard('masyarakat')->check())
                <a href="masyarakat_pengaduan" class="btn btn-xl btn-light me-4">Isi Laporan</a>
                &nbsp;
                <a href="history" class="btn btn-xl btn-dark">Riwayat Laporan</a>
                @else 
                <a href="#" id="swal-6" class="btn btn-xl btn-dark">Isi Laporan</a>
                &nbsp;
                <a href="#" id="swal-6" class="btn btn-xl btn-dark">Riwayat Laporan</a>                
                @endif
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Kelompok 3 2021</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{('js/scripts.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{ asset('landing/bs/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('landing/js/onscroll.js') }}"></script>
        <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
        <script>
          $("#swal-6").click(function() {
        swal({
            title: 'Harus login dulu',
            text: 'Untuk mengisi pengaduan anda harus login terlebih dahulu',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location.href = "/loginmasyarakat";
            } else {
            swal('Oke!');
            }
          });
      });
  </script>
    </body>
</html>
