<div class="container-fluid">
    
    <div class="alert alert-success" role="alert"><i class="fa fa-book"></i>&nbsp&nbspRekap Nilai</div>

                    <div class="col-md-4" style="margin-left: 30%" >
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title mb-3">Profil Mahasiswa</strong></center> 
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>images/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><strong><?php echo $nama; ?></strong></h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> <?php echo $nim; ?></div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <br>
    <!--Buat Tabel -->
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">DATA REKAP NILAI</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipe Nilai</th>
                                            <th>Sem. 1</th>
                                            <th>Sem. 2</th>
                                            <th>Sem. 3</th>
                                            <th>Sem. 4</th>
                                            <th>Sem. 5</th>
                                            <th>Sem. 6</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kondite</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!--Nilai Semester 1 -->
                                        <?php 
                                        $no=1;
                                        
                                        foreach ($nilaiakademik as $nak){ 
                                            ?><?php } ?>

                                        <!--Nilai Semester 2 -->
                                        <?php 
                                        foreach ($nilaiakademik1 as $nak1) : 
                                            ?><?php endforeach; ?>

                                        <!--Nilai Semester 3 -->
                                        <?php 
                                        foreach ($nilaiakademik2 as $nak2){ 
                                            ?><?php } ?>

                                        <!--Nilai Semester 4 -->
                                        <?php 
                                        foreach ($nilaiakademik3 as $nak3){ 
                                            ?><?php } ?>

                                        <!--Nilai Semester 5 -->
                                        <?php 
                                        foreach ($nilaiakademik4 as $nak4){ 
                                            ?><?php } ?>

                                        <!--Nilai Semester 6 -->
                                        <?php 
                                        foreach ($nilaiakademik5 as $nak5){ 
                                            ?><?php } ?>



                                        <tr>
                                            <td width="18%">Akademik</td>
                                            <td width="12,5%"><?php echo $nak->akhir ?></td>                                    <td width="12,5%"><?php echo $nak1->akhir ?></td> 
                                            <td width="12,5%"><?php echo $nak2->akhir ?></td>
                                            <td width="12,5%"><?php echo $nak3->akhir ?></td>
                                            <td width="12,5%"><?php echo $nak4->akhir ?></td>
                                            <td width="12,5%"><?php echo $nak5->akhir ?></td>
                                            <td width="16%"></td>
                                        </tr>
                                        <tr>
                                            <td>Magang</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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