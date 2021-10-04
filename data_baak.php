<?php
include 't_sideadmin.php';
$user = mysqli_query($koneksi, "SELECT * FROM tb_baak");

?>


<title>
    DATA BAAK
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data BAAK</h1>
        <a class="btn btn-warning" href="tambah_baak.php?">Tambah BAAK</a>
        <table class="table table-hover">
            <thead class="table-dark">


                <label>Cari : </label>
                <input type="text" id="cari" name="cari">
                <input type="submit" id="submit" value="Cari">
                <b id="hasil"><b>


                        <th scope="col">NIP</th>
                        <th scope="col">ID DATA PEMBAYARAN IOM</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NO HP</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">LEVEL</th>
                        </>
            </thead>
            <tbody id="body">
                <?php foreach ($user as $row) :  ?>
                    <tr>
                        <td><?= $row["nip"] ?></td>
                        <td><?= $row["id_data_pembayaran_iom"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><?= $row["password"] ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td><?= $row["no_hp"] ?></td>
                        <td><?= $row["jabatan"] ?></td>
                        <td><?= $row["level"] ?></td>
                        
                    </tr>
                    </td>
                    </tr>

                    </tr>



                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            let cari = $('#cari').val();
            $.ajax({
                type: "post",
                url: "ajax/cariPengunjung.php",
                data: {
                    data: cari
                },
                dataType: "html",
                success: function(response) {
                    $('#hasil').html('Hasil pencarian : ' + cari);
                    $('#body').html(response);

                }
            });
        });
    });
</script>
<?php
include 't_foot.html';
?>