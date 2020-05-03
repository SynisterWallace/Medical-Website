<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#00CED9;">
  <div class="position"> 
    <a class="navbar-brand" href="<?php if($this->session->userdata('email')==''){echo base_url() . 'Home/index'; }else{echo base_url() . 'Home/viewMember';}?>">Medilab</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">test</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'" href="" style="color: white; ">Hubungi Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'" href="" style="color: white; ">Tentang Kami</a>
          </li>
          <li class="nav-item" style="background-color:#800000; border-radius:15px;">
            <a class="nav-link" <?php $str=explode('@',$this->session->userdata('email'))?>  href="<?php if($this->session->userdata('email')==''){echo base_url() . 'Home/viewlogin'; }else{echo base_url() . 'Home/viewprofile';}?>" onmouseover="this.style.color='gray'" onmouseout="this.style.color='white'" href="#" style= "color: white"><i class="fas fa-user"></i> <?php if($this->session->userdata('email')==''){echo "Akun"; }else{echo $str[0] ;}?> </a>
          </li>
    </div>
  </div>
</nav>
