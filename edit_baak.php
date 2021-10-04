<?php
include 't_sideadmin.php';
?>

<title>
    GANTI PASSWORD
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">GANTI PASSWORD</h1>
            <form action="c_adminedit.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="nip" name="nip" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id data pembayaran iom" name="id_data_pembayaran_iom" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="username" name="username" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="password" class="form-control" placeholder="password" name="password" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="nama" name="nama" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="alamat" name="alamat" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="no hp" name="no_hp" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="jabatan" name="jabatan" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="number" class="form-control" placeholder="level" name="level" Required="">
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-warning" name="button" id="button" value="Proses"><b>SAVE</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>