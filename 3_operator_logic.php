<?php
 
// Membuat Function Pembagian 2 angka tanpa operator
 
function pembagian($angka1, $angka2) 
{
    if ($angka1 == 0)
        return 0;
         
    if ($angka2 == 0)
        return INT_MAX;
     
    $hasilNegatif = false;
     
    
    if ($angka1 < 0)
    {
        $angka1 = -$angka1 ;
         
        if ($angka2 < 0)
            $angka2 = - $angka2 ;
        else
            $hasilNegatif = true;
    }
    else if ($angka2 < 0)
    {
        $angka2 = - $angka2 ;
        $hasilNegatif = true;
    }
     
    // Jika angka1 lebih besar dari sama dengan angka2
    // Kurangi angka2 dari angka1 dan tambah hasil bagi satu.
    $pembagian_bulat = 0;
    while ($angka1 >= $angka2)
    {
        $angka1 = $angka1 - $angka2 ;
        $pembagian_bulat++ ;
    }
     
    if ($hasilNegatif)
            $pembagian_bulat = - $pembagian_bulat ;
    return $pembagian_bulat ;
}

$hasil=pembagian(10,3);
echo "Hasil Pembagian 10 : 3 = ".$hasil;

?>