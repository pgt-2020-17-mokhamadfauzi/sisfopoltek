<div class="conainer-fluid">
	

	 <div class="alert alert-success" role="alert"><i class="fa fa-key"></i>&nbsp&nbspUbah Password</div>


	 
	 	<div class="col-lg-6">
	 	<?php echo $this->session->flashdata('pesan') ?>
	 	<form method="post" action="<?= base_url('administrator/ubahpassword/update_aksi') ?>">
	 		<div class="form-group">
	 			<label>Password Lama</label>
	 			<input type="password" name="current_password" id="current_password" class="form-control"  >
	 			<?php echo form_error('current_password', '<div class="text-danger small ml-3">','</div>') ?>
	 		</div>
	 		<div class="form-group">
	 			<label>Password Baru</label>
	 			<input type="password" name="new_password1" id="new_password1" class="form-control"  >
	 			<?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
	 		</div>
	 		<div class="form-group">
	 			<label>Konfirmasi Password</label>
	 			<input type="password" name="new_password2" id="new_password2" class="form-control"  >
	 			<?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
	 		</div>
	 	<button type="submit" class="btn btn-primary">Ubah</button>
	 	</form>
	 </div>
	 
	 <br>
	 <br>
</div>