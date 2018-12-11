<?php echo form_open('peminjaman/edit');?> 
<?php echo form_hidden('id_peminjaman',$peminjaman[0]->id_peminjaman);?> 
 
<table>     
    <tr>
        <td>ID Peminjaman</td><td>
        <?php echo form_input('',$peminjaman[0]->id_peminjaman,"disabled");?>
    </td></tr>

    <tr><td>ID Peminjam</td><td>             
        <select name="id_peminjam">     
        <option>-- Pilih ID Peminjam --</option>   
             <?php       
                $connection = mysqli_connect("localhost", "root", "") or die (mysqli_error());    
                mysqli_select_db($connection,"kuis_perpustakaan") or die(mysqli_error());    
                $sql = mysqli_query($connection,'SELECT * FROM peminjam ORDER BY id_peminjam ASC;');    
              ?>    
                <?php if (mysqli_num_rows($sql) != 0) { ?>     
                    <?php while ($row = mysqli_fetch_array($sql)) { ?>      
                        <option><?php echo $row['id_peminjam'] ?></option>     
                    <?php } ?>    
                <?php } ?>             
         </select>         
    </td></tr>

    <tr><td>Tanggal Pinjam</td><td>
    <?php echo form_input('tanggal_pinjam',$peminjaman[0]->tanggal_pinjam);?>
    </td></tr>

    <tr><td>Tanggal Kembali</td><td>
    <?php echo form_input('tanggal_kembali',$peminjaman[0]->tanggal_kembali);?>
    </td></tr>
    
    <tr><td>ID Buku</td><td>             
        <select name="id_buku">     
        <option>-- Pilih ID Buku --</option>   
             <?php       
                $connection = mysqli_connect("localhost", "root", "") or die (mysqli_error());    
                mysqli_select_db($connection,"kuis_perpustakaan") or die(mysqli_error());    
                $sql = mysqli_query($connection,'SELECT * FROM buku ORDER BY id_buku ASC;');    
              ?>    
                <?php if (mysqli_num_rows($sql) != 0) { ?>     
                    <?php while ($row = mysqli_fetch_array($sql)) { ?>      
                        <option><?php echo $row['id_buku'] ?></option>     
                    <?php } ?>    
                <?php } ?>             
         </select>         
    </td></tr>

    <tr>
        <td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Peminjaman','Kembali');?>
        </td>
    </tr>
</table>
<?php
echo form_close();
?>