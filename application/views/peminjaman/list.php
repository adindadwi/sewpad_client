<?php echo $this->session->flashdata('hasil'); ?>
<table border="1">
    <tr><th>ID Peminjaman</th>
    <th>ID Peminjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>ID Buku</th>
    <th>Aksi</th>
    </th></tr>
    <?php

    foreach ((array)$peminjaman as $p){
        echo "<tr>
              <td>$p->id_peminjaman</td>
              <td>$p->id_peminjam</td>
              <td>$p->tanggal_pinjam</td>
              <td>$p->tanggal_kembali</td>
              <td>$p->id_buku</td>
              <td>".anchor('peminjaman/create/'.$p->id_peminjaman,'Create')."
                  ".anchor('peminjaman/edit/'.$p->id_peminjaman,'Edit')."
                  ".anchor('peminjaman/delete/'.$p->id_peminjaman,'Delete')."</td>
              </tr>";
    }
    ?>
</table>