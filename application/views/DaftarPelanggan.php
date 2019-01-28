<div class="container-fluid">
  <div class="block-header">
    <h2>
      DAFTAR PELANGGAN
    </h2>
  </div>
</div>

<!-- BASIC VALIDATION -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <?php
            $notifikasi = $this->session->flashdata('notif');
            if ($notifikasi != null) {
              echo '<div class="alert alert-danger">
                '.$notifikasi.'
              </div>';
            }
           ?>
        </div>
        <div class="body">
            <form id="form_validation" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan'); ?>" method="POST">
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" name="NamaPelanggan" class="form-control">
                  <label class="form-label">Nama Pelanggan</label>
                </div>
              </div>
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="text" class="form-control" name="NoTelp">
                    <label class="form-label">No Telephone</label>
                  </div>
                </div>
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="text" name="Username" class="form-control">
                    <label class="form-label">Username</label>
                  </div>
                </div>
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="password" name="Password" class="form-control">
                    <label class="form-label">Password</label>
                  </div>
                </div>
                <div class="form-group form-float">
                  <div class="form-line">
                    <textarea name="alamat" rows="5" cols="30" class="form-control no-resize"></textarea>
                    <label class="form-label">Description</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
            </form>
        </div>
      </div>
    </div>
</div>
