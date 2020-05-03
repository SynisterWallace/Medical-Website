<div class="container-fluid">
<div class="row" style="background-color: #00CED9 ; padding-left: 5vh; padding-right: 20vh; color: white;">
  <small><a href="#" style="text-decoration: none; color: white;">HOME</a>/REGISTER</small>
</div>
<div class="row">
  
  <div class="col-md-4 py-3  border border-white rounded" style="margin-top: 3em; margin-bottom: 8em; background-color:#FFFFFF;" >
  <h5 style="font-weight: bolder; color: black; padding-left: 8em;"><strong>Registrasi</strong></h5></br>
        <?= form_open(base_url('Home/register')); ?>
        <form method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkbox_policy">
            <label class="form-check-label" for="checkbox_policy">Privacy policy short description</label>
          </div>
          <div class="col-md-12" style="padding-left:9em;">
            <button type="submit" name="login" class="btn btn-outline-dark" style="font-weight: bold; font-size: 11px; ">Daftar</button>
          </div>
                       
        </form>
  </div>
  <div class="col" style="background-image:url('../img/img6.jpg');">
    
  </div>
</div>
</div>
