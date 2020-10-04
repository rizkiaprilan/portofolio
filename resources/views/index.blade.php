<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Portfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/icon.png') }}" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  {{-- Bootstrap CSS CDN --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#home">RizkiAprilan.com</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">Tentang Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#certificate">Sertifikat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#project">Projek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image"
    style="background-image: url(https://i.ibb.co/VCbJMdv/photo-2020-10-03-07-12-52.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Hello Readers! I am Rizki Aprilan </h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Backend Developer</span><strong
              class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="https://i.ibb.co/Jv7q0sx/photo-2020-10-03-07-12-48.jpg"
                        class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Muhammad Rezki Aprilan</span></p>
                      <p><span class="title-s">Profile: </span> <span>Backend Developer</span></p>
                      <p><span class="title-s">Email: </span> <span>riskiazza@gmail.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>(617) 557-0089</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skill</p>
                  @foreach($skills as $s)
                  <span>{{ $s->name }}</span> <span class="pull-right">{{$s->score}}%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$s->score}}%;"
                      aria-valuenow="{{$s->score}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    saya adalah lulusan dari BINUS. saat ini saya berstatus magang, yang mana saya selalu ingin belajar
                    banyak dalam mendapatkan pengalaman bekerja. saya cukup baik dalam mencari info mengenai development
                    suatu project dan mencoba memecahkan masalah yang ada. didalam project saya bisa tugaskan dimana
                    saja. biasanya saya sering bekerja di backend developer tapi saya juga dapat berperan dibagian
                    akuisisi data untuk membantu normalisasi suatu data
                  </p>
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Work History
                    </h5>
                  </div>
                  @foreach($workHistory as $key=>$value)
                  <table class="table">
                    <tr>
                      <td>
                        <h5>Company: </h5>
                      </td>
                      <td>
                        <h5>{{ $value->company }}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Periode: </h5>
                      </td>
                      <td>
                        <h5>{{ $value->period }}</h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Peran: </h5>
                      </td>
                      <td>
                        <h5>{{ $value->role }}</h5>
                      </td>
                    </tr>
                  </table>
                  @php
                  $temp = explode(",",$value->job);
                  @endphp
                  <ol>
                    @foreach ($temp as $t)
                    <li>{{ $t }}</li>
                    @endforeach
                  </ol>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section certificate Star /-->
  <section id="certificate" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Certificates
            </h3>
            <p class="subtitle-a">
              Sertifikat yang pernah didapatkan
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($data as $d)
        <div class="col-md-4">
          <div class="work-box">
            <a href="{{ $d->link_picture }}" data-lightbox="gallery-mf" style="text-decoration: none">
              <div class="work-img">
                <img src="{{ $d->link_picture }}" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <h2 class="w-title">{{ $d->name }}</h2>
                <div class="w-more">
                  <p>{{ $d->description }}</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!--/ Section project Star /-->
  <section id="project" class="portfolio-mf sect-pt4 route">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Project
            </h3>
            <p class="subtitle-a">
              Project yang pernah dibuat
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($project as $p)
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              @php
              $temp = explode(",",$p->link_picture);
              @endphp
              <a href="{{ $p->link_repo }}" style="text-decoration: none"><img src="{{ $temp[0] }}" alt=""
                  class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="card-title"><a href="{{ $p->link_repo }}" style="text-decoration: none">{{ $p->name }}</a></h3>
              <p class="card-description">
                {{$p->description}}
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="{{ $p->link_repo }}" style="text-decoration: none">
                  <img src="https://www.flaticon.com/svg/static/icons/svg/25/25231.svg" alt=""
                    class="avatar rounded-circle">
                  <span class="author">Github</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/footer-1.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Kirim Email
                    </h5>
                  </div>
                  <div>
                    <form action="{{ route('send-email') }}" method="post" role="form" class="contactForm">
                      @csrf
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                              data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                              data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                              data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Ingin tahu lebih? bisa hubungi melalui:
                    </h5>
                  </div>
                  <div class="more-info">
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> Jl. Nimun Raya Gg. Haji Emin No.17L, Jakarta Selatan,
                        Indonesia</li>
                      <li><span class="ion-email"></span> riskiazza@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://web.facebook.com/profile.php?id=100013656347803"><span class="ico-circle"><i
                              class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/rizkiaprilan8/"><span class="ico-circle"><i
                              class="ion-social-instagram"></i></span></a></li>
                      <li><a href="https://twitter.com/RizkyAprilan"><span class="ico-circle"><i
                              class="ion-social-twitter"></i></span></a></li>
                      <li><a href="https://www.linkedin.com/in/rizki-aprilan-080068148/"><span class="ico-circle"><i
                              class="ion-social-linkedin"></i></span></a></li>
                      <li><a href="https://github.com/rizkiaprilan"><span class="ico-circle"><i
                              class="ion-social-github"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>rizkiaprilan.com</strong>. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('lib/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('lib/counterup/jquery.counterup.js')}}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{ asset('lib/typed/typed.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js')}}"></script>
  {{-- <script src="{{ asset('js/slideshow.js')}}"></script> --}}

  {{-- Bootstrap JS CDN --}}
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>