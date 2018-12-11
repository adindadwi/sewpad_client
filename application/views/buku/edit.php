<?php echo form_open('buku/edit');?>
<?php echo form_hidden('id_buku',$buku[0]->id_buku);?>

<table>
<tr><td>id_buku</td><td><?php echo form_input('',$buku[0]->id_buku,"disabled");?></td></tr>
<tr><td>NAMA</td><td><?php echo form_input('nama',$buku[0]->nama);?></td></tr>
<tr><td>JURUSAN</td><td>
<tr>
<td>ALAMAT</td>
<td><?php echo form_input('alamat',$buku[0]->alamat);?></td>
</tr>
<tr>
<td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('buku','Kembali');?>
</td>
</tr>
</table>

<?php
echo form_close();
?>