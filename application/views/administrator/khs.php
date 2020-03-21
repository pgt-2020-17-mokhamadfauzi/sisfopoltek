<div class="container-fluid">
    
    <div class="alert alert-success" role="alert"><i class="fa fa-id-card-o"></i>&nbsp&nbspKHS</div>

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
                    <br>
                    <br>

                     <!--Buat Tabel -->
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">KHS SEMESTER 1</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode MK</th>
                                            <th>Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        foreach ($nilaiakademik as $nak){ 
                                            ?>
                                        <tr>
                                            <td><?php echo $nak->kodemk ?></td>
                                            <td><?php echo $nak->namamk ?></td>
                                            <td><?php echo $nak->sks ?></td>
                                            <td><?php echo $nak->huruf ?></td>
                                            <td><?php echo $nak->akhir ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">KHS SEMESTER 2</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode MK</th>
                                            <th>Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        foreach ($nilaiakademik1 as $nak){ 
                                            ?>
                                        <tr>
                                            <td><?php echo $nak->kodemk ?></td>
                                            <td><?php echo $nak->namamk ?></td>
                                            <td><?php echo $nak->sks ?></td>
                                            <td><?php echo $nak->huruf ?></td>
                                            <td><?php echo $nak->akhir ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">KHS SEMESTER 3</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode MK</th>
                                            <th>Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        foreach ($nilaiakademik2 as $nak){ 
                                            ?>
                                        <tr>
                                            <td><?php echo $nak->kodemk ?></td>
                                            <td><?php echo $nak->namamk ?></td>
                                            <td><?php echo $nak->sks ?></td>
                                            <td><?php echo $nak->huruf ?></td>
                                            <td><?php echo $nak->akhir ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">KHS SEMESTER 4</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode MK</th>
                                            <th>Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        foreach ($nilaiakademik3 as $nak){ 
                                            ?>
                                        <tr>
                                            <td><?php echo $nak->kodemk ?></td>
                                            <td><?php echo $nak->namamk ?></td>
                                            <td><?php echo $nak->sks ?></td>
                                            <td><?php echo $nak->huruf ?></td>
                                            <td><?php echo $nak->akhir ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content --><div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">KHS SEMESTER 5</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode MK</th>
                                            <th>Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        foreach ($nilaiakademik4 as $nak){ 
                                            ?>
                                        <tr>
                                            <td><?php echo $nak->kodemk ?></td>
                                            <td><?php echo $nak->namamk ?></td>
                                            <td><?php echo $nak->sks ?></td>
                                            <td><?php echo $nak->huruf ?></td>
                                            <td><?php echo $nak->akhir ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <center><strong class="card-title">KHS SEMESTER 6</strong></center>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode MK</th>
                                            <th>Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                        foreach ($nilaiakademik5 as $nak){ 
                                            ?>
                                        <tr>
                                            <td><?php echo $nak->kodemk ?></td>
                                            <td><?php echo $nak->namamk ?></td>
                                            <td><?php echo $nak->sks ?></td>
                                            <td><?php echo $nak->huruf ?></td>
                                            <td><?php echo $nak->akhir ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
</div>