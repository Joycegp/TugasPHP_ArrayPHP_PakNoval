<?php

    function hitungRataRata($arrNilai) {
        $jumlahNilai = array_sum($arrNilai);
        $jmlElemen = count($arrNilai); 
        $rataRata = $jumlahNilai / $jmlElemen;
        
        return $rataRata; 
    }

    function cekKelulusan($rata) {
        if ($rata >= 80) {
            return "Lulus Sangat Baik";
        } elseif ($rata >= 75 && $rata <= 79) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
?>