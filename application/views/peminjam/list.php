<?php 

echo $this->session->flashdata('hasil'); ?>

<table>
<tr><th>ID Peminjam</th><th>NAMA</th><th>ALAMAT</th><th>TELPON</th></tr>
<?php
foreach ($peminjam as $p){
echo "<tr>
<td>$p->id_peminjam</td>
<td>$p->nama</td>
<td>$p->alamat</td>
<td>$p->telpn</td>
<td>".anchor('peminjam/edit/'.$p->id_peminjam,'Edit')."
".anchor('peminjam/delete/'.$p->id_peminjam,'Delete')."
".anchor('peminjam/create/'.$p->id_peminjam,'Create')."

</td>
</tr>";
}
?>
</table>