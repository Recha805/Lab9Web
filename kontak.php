<?php require('header.php'); ?>

<h3>Tabel Petugas</h3>
      <table>
         <thead>
            <tr>
               <th>ID Petugas</th>
               <th>Nama Petugas</th>
               <th>Alamat</th>
               <th>No Tlp</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM petugas';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

<?php require('footer.php'); ?>