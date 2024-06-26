<?php
   include "koneksi.php";
   $foto = $_FILES['foto']['name'];
   $file_tmp = $_FILES['foto']['tmp_name'];
   $nama = $_POST['name'];
   $title = $_POST['title'];
   move_uploaded_file($file_tmp,'img/'.$foto);
   $query = "INSERT INTO db_video SET
                                       judul_video = '$nama',
                                       gambar_video = '$foto',
                                       title_video = '$title'
   ";  
   mysqli_query($koneksi, $query)
   or die ("SQL Error".mysqli_error());
?>