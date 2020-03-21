<div class="container-fluid">
    
    <div class="alert alert-success" role="alert"><i class="fa fa-exclamation-triangle"></i>&nbsp&nbspKondite</div>

                    <div class="col-md-4" style="margin-left: 30%">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title mb-3">Profile Mahasiswa</strong></center> 
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>images/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><strong><?php echo $nama; ?></strong></h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i><strong><?php echo $nim; ?></strong></div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <br>
    <!--Buat Tabel -->

     <table border="0">


    </table>
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Poin</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="20%">Jenis Poin</th>
                                            <th width="10%">Poin</th>
                                            <th width="50%">Keterangan</th>
                                            <th width="25%">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                        <?php 
                        foreach ($kondite as $knd) {
                        $poin[] = $knd->poin;
                        $jumlahnya = array_sum($poin);
                         ?>
                                        <tr>
                                            <td><?php echo $knd->jenispoin ?></td>
                                            <td><?php echo $knd->poin ?></td>
                                            <td><?php echo $knd->keterangan ?></td>
                                            <td><?php echo $knd->tahun ?></td>
                                        </tr>
                                        
                                    <?php } ?>
                                    </tbody>
                                    <tr>
            <td colspan="1">Total Poin : </td>
            <td colspan="3" ><input style="float: right; width: 24% " type="number" name="poin" maxlength="3" size="3" value="<?php echo $jumlahnya ?>" readonly></td>
            
        </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
                    <br>
</div>