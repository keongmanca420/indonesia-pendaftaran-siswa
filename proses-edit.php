<?php 

include("config.php"); 

// cek apakah tombol simpan sudah diklik
if(isset($_POST['simpan'])){
    // ambil nama dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query update
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin'$jk',
    agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if($query) {
        header('Location: list-siswa.php');
    } else {
        header("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}


?>

    </body>
</html>