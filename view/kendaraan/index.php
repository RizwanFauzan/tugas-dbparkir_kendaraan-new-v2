<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kendaraan</title>
</head>
<body>
    
<h1>Data parkir kendaraan</h1>
<a href="tambah.php">tambah data parkir</a>
<table border="2">
    <tr>
        <th>plat nomer</th>
        <th>jenis kendaraan</th>
        <th>id parkir</th>
        <th>aksi</th>
    </tr>
    <?php
    include '../../config/koneksi.php';
    $query=mysqli_query($conn,"SELECT * FROM kendaraan");

     if(mysqli_num_rows($query) > 0){
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $result['plat_nomer'] ?></td>
            <td><?php echo $result['jenis_kendaraan'] ?></td>
            <td><?php echo $result['id_parkir'] ?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>
           
        </tr>
        <?php
     }
     }else{
        echo "data kosong";
     }
     ?>
</table>
</body>
</html>