<?php
//Rian Andri Waskito
//119140030
//RA
    function penjumlahan($bil_1, $bil_2){
        $total = $bil_1 + $bil_2;
        return $total;
    }
    function pengurangan($bil_1,$bil_2){
        $kurang = $bil_1 - $bil_2;
        return $kurang;
    }
    function perkalian($bil_1,$bil_2){
        $kali = $bil_1 * $bil_2;
        return $kali;
    }
    function pembagian($bil_1,$bil_2){
        $bagi = $bil_1 / $bil_2;
        return $bagi;
    }
    function modulus($bil_1,$bil_2){
        $mod = $bil_1 % $bil_2;
        return $mod;
    }
    $a = $_POST["bilangan_1"];
    $b = $_POST["bilangan_2"];
    echo "bilangan 1 = $a";
    echo "<br>";
    echo "bilangan 2 = $b";
    echo "<br>";
    echo "<br>";
    echo "Berikut merupakan hasil dari setiap operasi";
    echo "<br>";
    echo "<br>";
    echo "PENJUMLAHAN";
    echo "<br>";
    echo "Operator : +";
    echo "<br>"; 
    $total = penjumlahan($a,$b);
    echo "Hasil : $total";
    echo "<br>"; 
    echo "<br>"; 
    echo "PENGURANGAN";
    echo "<br>"; 
    echo "Operator : -";
    echo "<br>"; 
    $total = pengurangan($a,$b);
    echo "Hasil : $total";
    echo "<br>"; 
    echo "<br>";
    echo "PERKALIAN"; 
    echo "<br>"; 
    echo "Operator : *";
    echo "<br>"; 
    $total = perkalian($a,$b);
    echo "Hasil : $total";
    echo "<br>"; 
    echo "<br>";
    echo "PEMBAGIAN";
    echo "<br>";  
    echo "Operator : /";
    echo "<br>"; 
    $total = pembagian($a,$b);
    echo "Hasil : $total";
    echo "<br>"; 
    echo "<br>";
    echo "MODULUS";
    echo "<br>";  
    echo "Operator : %";
    echo "<br>"; 
    $total = modulus($a,$b);
    echo "Hasil : $total";
?>