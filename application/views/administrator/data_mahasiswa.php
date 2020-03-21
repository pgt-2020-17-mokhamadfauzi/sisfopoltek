<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar Mahasiswa</strong>
                            </div>
                            <!--ini cari mulai -->
                            <div class="navbar-form"> 
                            <?php echo form_open('administrator/data_mahasiswa/search'); ?>
                           <!-- <select name="cariberdasarkan">
                            <option value="">Cari Berdasarkan</option> 
                            <option value="nim">NIM</option> 
                            <option value="nama">Nama</option>
                            <option value="jeniskelamin">Jenis Kelamin</option> 
                            <option value="programstudi">Program Studi</option>
                            <option value="kelas">Kelas</option>   
                            </select> -->
                            <input type="text" name="keyword" placeholder="Search">
                            <button type="submit" class="btn btn-success">Cari</button>
                            <?php echo form_close(); ?>
                            </div>
                            <!--ini tutup cari-->

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Program Studi</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($mahasiswa as $nm) : ?>
                                    <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $nm->nim; ?></td>
                                            <td><?php echo $nm->nama; ?></td>
                                            <td><?php echo $nm->jeniskelamin; ?></td>
                                            <td><?php echo $nm->programstudi; ?></td>
                                            <td><?php echo $nm->kelas; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->