<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="position"> 
    <a class="navbar-brand" href="#">Medikal</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">test</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link active ml-auto" href="<?php echo base_url('Home/viewAdmin')?>">Service<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo base_url('Home/viewAdminPembayaran')?>">Payment</a>
        <a class="nav-item nav-link" href="<?php echo base_url('Home/viewAdminCustomer')?>">Patient</a>
        <a class="nav-item nav-link" href="<?php echo base_url('Home/logout'); ?>">Logout</a>
    </div>
  </div>
</nav>
