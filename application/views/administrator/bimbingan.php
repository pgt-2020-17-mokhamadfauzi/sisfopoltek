<div class="container-fluid">
    
    <div class="alert alert-success" role="alert"><i class="fa fa-podcast"></i>&nbsp&nbspKonsultasi Pembimbing Akademik</div>

                    <div class="col-md-4" style="margin-left: 30%">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title mb-3">Profile Mahasiswa</strong></center> 
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>images/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><strong><?php echo $nama; ?></strong></h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> <strong><?php echo $nim; ?></strong></div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <br>
    <!--Buat Tabel -->

    <table border="0">
        <tr>
            <td>Nama Pembimbing Akademik</td>
            <td>:</td>
            <td><input type='text' name='nama' maxlength='50' size='30'></td>
        </tr>

        <tr>
            <td>Tulis Pesan</td>
            <td>:</td>
            <td><textarea name='alamat' width='200' height='200'maxlength="200"></textarea></td></td>
        </tr>
        <tr>
            <td colspan="3"> <button value='submit'>Simpan</td>
        </tr>
    </table>
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="25%">Jenis Pesan</th>
                                            <th width="20%">Tanggal</th>
                                            <th width="50%">Pesan</th>
                                        </tr>
                                    
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="5%">1</td>
                                            <td width="25%">untuk dosen</td>
                                            <td  width="20%">10 januari</td>
                                            <td width="40%">pak test</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
                    <br>
</div>