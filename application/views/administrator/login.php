
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>

                <div class="login-form">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <form method="post" action="<?php echo base_url('auth/proses_login') ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" placeholder="Username Anda">
                            <?php echo form_error('username', '<div class="text-danger small ml-3">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password Anda">
                            <?php echo form_error('password', '<div class="text-danger small ml-3">','</div>') ?>
                        </div>
                        <div class="checkbox">
                            <label class="pull-right">
                                <a href="#">Lupa Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="social-login-content">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

   