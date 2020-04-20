<!-- Footer -->
<footer class="page-footer font-small " style="background-color: #00CED9;"  >

      <div class="container" >

        <div class="row py-4 d-flex align-items-center" >


        </div>

      </div>

    <div class="container text-center text-md-left mt-5">

      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mb-2">

          <form class="input-group">
            <input type="text" class="form-control form-control-sm bg-light" placeholder="Your email address" aria-label="Your email" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-sm btn-danger my-0" style="width: 95%;" type="button">Subscribe</button>
            </div>
          </form>
          <div class="col-md-15 py-5">
          <div class="mb-2 flex-center">

            <a class="fb-ic" style="color: white;">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-6 mr-3 fa-2x"> </i>
            </a>
            <a class="tw-ic" style="color: white;">
              <i class="fab fa-twitter fa-lg white-text mr-md-6 mr-3 fa-2x"> </i>
            </a>
            <a class="ins-ic" style="color: white;">
              <i class="fab fa-instagram fa-lg white-text mr-md-6 mr-3 fa-2x"> </i>
            </a>
            <a class="tw-yt" style="color: white;">
              <i class="fab fa-youtube fa-lg white-text mr-md-6 mr-3 fa-2x"> </i>
            </a>


            
          </div>
        </div>

        </div>

        <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4">

          <h6 class="text-uppercase font-weight-bold" style="color: white;">Blog</h6>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Informasi Pendaki</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Arei meluncurkan produk baru untuk pendakian di tempat ekstrim</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Keindahan Kawah ijen di malam tahun baru</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Pendataan pendaki 2019 oleh pemerintah lokal</a>
          </p>
          

        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2">

          <h6 class="text-uppercase font-weight-bold" style="color: white;">Tentang Kami</h6>
          <p>
            <a href="<?php echo base_url().'Home/viewsejarah' ?>" style="color: grey; font-size: small;">Sejarah</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Teams</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Berita & Pengumuman</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Ulasan</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" >

          <h6 class="text-uppercase font-weight-bold" style="color: white;">Informasi Kontak</h6>
          <p>
            <a href="#!" style="color: grey; font-size: small;">Jalan Legimo 18, Tunjungrejo, Lumajang, Jawa Timur</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">081236162626</a>
          </p>
          <p>
            <a href="#!" style="color: grey; font-size: small;">hectorclarkson@gmail.com</a>
          </p>
        </div>

      </div>

    </div>

    <div class="footer-copyright text-center py-1">
      <div class="row">
      <div class="col-12">
        <p style="font-size: 10px;"> Active Session: <?= $this->session->userdata('username_or_email'); ?>
      </div>
  </footer>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	

</body>
</html>