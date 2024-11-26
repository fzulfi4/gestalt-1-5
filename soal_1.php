<?php
// Membuat array dengan nama mobil
$cars = array("Volvo", "BMW", "Toyota", "Kijang");

// Define the orders you want to display (as indexes of the original array)
$orders = [
    [0, 1, 2, 3], // a. "Volvo","BMW","Toyota","Kijang"
    [1, 0, 2, 3], // b. "BMW","Volvo","Toyota","Kijang"
    [2, 0, 1, 3], // c. "Toyota","Volvo","BMW","Kijang"
    [3, 2, 0, 1]  // d. "Kijang","Toyota","Volvo","BMW"
];

// Loop through the orders array and display the corresponding output
foreach ($orders as $key => $order) {
    // Initialize an array to hold the reordered car names
    $reorderedCars = [];
    
    // Loop through the indexes of the current order
    foreach ($order as $index) {
        $reorderedCars[] = $cars[$index];
    }
    
    // Format and print the result
    echo chr(97 + $key) . '. "' . implode('","', $reorderedCars) . "\"\n";
}
?>

<!--
1. Buatlah sebuah array menggunakan script dengan contoh array "Volvo", "BMW",
"Toyota","Kijang". Lalu buatlah sebuah perulangan dengan keluaran sebagai berikut :
a."Volvo","BMW","Toyota","Kijang"
b. "BMW","Volvo","Toyota","Kijang"
c. "Toyota","Volvo","BMW","Kijang"
d. "Kijang","Toyota","Volvo","BMW" 
-->