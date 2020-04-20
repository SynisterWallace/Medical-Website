<!doctype html>
<html lang="en">
<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- Footer -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" >
  <link href="<?php echo base_url()?>assets/bootstrap/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  <!-- MY CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/stylenav.css">
  <style type="text/css">
  #itemku a:hover{ color: red; }

  a .list-group-item:hover{
    color: red;
  }
  .data a{
    color:#222;
  </style>
  <title><?php echo $title ;?></title>
</head>

<body >
  <nav class="navbar sticky-top navbar-expand-md navbar-light justify-content-between bg-white fluid" style="padding-left: 20vh; padding-right: 20vh; background-color:#2C2E3E;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="<?php echo base_url() . 'Home/index';?>"><small>
          <img src="../img/logo.png" style="padding-left: 0px; height: 35px; width: 140px;" alt="logo" name="logo" id="logo"></small></a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <div class="row" style="padding-right: 2em" id="itemku">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'Home/viewGunung';?>" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'"  href="#" style="color: grey; ">Gunung</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'Home/viewVendor';?>" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="#" style="color: grey; ">Vendor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="<?php echo base_url().'Home/viewSejarah';?>" style="color: grey; ">Hubungi Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php if($this->session->userdata('username_or_email')==''){echo base_url() . 'Home/viewlogin';}else{echo base_url() . 'Home/viewprofile';}?>" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="#" style= "color: grey"><i class="fas fa-user"></i> Akun</a>
          </li>
        </div>
        
        <div class="row border-left">
          
          <li class="nav-item">
            <form class="form-inline my-6">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-8 my-sm-0" type="submit">Search</button>
            </form>
          </li>
        </div>
        
      </ul>
    </nav>