<?php

// Kelas Hewan sebagai kelas induk
class Hewan
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function bersuara()
    {
        return "Aku adalah hewan";
    }
}

// Kelas Kucing sebagai turunan dari kelas Hewan
class Kucing extends Hewan
{
    public function bersuara()
    {
        return "Meow";
    }
}

// Kelas Anjing sebagai turunan dari kelas Hewan
class Anjing extends Hewan
{
    public function bersuara()
    {
        return "Woof";
    }
}

// Membuat objek Kucing dan Anjing
$kucing = new Kucing("Kucing");
$anjing = new Anjing("Anjing");

// Output suara masing-masing hewan
echo "Kucing bersuara: " . $kucing->bersuara() . "\n";
echo "Anjing bersuara: " . $anjing->bersuara() . "\n";

?>


<!-- 
4. Diberikan kelas Hewan berikut :
class Hewan
{
public $nama;
public function __construct($nama)
{
$this->nama = $nama;
}
public function bersuara()
{
return "Aku adalah hewan";
}
}
Buatlah kelas Kucing dan Anjing yang merupakan turunan dari kelas Hewan. Kedua kelas tersebut
memiliki metode bersuara() yang mengembalikan suara masing-masing hewan. Lalu lakukan print
code dengan output sebagai berikut :
- Kucing bersuara “Meow”
- Anjing bersuara “Woof” 
-->