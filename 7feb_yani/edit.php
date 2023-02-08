<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil-data.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor = tb_motor.id_motor  WHERE tb_peminjam.id_peminjam='$id'";
   $query = mysqli_query($koneksi,$sql);
   $pinjam = mysqli_fetch_assoc($query); 
?>
<htm>
    <head>
</head>
<body>
        <h1>Form Edit</h1>
        <form action="proses-edit.php" method="POST">
        <a href="tampil-data.php"><input type="button" value="Kembali"></a>
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $pinjam['id_peminjam']?>;" />
            <p>
                <label for="nama_peminjam">Nama Peminjam: </label>
                <input type="text" name="nama_peminjam" value="<?php echo $pinjam['nama_peminjam']?>;" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" value="<?php echo $pinjam['alamat']?>;" />
            </p>
            <p>
                <label for="umur">Umur: </label>
                <input type="number" name="umur" value="<?php echo $pinjam['umur']?>;" />
            </p>
            <p>
                <label for="keperluan">Keperluan: </label>
                <input type="text" name="keperluan" value="<?php echo $pinjam['keperluan']?>;" />
            </p>
            <p>
                <label for="jaminan">Jaminan: </label>
                <input type="text" name="jaminan" value="<?php echo $pinjam['jaminan']?>;" />
            </p>
            <p>
                <label for="nomor_rangka">Nomor Rangka: </label>
                <input type="number" name="nomor_rangka" value="<?php echo $pinjam['nomor_rangka']?>;" />
            </p>
            <p>
                <label for="merek">Merek: </label>
                <input type="text" name="merek" value="<?php echo $pinjam['merek']?>;" />
            </p>
            <p>
                <label for="jenis_motor">Jenis Motor: </label>
                <input type="text" name="jenis_motor" value="<?php echo $pinjam['jenis_motor']?>;" />
            </p>
            <p>
                <label for="tahun_motor">Tahun Motor: </label>
                <input type="number" name="tahun_motor" value="<?php echo $pinjam['tahun_motor']?>;" />
            </p>
            <p>
                <label for="tanggal_pinjam">Tanggal Pinjam: </label>
                <input type="date" name="tanggal_pinjam" value="<?php echo $pinjam['tanggal_pinjam']?>;" />
            </p>
            <p>
                <label for="tanggal_kembali">Tangal Kembali: </label>
                <input type="date" name="tanggal_kembali" value="<?php echo $pinjam['tanggal_kembali']?>;" />
            </p>
            <p>
                    <input type="submit" value="edit" name ="edit" />
                </P>
</fieldset>
</form>
</body>
</html> 