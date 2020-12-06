
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Linda | Iwe</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('uts/css/styles.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Core theme JS-->
        <script src="{{ asset('uts/js/scripts.js')}}"></script>
        <!-- Dropdown -->
        <link rel="stylesheet" href="{{ asset('uts/dp/css/bootstrap.css')}}"/> 
            
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">KUY MAKAN SANAK</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kue
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Kukus</a>
                            <a class="dropdown-item" href="#">Panggang</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Makanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Berkuah</a>
                            <a class="dropdown-item" href="#">Lauk Kering</a>
                            <a class="dropdown-item" href="#">Bakar</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">makan makan</h1>
                    <p class="text-white-50 mx-auto mt-2 mb-5">Indonesia adalah negara yang sangat kaya akan budaya seperti yang telah diketahui. Indonesia memiliki 34 provinsi dan masing-masing dari setiap provinsi tentu saja memiliki kekhasannya masing-masing.
                        Salah satu yang menjadi kekayaan dari setiap provinsi adalah kulinernya. Makanan memang selalu bisa menjadi daya tarik yang dimiliki oleh provinsi di indonesia.</p>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Masakan-masakan Khas Indonesia</h2>
                        <p class="text-white-50">
                        Masakan dari indonesia juga khas dan kaya akan rempah. Masyarakat indonesia perlu berbangga dan mensyukuri kekayaan kuliner yang ada di negeri tercinta ini. Sekian informasi yang bisa disampaikan semoga memberi manfaat untuk anda.
                            <a href="#">Read More</a>
                            Makanan khas yang ada di indonesia menjadi salah satu daya tarik yang kuat bagi para wisatawan manca negara karena memang sangat lezat di lidah turis.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="" />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('uts/assets/img/sate.jpg')}}" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Sate</h4>
                            <p class="text-black-50 mb-0">Sate, kuliner yang membumi di Indonesia ini ternyata banyak ragamnya. Bukan hanya Sate Madura atau Sate Lilit saja, setidaknya ada sekitar 
                                41 jenis sate di Indonesia yang sering dikonsumsi dan menjadi teman bagi lidah-lidah pencinta kuliner di Indonesia.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('uts/assets/img/ketan.jpg')}}" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Bugis Ketan</h4>
                                    <p class="mb-0 text-white-50">Kue bugis adalah salah satu jenis kue basah tradisional khas Sulawesi. Kue ini berbahan dasar parutan kelapa yang dipadukan dengan gula jawa dan bahan khas lainnya yang memberikan rasa lembut, enak, lezat dan manis ketika di gigit dan di makan. 
                                        Di Jawa, makanan yang mirip dengan kue bugis adalah kue mendut.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('uts/assets/img/ayam1.jpg')}}" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Ayam Cincane</h4>
                            <p class="text-black-50 mb-0">Makanan khas  kota Samarinda ini memang terlihat enak tapi emang bener enak kok, 
                                berbahan dasar ayam dengan dilumuri bumbu2 khas sehingga menghasilkan rasa enak dan gurih.</p>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('uts/assets/img/talam.jpg')}}" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Kue Talam</h4>
                                    <p class="mb-0 text-white-50">Kue talam merupakan kuliner ala Betawi. Jajanan pasar satu ini masih mudah ditemukan untuk jajanan arisan ibu-ibu perumahan. Kue talam memiliki rasa yang legit dengan tekstur kenyal. 
                                        Talam sendiri dibuat dari tiga bahan dasar yakni tepung sagu, tepung beras dan perasa pandan. Ciri khas kue talam adalah warna putih dan hijaunya. </p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Ayo Dukung Website Kami Agar Makin Berkembang</h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Masukkan Email anda....." />
                            <button class="btn btn-primary mx-auto" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Alamat</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">Jl. Juanda 8 Samarinda</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">nurlindaa24@gmail.com | namasamaraniwe06@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">0851 5660 8934</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Nurlinda & Muh Iqbal Wahyu Perdana 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
    </body>
</html>
