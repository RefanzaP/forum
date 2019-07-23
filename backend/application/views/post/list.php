<table cellpadding="10" border="" width="">

<thead>
  <tbody >
  <tr>
    <td>No</td>
    <td>Topik</td>
    <td>user</td>
    <td>gambar</td>
    <td>created_by</td>
    <td>modified_by</td>
  </tbody>
  </tr>
</thead>
<?php
		$no = 1;

		foreach($result_post as $k => $row){
		?>
 <tr>
   <td><?php echo $no++ ?></td>
   <td><?php echo $row->id_topik; ?></td>
   <td><?php echo $row->id_user; ?></td>
   <td><?php echo $row->foto_post; ?></td>
   <td><?php echo $row->created_by; ?></td>
    <td><?php echo $row->modified_by; ?></td>
 </tr>
 <?php } ?>
</table>
