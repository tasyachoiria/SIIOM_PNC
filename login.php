<?php include 't_topLogin.html'; ?>







<!-- <div class="vertical-alignment-helper">
        <h2 class="text-center text-bold">Login</h2>
        <div class="p-3">

            <form action="c_login.php" method="POST">

                <div class="mb-2 col-40">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>

                <div class="mb-2 col-40">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>

                <div class="mb-2 col-40">
                    <select class="form-control form-select" placeholder="Level" name="level">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="col-40">
                    <button type="submit" class="btn btn-block btn-warning">Sign-in</button>

                </div>
            </form>
        </div>
    </div>
    </div>

    <?php if (isset($_GET['pesan'])) { ?>
        <div class="container card bg-danger text-center text-light">
            <label><?php echo $_GET['pesan']; ?></label>
        </div>
    <?php } ?> -->


<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>SIIOM</b>PNC</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <?php if (isset($_GET['pesan'])) { ?>
                <div class="container card bg-danger text-center text-light">
                    <label><?php echo $_GET['pesan']; ?></label>
                </div>
            <?php } ?>
            <p class="login-box-msg">Silahkan login terlebih dahulu</p>

            <form action="c_login.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control form-select" placeholder="Level" name="level">
                        <option value="1">Pengelola</option>
                        <option value="2">mbuh</option>
                        <option value="3">Mahasiswa</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-users"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign-in</button>
                <a href="index.php" class="btn btn-block btn-danger">Back</a>
            </form>


            <!-- /.social-auth-links -->


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->


<?php include 't_footLogin.html'; ?>