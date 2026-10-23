<?php

require_once "config/data.php";
require_once "config/functions.php";

include "templates/header.php";
include "templates/navbar.php";
?>

<div style="padding: 0 10px;">
    <h2>Tabel Daftar Nilai dan Status Kelulusan Siswa</h2>
    
    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Daftar Nilai</th>
            <th>Rata-Rata</th>
            <th>Status Kelulusan</th>
        </tr>

        <?php 
        $no = 1;
        
        foreach ($dataSiswa as $siswa) { 
            
            $rataRata = hitungRataRata($siswa['nilai']);
            $status = cekKelulusan($rataRata);
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td style="text-align: left;"><?php echo $siswa['nama']; ?></td>
            
            <td><?php echo implode(", ", $siswa['nilai']); ?></td>
            <td><?php echo number_format($rataRata, 2); ?></td>
            <td><strong><?php echo $status; ?></strong></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php 

include "templates/footer.php"; 
?>  