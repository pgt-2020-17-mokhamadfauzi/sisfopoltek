<div class="container-fluid">
<div class="alert alert-success" role="alert"><i class="fa fa-university"></i>&nbsp&nbspProfil Mahasiswa</div>
<center><div class="col-md-4" align="left">
                        <aside class="profile-nav alt">
                            <section class="card"  >
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="<?php echo base_url() ?>images/admin.jpg">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="text-light display-6"><?php echo $nama; ?></h4>
                                            <p><?php echo $programstudi; ?></p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-info"></i> NIM :  <?php echo $nim; ?> </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i>&nbspKELAS : <?php echo $kelas; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-map-marker"></i> TEMPAT LAHIR : <?php echo $tempatlahir; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-calendar"></i> TANGGAL LAHIR : <?php echo $tanggallahir; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-comments-o"></i> PEMBIMBING : <?php echo $pembimbing; ?></a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div><center><br><br>
</div>