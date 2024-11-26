<?php
// Perulangan dari 1 sampai 10
for ($i = 1; $i <= 10; $i++) {
    if ($i <= 5) {
        // Untuk angka 1 sampai 5, tambahkan nol di depan sesuai dengan urutannya
        echo "0".str_repeat("0", $i - 1) .$i ;
    } else if ($i <= 9){
        // Untuk angka 6 sampai 10, tampilkan angka dengan nol yang lebih banyak
        echo $i . str_repeat("0", $i );
    }else{
        echo $i . str_repeat("0", $i -1);
    }
    echo "\n"; // Menambahkan baris baru setelah setiap angka
}
?>

<!-- 
2. Buatkah sebuah perulangan dari angka 1 sampai 10 dengan contoh hasil keluaran sebagai
berikut :
- 01
- 002
- 0003
- 00004
- 000005
- 6000000
- 70000000
- 800000000
- 9000000000
- 10000000000 
-->