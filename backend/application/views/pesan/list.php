<table cellpadding="10" border="" width="">

<thead>
  <tbody >
  <tr>
    <td>No</td>
    <td>by</td>
    <td>to</td>
    <td>text</td>
    <td>date</td>
    <td>creaeted_by</td>
    <td>edited_by</td>
    <td>created date</td>
  </tbody>
  </tr>
</thead>
<?php
		$no = 1;

		foreach($result_pesan as $k => $row){
		?>
 <tr>
   <td><?php echo $no++ ?></td>
   <td><?php echo $row->pesan_by; ?></td>
   <td><?php echo $row->pesan_to; ?></td>
   <td><?php echo $row->deskripsi; ?></td>
   <td><?php echo $row->date; ?></td>
    <td><?php echo $row->created_by; ?></td>
    <td><?php echo $row->modified_by; ?></td>
    <td><?php echo $row->created_date; ?></td>
 </tr>
 <?php } ?>
</table>
