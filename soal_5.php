<?php
$data = array(
    array(9, 5, 2),
    array(1, 3, 8),
    array(10, 15, 12),
    array(4, 7, 6),
    array(13, 11, 14),
);

// 1. Mengurutkan array berdasarkan nilai setiap elemennya
foreach ($data as &$subArray) {
    sort($subArray); // Mengurutkan setiap sub-array
}
unset($subArray); // Melepas referensi untuk mencegah masalah

// Menampilkan array yang sudah diurutkan
echo "Array setelah diurutkan berdasarkan nilai setiap elemennya:\n";
print_r($data);

// 2. Menghitung jumlah elemen ganjil
$oddCount = 0;
foreach ($data as $subArray) {
    foreach ($subArray as $value) {
        if ($value % 2 != 0) {
            $oddCount++;
        }
    }
}