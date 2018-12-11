<?php 

echo form_open('peminjam/create');?>

<table>
<tr>
<td></td>
<td><?php echo form_input('id_peminjam');?></td>
</tr>
<tr>
<td>Nama</td><td><?php echo form_input('nama');?></td>
</tr>
<tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
<tr><td>Telpon</td><td><?php echo form_input('telpn');?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('peminjam','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>