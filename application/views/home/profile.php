<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

  <title></title>

</head>
<style type="text/css">
  label{color: #222;font-weight: bolder;}
  input{height: 3.3em !important;}
  .btn:hover{height: 3.3em !important;}
</style>

<body>
<div class="container-fluid" style="padding-bottom: 5em;">
    <div class="row" style="background-color: #00CED9; padding-left: 5vh; padding-right: 20vh; color: white;">
      <small><a href="#" style="text-decoration: none; color: white;">HOME</a> / MY ACCOUNT</small>
    </div>

    <div class="row" style="padding-left: 20vh; padding-right: 20vh; margin-top: 10vh;">
        <div class="row">
          <h1 class="head" style="font-weight: 700;"><span style="border-bottom: 5px solid #e51937; padding-bottom: 5px;">RIN</span>CIAN AKUN</h1>
        </div>    
    </div>
    <div class="row" style="padding-left: 20vh; padding-right: 20vh; margin-top: 10px;">
      <div class="row">
          <p style="color: grey; font-size: 23px;"></p>
      </div>
    </div>
    <div class="col-9 data" style="padding-left: 7em;">
          <?php $str=explode('@',$this->session->userdata('email'))?>
        <div class="row">
          <p>Halo <?php echo $str[0];?>(Bukan <?php echo $str[0];?>? <a href="<?php echo site_url()."Home/logout"?>">Keluar</a>)
          </p>
        </div>
        <div class="row">
          <p></p>

        </div>
        <div class="row"></div>
        
      </div>
    <div class="row" style="padding-left: 15vh; padding-right: 20vh; margin-top: 10vh;">
      <div class="col-3">
        <a href="<?php echo site_url()."Home/logout"?>" style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Logout<img src="<?php echo base_url()?>assets/img/log-out.svg" align="right"></div>
        </div></a>
      </div>
      <div class="col data" style="padding-left: 3em;">
        <?php foreach ($user as $key) { 
          if($key->email!=null) $first=$key->email;
          else $first='';
          if($key->nama!=null) $last=$key->nama;
          else $last='';
          if($key->alamat!=null) $uname=$key->alamat;
          else$uname="";
          ?>
   
        <?php $str=explode('@',$this->session->userdata('_email'));
        ?>

        <form action="<?php echo base_url().'/Home/updateprofile';?>" method="post">
          <div class="row">
            <div class="col">
              <small><label>Nama Depan<span style="color: red;"> *</span></label></small>
              <input type="text" class="form-control" name="firstname" id="firsname" value="<?php echo $first;?>">
            </div>
            <div class="col">
              <small><label>Nama Belakang<span style="color: red;"> *</span></label></small>
              <input type="text" class="form-control" name="lastname" value="<?php echo $last;?>">
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Username<span style="color: red;"> *</span></label></small>
              <input type="text" class="form-control" name="displayname" value="<?php echo $uname;?>">
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Email<span style="color: red;"> *</span></label></small>
              <input type="text" name="email" class="form-control" value="<?php echo $this->session->userdata('email');?>" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Nomor Telepon<span style="color: red;"> *</span></label></small>
              <input type="text" name="nomor_telpon" class="form-control" value="<?php echo $this->session->userdata('nomor_telpon');?>" >
            </div>
          </div>

          <div class="row" style="padding-top: 2em;">
            <div class="col">
              <h3 style="font-weight: 700;">Ubah Kata Sandi</h3>
            </div>
          </div>

           <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Kata Sandi Sekarang (Kosongi jika tidak ada perubahan)</label></small>
              <input type="password" name="curpass" class="form-control" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Kata Sandi Baru (Kosongi jika tidak ada perubahan)</label></small>
              <input type="password" name="newpass" class="form-control" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Konfirmasi Kata Sandi Baru</label></small>
              <input type="password" name="confirmnewpass" class="form-control" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <input type="submit" class="btn btn-outline-dark" style="font-weight: 800 !important; border-radius: 3px !important;" name="btnsave" value="SIMPAN PERUBAHAN">
            </div>
          </div>
          <div class="row" align="right"><a href="<?php echo site_url().'Home/deleteakun'?>"><p style="color: red;">Hapus Akun</p></a></div>
        </form>
        <?php } ?>
      </div>
      
      
    </div>
  </div>
</body>
</html>