<?php 

echo form_open('buku/create');?>

<table>
<tr>
<td></td>
<td><?php echo form_input('id_buku');?></td>
</tr>
<tr>
<td>Tahun terbit</td><td><?php echo form_input('tahun');?></td>
</tr>
<tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('buku','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>