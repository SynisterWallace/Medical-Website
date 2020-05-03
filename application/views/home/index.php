  <div class="container-fluid">

    <div class="row" style="background-color: #00CED9 ; padding-left: 5vh; padding-right: 20vh; color: white;">
      <small><a href="#" style="text-decoration: none; color: white;">HOME</a>/REGISTER</small>
    </div>
    <div class="row">
      <div class="col" style="background-image:url('../img/img6.jpg');">
        
      </div>
      <div class="col-md-4 py-3  border border-white rounded" style="margin-top: 9em; background-color:#FFFFFF;" >
      <h5 style="font-weight: bolder; color: black; padding-left: 5em;"><strong>Masuk untuk melanjutkan</strong></h5></br>
        <?= form_open(base_url('Home/login')); ?>
        <form method="post">
          <div class="form-group">
            
            <input type="text" class="form-control" id="username_or_email" name="username_or_email" placeholder="Email">
          </div>
          <div class="form-group">
            
            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
          </div>
          <div class="form-group">
            <a href="#" style="color: grey; text-decoration: none; padding-left:1vh;"><small><u>Lupa Password?</u></small></a>
          </div>
          <div class="row">
            <div class="col-md-12" style="padding-left:12em;">
              <button type="submit" name="login" class="btn btn-outline-dark" style="font-weight: bold; font-size: 11px; ">Masuk</button>              
            </div>
            
          </div>
          <div class="form-group" style="margin-bottom:9em;">
          <p style="font-size:15px; padding-left:9em;">Belum punya akun? <a href="<?php echo base_url().'Home/viewRegister';?>" style="color: #800000; text-decoration: none; font-size:18px;"><small><u>Daftar Disni</u></small></a></p>
            
          </div>
          <div class="row">
          <div class="col-md-2" style="background-color:#00CED9; border-radius:15px; margin-left:18em;">
            <a href="<?php echo base_url().'Home/loginDokter';?>" style="color: white; text-decoration: none;" onmouseover="this.style.color='red'"onmouseout="this.style.color='white'">Dokter</a>
          </div>
          <div class="col-md-2" style="background-color:#00CED9; border-radius:15px; margin-left:0.25vh">
            <a href="<?php echo base_url().'Home/loginAdmin';?>" style="color: white; text-decoration: none;" onmouseover="this.style.color='red'"onmouseout="this.style.color='white'">Admin</a>
          </div>
          </div>

        </form>
      </div>
    </div>
  </div>
