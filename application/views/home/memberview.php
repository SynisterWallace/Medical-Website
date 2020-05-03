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
                <h1 style="font-size: 50px; color:#FF8C00;">Selamat Datang <?php echo $str[0] ;  ?> </h1>
                <span><em>Dental</em> Care</span>
              </div>
              <div class="col">
                <div class="row bg-dark" style="opacity:80%; margin-bottom:1em; padding-top:3vh; padding-bottom:3vh;">
                  <a class="offset-md-1" style="color: white; font-size:medium;"><b>Pilih Layanan</b></a>
                </div>
                <div class="row bg-dark" style="opacity:80%; margin-bottom:1em; padding-top:3vh; padding-bottom:3vh;">
                  <a class="offset-md-1" style="color: white; font-size:medium;"><b>Daftar Dokter</b></a>
                </div>
              </div>
            </div>
        </div>
    </div>


</body>
</html>