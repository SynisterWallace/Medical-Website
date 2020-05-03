<div class="container-fluid">

<div class="row" style="background-color: #00CED9 ; padding-left: 5vh; padding-right: 20vh; color: white;">
  <small><a href="#" style="text-decoration: none; color: white;">HOME</a>/Login</small>
</div>
<div class="row">
  <div class="col" style="background-image:url('../img/img6.jpg');">
    
  </div>
  <div class="col-md-4 py-3  border border-white rounded" style="margin-top: 9em; background-color:#FFFFFF;" >
  <h5 style="font-weight: bolder; color: black; padding-left: 5em;"><strong>Masuk Sebagai Dokter</strong></h5></br>
    <form method="post" action="<?php echo base_url('Home/loginDokter'); ?>">
      <div class="form-group">
        
        <input type="text" class="form-control" id="username_or_email" name="username_or_email" placeholder="Username">
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
      <div class="row" style="margin-top:10em;">
          <div class="col-md-2" style="background-color:#00CED9; border-radius:15px; margin-left:18em;">
            <a href="<?php echo base_url().'Home/viewlogin';?>" style="color: white; text-decoration: none;" onmouseover="this.style.color='red'"onmouseout="this.style.color='white'">User</a>
          </div>
          <div class="col-md-2" style="background-color:#00CED9; border-radius:15px; margin-left:0.25vh">
            <a href="<?php echo base_url().'Home/loginAdmin';?>" style="color: white; text-decoration: none;" onmouseover="this.style.color='red'"onmouseout="this.style.color='white'">Admin</a>
          </div>
      </div>
    </form>
  </div>
</div>
</div>
