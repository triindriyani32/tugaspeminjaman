<?php
include("koneksi.php");?>
<html>
<head>
</head>
<body>
    <h1>Tampil Data</h1>
    <h4><a href="tambah.php">Tambah Data </a><h4>
        <table border="1">
            <tr>
                <td>Nomor</td>
                <td>Nama Peminjam</td>
                <td>Alamat</td>
                <td>Umur</td>
                <td>Keperluan</td>
                <td>Jaminan</td>
                <td>Nomor Rangka</td>
                <td>Merek</td>
                <td>Jenis Motor</td>
                <td>Tahun Motor</td>
                <td>Tanggal Pinjam</td>
                <td>Tanggal Kembali</td>
                <td>aksi</td>
            </tr>
<?php
include("koneksi.php");
$sql="SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor=tb_motor.id_motor";
$query=mysqli_query($koneksi,$sql);
   
     while($pinjam=mysqli_fetch_array($query)){
          echo "<tr>";
          echo "<td>".$pinjam['id_peminjam']."</td>";
          echo "<td>".$pinjam['nama_peminjam']."</td>";
          echo "<td>".$pinjam['alamat']."</td>"; 
          echo "<td>".$pinjam['umur']."</td>"; 
          echo "<td>".$pinjam['keperluan']."</td>"; 
          echo "<td>".$pinjam['jaminan']."</td>"; 
          echo "<td>".$pinjam['nomor_rangka']."</td>"; 
          echo "<td>".$pinjam['merek']."</td>";
          echo "<td>".$pinjam['jenis_motor']."</td>"; 
          echo "<td>".$pinjam['tahun_motor']."</td>";  
          echo "<td>".$pinjam['tanggal_pinjam']."</td>"; 
          echo "<td>".$pinjam['tanggal_kembali']."</td>"; 
          echo "<td>";
          echo "<a href='edit.php?id=".$pinjam['id_peminjam']."'>Edit</a> |";
          echo "<a href='hapus.php?id=".$pinjam['id_peminjam']."'>Hapus</a> |";
          echo "</td>";
          echo "</tr>";
     }
     ?>
     </table>
    </body>
    </html>
      