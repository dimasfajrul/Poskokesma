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
        <h1 class="h3 mb-2 text-gray-800">THUMBNAIL KESMA</h1><hr>
        <p class="mb-0">Menu thumbnail kesma adalah menu inputan biodata struktur keanggotaan kesma untuk view struktur anggota kesma yang berada pada halaman user .</p>
        <a class="mb-2 btn btn-info" href="" data-toggle="modal" data-target="#exampleModal">(+) Tambah Biodata Anggota</a><hr>

          <div class="row">
            <?php foreach ($thumbnail->result() as $thumb) { ?>
                <div class="card-body col-lg-4">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo base_url().$thumb->foto ?>" alt="Card image cap">
                    <hr>
                    <div class="card-body" style="text-align: center;">
                      <h6 style="font-weight: bold;"><?php echo $thumb->nama; ?></h6>
                      <h6 style="font-weight: bold;"><?php echo $thumb->jabatan; ?></h6>
                      <p style="font-weight: bold;"><?php echo $thumb->motto; ?></p>
                    </div>
                    <div class="card-footer" style="text-align: center;">
                      <a class="btn btn-primary" href="" title="Edit" data-toggle="modal" data-target="#exampleModalEdit<?php echo $thumb->id_struktur ?>"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-danger" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" title="Hapus" href="<?php echo base_url('AdminPosko/Home/hapus/'.$thumb->id_struktur) ?>" ><i class="fa fa-trash"></i></a>
                    </div>
                  </div>
                </div>
            <?php } ?>
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

  <!-- Modal Tambah Anggota -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">(+) Tambah Biodata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" method="post" action="<?php echo base_url("AdminPosko/Home/t_biodata_kesma")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label >Jabatan</label>
            <input type="text" class="form-control" name="jabatan" >
          </div>
          <div class="form-group">
            <label>Motto</label>
            <textarea class="form-control" rows="3" name="motto"></textarea>
          </div>
          <div class="form-group">
            <label for="upload_file">Masukan Foto Biodata</label>
            <br>
            <input type="file" id="input-file-now" class="dropify" name="foto_biodata" required="" />
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

<!-- Modal Edit Anggota -->
<?php foreach ($thumbnail->result() as $edit) { ?>
<div class="modal fade" id="exampleModalEdit<?php echo $edit->id_struktur ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">(+) Edit Biodata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form autocomplete="off" method="post" action="<?php echo base_url("AdminPosko/Home/e_biodata_kesma")?>" enctype="multipart/form-data" class="form-horizontal form-bordered">
        <input type="text" name="id" hidden="" value="<?php echo $edit->id_struktur ?>">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $edit->nama ?>">
          </div>
          <div class="form-group">
            <label >Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="<?php echo $edit->jabatan ?>">
          </div>
          <div class="form-group">
            <label>Motto</label>
            <textarea class="form-control" rows="3" name="motto"><?php echo $edit->motto ?></textarea>
          </div>
          <div class="form-group">
            <label>Foto Lama</label><br>
            <center>
              <img style="width: 60%" src="<?php echo base_url().$edit->foto ?>">
            </center>
          </div>
          <div class="form-group">
            <label for="upload_file">Masukan Foto Biodata Baru</label>
            <br>
            <input type="file" id="input-file-now" class="dropify" name="foto_biodata" />
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

  <!-- Scroll to Top Button-->
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

<script type="text/javascript">
  function deleted(param){
    var proc = window.confirm('Apakah Anda yakin akan menghapus data?');
    if(proc){
      swal("Good job!", "You clicked the button!", "success");
      document.location='<?php echo base_url(); ?>AdminPosko/Home/hapusdata/'+param;

    }
  }
  function deletede($id){
     swal({
        title: "Are you sure?",
        text: "Apakah Anda yakin ingin menghapus data ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Iya, hapus data!",
        closeOnConfirm: false
      },
      function(){
        if (swal()) {
        document.location='<?php echo base_url("AdminPosko/Home/hapusdata/"); ?>';
        // swal("Deleted!", "Your imaginary file has been deleted.", "success");
          }
        
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
      });
  }
</script>


<script src="<?php echo base_url() ?>assets/admin/dropify/dist/js/dropify.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });

</script>

