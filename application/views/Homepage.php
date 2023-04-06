<!doctype html>
<html lang="en">

  <head>
    <title>Pasifik Billiard - Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">
	<link rel="icon" href="<?= base_url('assets/images/p.ico') ?>" type="image/ico">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/flaticon/font/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">

    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html"><strong>PASIFIK</strong> Billiard <span class="text-primary">.</span> </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
<!--                   <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="services.html" class="nav-link">Services</a></li> -->
                  <li><a class="nav-link">Sudah mempunyai akun?</a></li>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Sign In</button>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>


      <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('<?= base_url('assets/images/billiard.jpg') ?>')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">Tempat Bermain Asik Bersama Teman</h1>
            </div>
            <div class="col-lg-5 ml-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <h2 class="line-bottom">Kenapa harus di <br />Pasifik Billiard?</h2>
            <p>Permainan Billiard saat ini memang diminati oleh kalangan muda. Pasifik Billiard menawarkan tempat yang nyaman juga harga yang terjangkau. Dengan fasilitas menu Cafe dan Wifi yang akan membuat bermain jadi semakin asik.</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white registrasi">
                <h2>Bergabung Sekarang</h2>
                <form action="<?= base_url('homepage/tambahUser') ?>" method="post">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama'); ?>">
                     <small class="form-text text-danger regist"><?= form_error('nama'); ?></small>
                  </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username'); ?>">
                        <small class="form-text text-danger regist"><?= form_error('username'); ?></small>
                      </div>
                  <div class="row col">
                    <div class="form-group custom-control custom-radio pr-4">
                      <input type="radio" id="jkl" name="jenis_kelamin" class="custom-control-input" value="Laki-Laki" value="<?= set_value('jenis_kelamin'); ?>">
                      <label class="custom-control-label" for="jkl">Laki-Laki</label>
                    </div>
                    <div class="form-group custom-control custom-radio">
                        <input type="radio" id="jkp" name="jenis_kelamin" class="custom-control-input" value="Perempuan">
                      <label class="custom-control-label" for="jkp">Perempuan</label>
                    </div>
                  </div>

                      <small class="form-text text-danger regist"><?= form_error('jenis_kelamin'); ?></small>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                  <small class="form-text text-danger regist"><?= form_error('email'); ?></small>
                  </div>
                  <div class="row">
                 <div class="form-group col-6">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <small class="form-text text-danger regist"><?= form_error('password'); ?></small>
                  </div>
                <div class="form-group col-6">
                    <input type="password" class="form-control" placeholder="Repeat Password" name="password2">
                  </div>
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                    <small class="form-text text-danger regist"><?= form_error('alamat'); ?></small>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Sign Up" class="btn btn-primary px-5">
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

   

    <div class="site-section">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-4 mr-auto">
            <h2 class="line-bottom">Fasilitas Yang Tersedia</h2>
          </div>
          <div class="col-md-8 text-right">
            <nav class="custom-tab nav" role="tablist"  class="nav nav-tabs" id="nav-tab" role="tablist">
              <a href="#nav-one" class="nav-item nav-link active" data-toggle="tab" role="tab"  aria-controls="nav-one" aria-selected="true">Meja Billiard</a>
              <a href="#nav-two" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Meja Billiard</a>
              <a href="#nav-three" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="false">Meja Billiard</a>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="<?= base_url('assets/images/meja_billiard.jpg') ?>" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Luas dan Kokoh</h2>
                    <p>Kami menjamin kualitas dan meja kami yang diimpor langsung dari USA berbahan metal yang sangat kokoh, juga bola-bola yang anti pecah walau terlempar sekalipun, juga stick yang punya akurasi yang tepat untuk permainan</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="<?= base_url('assets/images/meja_billiard.jpg') ?>" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Luas dan Kokoh</h2>
                    <p>Kami menjamin kualitas dan meja kami yang diimpor langsung dari USA berbahan metal yang sangat kokoh, juga bola-bola yang anti pecah walau terlempar sekalipun, juga stick yang punya akurasi yang tepat untuk permainan</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="<?= base_url('assets/images/meja_billiard.jpg') ?>" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Luas dan Kokoh</h2>
                    <p>Kami menjamin kualitas dan meja kami yang diimpor langsung dari USA berbahan metal yang sangat kokoh, juga bola-bola yang anti pecah walau terlempar sekalipun, juga stick yang punya akurasi yang tepat untuk permainan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Testimoni</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="testimonial-3">
              <blockquote>Tempatnya adem dan mbaknya juga ramah, harga cukup terjangkau bagi kalangan muda, jadi suka mampir kesini dikala bosan dengan tugas-tugas kuliah yang membuat kepala menjadi penat.</blockquote>
              <div class="vcard d-flex align-items-center">
                <div class="img-wrap mr-3">
                  <img src="<?= base_url('assets/images/abel.jpg') ?>" alt="Image" class="img-fluid">
                </div>
                <div>
                  <span class="d-block">Abel Gaudenzi</span>
                  <span class="position">Mahasiswa KALBIS Institute</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-3">
              <blockquote>Puja kerang ajaib. main Billiard disini sungguh menyenangkan, ditambah menu makanan dan minuman yang lengkap juga mbaknya yang cantik dapat melengkapi keasyikan bermain.</blockquote>
              <div class="vcard d-flex align-items-center">
                <div class="img-wrap mr-3">
                  <img src="<?= base_url('assets/images/leonardo.jpg') ?>" alt="Image" class="img-fluid">
                </div>
                <div>
                  <span class="d-block">Leonardo Halasantua</span>
                  <span class="position">Mahasiswa KALBIS Institute</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Gallery Kami</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="<?= base_url('assets/images/gallery_1.jpg') ?>" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Playing</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Dokumentasi</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="<?= base_url('assets/images/gallery_1.jpg') ?>" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Playing</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Dokumentasi</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="<?= base_url('assets/images/gallery_1.jpg') ?>" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Playing</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Dokumentasi</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="<?= base_url('assets/images/gallery_1.jpg') ?>" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Playing</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Dokumentasi</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="<?= base_url('assets/images/gallery_1.jpg') ?>" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Playing</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Dokumentasi</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="<?= base_url('assets/images/gallery_1.jpg') ?>" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Playing</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Dokumentasi</span></a>
              </div>

            </div>
          </div>



        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Our Blog</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="<?= base_url('assets/images/news_1.jpg') ?>" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Menu Baru! Thai Tea</a></h2>
                <span class="meta d-inline-block mb-3">October 01, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Kini kami sudah bekerja sama dengan Dum Dum untuk menyajikan menu Thai Tea di menu kami.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="<?= base_url('assets/images/news_1.jpg') ?>" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Menu Baru! Thai Tea</a></h2>
                <span class="meta d-inline-block mb-3">October 01, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Kini kami sudah bekerja sama dengan Dum Dum untuk menyajikan menu Thai Tea di menu kami.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="<?= base_url('assets/images/news_1.jpg') ?>" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Menu Baru! Thai Tea</a></h2>
                <span class="meta d-inline-block mb-3">October 01, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Kini kami sudah bekerja sama dengan Dum Dum untuk menyajikan menu Thai Tea di menu kami.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="footer-heading mb-4">Motto Kami</h2>
                <p>Kami akan selalu melayani pelanggan meskipun dengan permintaannya yang aneh-aneh.</p>
          </div>
          <div class="col-lg-6 ml-auto">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Social Media</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Youtube</a></li>
                  <li><a href="#">WhatsApp</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Cabang Kami</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Kelapa Gading</a></li>
                  <li><a href="#">Rawamangun</a></li>
                  <li><a href="#">Cipinang Indah</a></li>
                  <li><a href="#">Pulomas</a></li>
                  <li><a href="#">Mega Kuningan</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dirancang oleh <a href="https://instagram.com/mrezakhalafi" target="_blank" >M Reza Khalafi</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.animateNumber.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/aos.js') ?>"></script>

    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/js/homepage.js') ?>"></script>

  </body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Member Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

<form action="<?= base_url('homepage/login') ?>" method="post" id="form_login">
  <div class="form-group">
    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?= set_value('username'); ?>">
     <small class="form-text text-danger error_msg"></small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
     <small class="form-text text-danger error_msg2"></small>
  </div>
  <div class="row">
  <div class="col-7 mr-4">
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
    <label class="custom-control-label" for="customCheck">Remember Me</label>
  </div>
</div>
<div class="col">
  <div class="form-group">
  	<a href="">Forget Password?</a>
  </div>
</div>
  </div>
  <button type="button" onclick="prosesLogin()" id="login" class="btn btn-primary float-right">Login</button>
</form>




      </div>
    </div>
  </div>
</div>