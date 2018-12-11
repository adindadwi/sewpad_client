<?php 

echo $this->session->flashdata('hasil'); ?>

<table>
<tr><th>ID Buku</th><th>Judul</th><th>Pengarang</th><th>ALAMAT</th><th>TELPON</th></tr>
<?php
foreach ($buku as $b){
echo "<tr>
<td>$b->id_buku</td>
<td>$b->judul</td>
<td>$b->pengarang</td>
<td>$b->tahun_terbit</td>
<td>".anchor('buku/edit/'.$b->id_buku,'Edit')."
".anchor('buku/delete/'.$b->id_buku,'Delete')."
".anchor('buku/create/'.$b->id_buku,'Create')."

</td>
</tr>";
}
?>
</table>