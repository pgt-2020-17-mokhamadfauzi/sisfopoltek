<div class="container-fluid">
    
    <div class="alert alert-success" role="alert"><i class="fa fa-laptop"></i>&nbsp&nbspDashboard</div>

     <?php 
     foreach ($profil as $prf) : ?>
          <form method="post" action="<?php echo base_url('administrator/ubahprofil/update_aksi') ?>">
              <div class="form-group">
                  <label>Nama</label>
                  <input type="hidden" name="nim" value="<?php echo $prf->nim ?>">
                  <input type="text" name="nama" class="form-control" value="<?php echo $prf->nama ?>">
              </div>

              <div class="form-group">
                  <label>Program Studi</label>
                  <input type="text" name="programstudi" class="form-control" value="<?php echo $prf->programstudi ?>">
              </div>

              <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempatlahir" class="form-control" value="<?php echo $prf->tempatlahir ?>">
              </div>

              <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tanggallahir" class="form-control" value="<?php echo $prf->tanggallahir ?>">
              </div>

              <div class="form-group">
                  <label>Tahun Masuk</label>
                  <input type="text" name="tahunmasuk" class="form-control" value="<?php echo $prf->tahunmasuk ?>">
              </div>

              <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" name="kelas" class="form-control" value="<?php echo $prf->kelas ?>">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
       <?php endforeach; ?>
                    <br>
                    <br>
                    <br>
</div>