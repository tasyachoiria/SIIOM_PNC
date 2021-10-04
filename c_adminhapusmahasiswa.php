<?php 

include 'koneksi.php';

function hapus($nim){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE nim = $nim");

    return mysqli_affected_rows($koneksi);
}

$nim = $_GET["nim"];

if (hapus($nim) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'data_mahasiswa.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'data_mahasiswa.php';
            </script>
        ";
}

?>