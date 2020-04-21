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
    <div class="row" style="padding-left: 15vh; padding-right: 20vh; margin-top: 10vh;">
      <div class="col-3">
        <a href="<?php echo site_url()."Home/logout"?>" style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Logout<img src="<?php echo base_url()?>assets/img/log-out.svg" align="right"></div>
        </div></a>
      </div>
      <div class="col data" style="padding-left: 3em;">
        <?php foreach ($user as $key) { 
          if($key->firstname!=null) $first=$key->firstname;
          else $first='';
          if($key->lastname!=null) $last=$key->lastname;
          else $last='';
          if($key->username!=null) $uname=$key->username;
          else$uname="";
          ?>
   
        <?php $str=explode('@',$this->session->userdata('_email'));
        ?>

        <form action="<?php echo base_url().'/Home/updateprofile';?>" method="post">
          <div class="row">
            <div class="col">
              <small><label>First Name<span style="color: red;"> *</span></label></small>
              <input type="text" class="form-control" name="firstname" id="firsname" value="<?php echo $first;?>">
            </div>
            <div class="col">
              <small><label>Last Name<span style="color: red;"> *</span></label></small>
              <input type="text" class="form-control" name="lastname" value="<?php echo $last;?>">
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Display Name<span style="color: red;"> *</span></label></small>
              <input type="text" class="form-control" name="displayname" value="<?php echo $uname;?>">
              <small id="emailHelp" class="form-text text-muted" style="font-style: italic;">This will be how your name will be displayed in the account section and in reviews</small>
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Email<span style="color: red;"> *</span></label></small>
              <input type="text" name="email" class="form-control" value="<?php echo $this->session->userdata('email');?>" >
            </div>
          </div>

          <div class="row" style="padding-top: 2em;">
            <div class="col">
              <h3 style="font-weight: 700;">Password change</h3>
            </div>
          </div>

           <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Current password (leave blank to leave unchanged)</label></small>
              <input type="password" name="curpass" class="form-control" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>New password (leave blank to leave unchanged)</label></small>
              <input type="password" name="newpass" class="form-control" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <small><label>Confirm New password</label></small>
              <input type="password" name="confirmnewpass" class="form-control" >
            </div>
          </div>

          <div class="row" style="padding-top: 1em;">
            <div class="col">
              <input type="submit" class="btn btn-outline-dark" style="font-weight: 800 !important; border-radius: 3px !important;" name="btnsave" value="SAVE CHANGE">
            </div>
          </div>
        </form>
        <?php } ?>
      </div>
      <div class="col-9 data" style="padding-left: 3em;">
          <?php $str=explode('@',$this->session->userdata('email'))?>
        <div class="row">
          <p>Hello <?php echo $str[0];?>(not <?php echo $str[0];?> ? <a href="<?php echo site_url()."Home/logout"?>">Log out</a>)
          </p>
        </div>
        <div class="row">
          <p></p>

        </div>
        <div class="row"></div>
        <div class="row" align="right"><a href="<?php echo site_url().'Home/deleteakun'?>"><p style="color: red;">Delete Account</p></a></div>
      </div>
      
    </div>
  </div>
</body>
</html>