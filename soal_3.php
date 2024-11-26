<?php
$string = "Coding merupakan kegiatan yang dimana kamu memberitahukan komputer apa yang harus dia kerjakan untuk kamu. Sebuah kode yang ada pada skrip bisa diibaratkan layaknya bahasa sehari-hari. Setiap kode yang kamu tulis akan membantu komputer untuk mengetahui dan memahami apa yang ingin kamu lakukan pada komputer";

// Menghitung jumlah huruf dalam string
$jumlahHuruf = strlen(str_replace(' ', '', $string));  // Menghilangkan spasi
echo "Jumlah huruf: " . $jumlahHuruf . "\n";

// Menghitung jumlah kata dalam string
$kata = str_word_count($string); 
echo "Jumlah kata: " . $kata . "\n";

// Menghitung jumlah huruf vokal
$vokal = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$jumlahVokal = 0;
foreach (str_split($string) as $char) {
    if (in_array($char, $vokal)) {
        $jumlahVokal++;
    }
}
echo "Jumlah huruf vokal: " . $jumlahVokal . "\n";

// Menghitung jumlah huruf konsonan
$konsonan = 0;
foreach (str_split($string) as $char) {
    if (ctype_alpha($char) && !in_array($char, $vokal)) {
        $konsonan++;
    }
}
echo "Jumlah huruf konsonan: " . $konsonan . "\n";

// Mencari kata terbanyak
$words = str_word_count(strtolower($string), 1);
$wordFrequency = array_count_values($words);
arsort($wordFrequency); // Urutkan berdasarkan frekuensi tertinggi
$kataTerbanyak = key($wordFrequency); // Kata dengan frekuensi tertinggi
echo "Kata terbanyak: " . $kataTerbanyak . "\n";

?>

<!-- 
3. Diberikan sebuah string berikut:
$string = "Coding merupakan kegiatan yang dimana kamu memberitahukan komputer apa yang
harus dia kerjakan untuk kamu. Sebuah kode yang ada pada skrip bisa diibaratkan layaknya
bahasa sehari-hari. Setiap kode yang kamu tulis akan membantu komputer untuk mengetahui
dan memahami apa yang ingin kamu lakukan pada komputer"
Buatlah kode untuk:

• Menghitung jumlah huruf dalam string tersebut.
• Menghitung jumlah kata dalam string tersebut.
• Menghitung jumlah huruf vokal dalam string tersebut.
• Menghitung jumlah huruf konsonan dalam string tersebut.
• Mencari kata terbanyak dalam string tersebut.
 -->