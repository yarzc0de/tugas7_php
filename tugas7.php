<!-- Tugas 7 PHP -->
<!-- Ahyar Dwi Setiawan -->
<h1>Tabel Bilangan</h1>
<table border="1">
  <tr>
         <td>Bilangan</td>
         <td>Jenis</td>
  </tr>
  <?php 
  for($i=1; $i<=10; $i++) {
  ?>
  <tr>
        <td><?php echo $i; ?></td>
        <td>Bilangan <?php echo ($i%2) ? 'Ganjil' : 'Genap'; ?></td>
  </tr>
  <?php } ?>
</table>