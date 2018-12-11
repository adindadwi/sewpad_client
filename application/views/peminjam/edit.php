<?php echo form_open('peminjam/edit');?>
<?php echo form_hidden('id_peminjam',$peminjam[0]->id_peminjam);?>

<table>
<tr><td>ID Peminjam</td><td><?php echo form_input('id_peminjam',$peminjam[0]->id_peminjam,"disabled");?></td></tr>
<tr><td>Nama</td><td><?php echo form_input('nama',$peminjam[0]->nama);?></td></tr>
<tr><td>Alamat</td><td><td><?php echo form_input('alamat',$peminjam[0]->alamat);?></td></tr>
<td>Telpon</td>
<td><?php echo form_input('telpn',$peminjam[0]->telpn);?></td>
</tr>
<tr>
<td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('peminjam','Kembali');?>
</td>
</tr>
</table>

<?php
echo form_close();
?>