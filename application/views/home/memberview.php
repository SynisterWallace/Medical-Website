<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="http://localhost/siskom-gunung/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/siskom-gunung/css/fontAwesome.css">
        <link rel="stylesheet" href="http://localhost/siskom-gunung/css/hero-slider.css">
        <link rel="stylesheet" href="http://localhost/siskom-gunung/css/templatemo-main.css">
        <link rel="stylesheet" href="http://localhost/siskom-gunung/css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="http://localhost/siskom-gunung/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style type="text/css">
            .baner-content {
              padding-top: 30vh;
              text-align: center;
              background-image: url(../img/img7.jpg);
            }

            .baner-content h1 {
              margin-top: 0px;
              font-size: 128px;
              color: #fff;
              font-weight: 900;
              text-transform: uppercase;
              margin-bottom: 0px;
              transition-delay: 2s
            }

            .baner-content em {
              color: #ff7d27;
              font-weight: 600;
              font-style: normal;
              transition-delay: 2s;
            }

            .baner-content span {
              display: inline-block;
              margin-top: -20px;
              font-weight: 300;
              font-size: 48px;
              color: #fff;
            }

            .baner-content .primary-button {
              margin-top: 15px;
            }

            .service-content {
              padding-left: 15px;
              padding-right: 15px;
              padding-top: 15vh;
              background-image: url(../img/Semeru.jpg);
              background-attachment: fixed;
              min-height: 100vh;
              background-size: cover;
              background-position: center center;
            }

            .service-content .left-text h4 {
              font-size: 24px;
              font-weight: 500;
              color: #fff;
            }
        </style>
    </head>

<body>



    <div class="parallax-content baner-content" id="home">
        <div class="container" >
            <div class="row">
              <div class="col-md-8 first-content" style="text-align:left; padding-top:6em;" >
                <?php $str=explode('@',$this->session->userdata('email'))?>
                <h1 style="font-size: 50px; color:#FF8C00;">Selamat Datang  <?php echo $str[0] ;  ?> </h1>
                <span><em>Dental</em> Care</span>
              </div>
              <div class="col">
                <div class="row bg-light" style="opacity:80%; margin-bottom:1em; padding-top:2vh; padding-bottom:2vh;">
                  <a class="offset-md-1"><b>Konsultasi</b></a>
                </div>
                <div class="row bg-light" style="opacity:80%; margin-bottom:1em; padding-top:2vh; padding-bottom:2vh;">
                  <a class="offset-md-1"><b>Temukan Dokter</b></a>
                </div>
                <div class="row bg-light" style="opacity:80%; margin-bottom:1em; padding-top:2vh; padding-bottom:2vh;">
                  <a class="offset-md-1"><b>Buat Janji<b></a>
                </div>
              </div>
            </div>
        </div>
    </div>


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>Rekomendasi Gunung Untukmu</h4>
                        <div class="line-dec"></div>
                        <p>Rekomendasi tempat pendakiann untuk anda <a rel="nofollow" href="https://www.youtube.com/watch?v=sW059mdBBCw">website</a> untuk melihat overview tempat pendakian favorit</p>
                        <div class="primary-button">
                            <a href="<?php echo base_url().'Home/viewGunung';?>">Eksplorasi lebih jauh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="service-item">
                               <a href="<?php echo base_url().'Home/viewSemeru';?>"><img src="https://blog.tripcetera.com/id/wp-content/uploads/2019/03/ranu-kumbolo.jpg" style="width: 300px; height: 150px;" ></a> 
                                <h4>Semeru</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Sabana_1_Merbabu.jpg" style="width: 300px; height: 150px;">
                                <h4>Merbabu</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="https://lh4.googleusercontent.com/proxy/sUezBWsLZp7oPXZ6uC8L8gvyDu2u_l1MR-39vx3GcgUud8EgNn6AM9Yiekpa18o8QUfWTrggoqQwkrje4lIyneWLEVbZikSQOjv2jribs4kBFO029BmUnox0DCbfBo1_7NKPI47N7GU22fKSILPvtU-RD1VK_p0kSbFd_w=s0-d" style="width: 300px; height: 150px;">
                                <h4>Bromo</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <img src="https://s25910.pcdn.co/wp-content/uploads/2019/06/Mount-Rinjani-Trekking.jpg" style="width: 300px; height: 150px;">
                                <h4>Rinjani</h4>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    
   <!-- <div class="overlay"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 600px;">
      <img class="d-block w-100" src="https://blog.tripcetera.com/id/wp-content/uploads/2019/03/ranu-kumbolo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="font-size: 40px;">Gunung Semeru</h4>
        <p>Eksplorasi Keindahan Gunung Semeru</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 600px;">
      <img class="d-block w-100" src="https://lh4.googleusercontent.com/proxy/sUezBWsLZp7oPXZ6uC8L8gvyDu2u_l1MR-39vx3GcgUud8EgNn6AM9Yiekpa18o8QUfWTrggoqQwkrje4lIyneWLEVbZikSQOjv2jribs4kBFO029BmUnox0DCbfBo1_7NKPI47N7GU22fKSILPvtU-RD1VK_p0kSbFd_w=s0-d" alt="Second slide" height="100%" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="font-size: 40px;">Gunung Bromo</h4>
        <p>Eksplorasi Keindahan Gunung Bromo</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 600px;">
      <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Sabana_1_Merbabu.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="font-size: 40px;">Gunung Merbabu</h4>
        <p>Eksplorasi Keindahan Gunung Merbabu</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->


    <div class="tabs-content" id="our-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                      <div id="tab1">
                        <img src="img/1st-tab.jpg" alt="">
                        <p><a href="<?php echo base_url().'Home/viewReview';?>"> Eiger</a></p>
                      </div>
                      <div id="tab2">
                        <img src="img/2nd-tab.jpg" alt="">
                        <p><a href="#">Arei</a></p>
                      </div>
                      <div id="tab3">
                        <img src="img/3rd-tab.jpg" alt="">
                        <p><a href="#">Consina</a></p>
                      </div>
                      <div id="tab4">
                        <img src="img/4th-tab.jpg" alt="">
                        <p><a href="#">The North Face</a></p>
                      </div>
                    </section>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>