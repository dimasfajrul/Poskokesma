 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url("AdminPosko/Home") ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Posko Kesma</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($this->uri->segment('2')=="Home"){ echo "active";}?>">
        <a class="nav-link" href="<?php echo base_url("AdminPosko/Home") ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php if($this->uri->segment('3')=="v_info_kos"){ echo "active";}?>">
        <a class="nav-link collapsed" href="<?php echo base_url('AdminPosko/Home/v_info_kos') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Info Kos</span><i class="fas fa-angle-right" style="float: right;"></i>
        </a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <li class="nav-item <?php if($this->uri->segment('3')=="v_partner_kesma"){ echo "active";}?>">
        <a class="nav-link collapsed" href="<?php echo base_url('AdminPosko/Home/v_partner_kesma') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Partner Kesma</span><i class="fas fa-angle-right" style="float: right;"></i>
        </a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item <?php if($this->uri->segment('3')=="v_mitra_kesma"){ echo "active";}?>">
        <a class="nav-link collapsed" href="<?php echo base_url('AdminPosko/Home/v_mitra_kesma') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Mitra Kesma</span><i class="fas fa-angle-right" style="float: right;"></i>
        </a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item <?php if($this->uri->segment('3')=="v_layanan_advokasi"){ echo "active";}?>">
        <a class="nav-link collapsed" href="<?php echo base_url('AdminPosko/Home/v_layanan_advokasi') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Layanan Advokasi</span><i class="fas fa-angle-right" style="float: right;"></i>
        </a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item <?php if($this->uri->segment('3')=="v_thumbnail_kesma"){ echo "active";}?>">
        <a class="nav-link collapsed" href="<?php echo base_url('AdminPosko/Home/v_thumbnail_kesma') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Thumbnail Kesma</span><i class="fas fa-angle-right" style="float: right;"></i>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->