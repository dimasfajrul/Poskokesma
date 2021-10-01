<?php $this->load->view("v_admin/side/head"); ?>
 <body id="page-top">
    <!-- Page Wrapper -->
  <div id="wrapper">
<?php $this->load->view("v_admin/side/navbar"); ?>

<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Posko Kesma</span>
                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/Kesma2.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">PARTNER KESMA</h1>
          <p class="mb-4">Menu partner kesma adalah menu inputan untuk view info kos yang berada pada halaman user .</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel menu view partner kesma</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead> 
                    <tr>
                      <th>No</th>
                      <th>Link Gform Partner</th>
                      <th>Nama Cp</th>
                      <th>Nomor Cp</th>
                      <th>Aksi</th>
                    </tr>  
                  </thead>
                  <tbody>
                     <?php 
                      $no = 1;
                     foreach ($partner->result() as $part) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $part->link_partner; ?></td>
                      <td><?php echo $part->nama_cp; ?></td>
                      <td><?php echo $part->link_cp; ?></td>
                      <td>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalEdit<?php echo $part->id_partner ?>" href="" title="edit"><i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-warning" href="<?php echo base_url('AdminPosko/Home/v_usulan_info_partner') ?>" title="List Usulan Info Partner"><i class="fa fa-list"></i>
                        </a>
                      </td>
                    </tr>
                     <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

      <?php $this->load->view("v_admin/side/footer"); ?>

      <!-- End of Footer -->
      
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- Scroll to Top Button-->

  <?php foreach ($partner->result() as $edit) { ?>
    <div class="modal fade" id="exampleModalEdit<?php echo $edit->id_partner ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">(+) Edit Menu Partner Kesma</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form autocomplete="off" method="post" action="<?php echo base_url("AdminPosko/Home/e_partnerkes")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
            <div class="modal-body">
              <input type="text" name="id_part" value="<?php echo $edit->id_partner ?>" hidden>
              <div class="form-group">
                <label>Link Google Form Partner Kesma</label>
                <input type="text" class="form-control" name="link_part" value="<?php echo $edit->link_partner ?>">
              </div>
              <div class="form-group">
                <label >Nama Contact Person</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $edit->nama_cp ?>">
              </div>
              <div class="form-group">
                <label >Nomor Contact Person (Link API WA)</label>
                <input type="text" class="form-control" name="nomor" value="<?php echo $edit->link_cp ?>">
              </div>              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" value="upload" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php } ?>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to exit admin.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('./') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view("v_admin/side/js"); ?>

<?php if ($this->session->flashdata()) { ?>
    <?php echo $this->session->flashdata('Pesan'); ?>                    
<?php } ?>