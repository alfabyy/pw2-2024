<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
       $this->nama = $nama;
       $this->warna = $warna;
       $this->tempatOperasi = $tempatOperasi;

    }

}

$kendaraan = new Kendaraan("Mobil", "Merah", "Darat");

echo "Nama : " . $kendaraan->nama;
echo "<br>";
echo "Warna : " . $kendaraan->warna;
echo "<br>";
echo "Tempat Operasi : " . $kendaraan->tempatOperasi;