<?php

class HewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;

    function makan()
    {
        return "Mamalia Makan";
    }

    function minum()
    {     
        return "Mamalia Minum"; 
    }

    function menyusui()
    {
        return "Mamalia Menyusui";
    }

}

$mamalia = new HewanMamalia();

echo $mamalia->namaHewan = "Lumba-lumba";
echo "<br>";

echo $mamalia->warna = "Abu-abu";
echo "<br>";

echo $mamalia->habitat = "Laut";
echo "<br>";


?>