<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data parkir</title>
</head>
<body>
    
<h1>Data parkiran</h1>
<a href="tambah.php">tambah data parkir</a>
<table border="2">
    
    <tr>
        <th>id parkir</th>
        <th>alamat</th>
        <th>harga</th>
        <th>aksi</th>
    </tr>
    <?php
    include '../../config/koneksi.php';
    $query=mysqli_query($conn,"SELECT * FROM parkir");

     if(mysqli_num_rows($query) > 0){
        while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $result['id_parkir'] ?></td>
            <td><?php echo $result['alamat'] ?></td>
            <td><?php echo $result['harga'] ?></td>
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