<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK()
    {
        if($this->ipk > 3.5) {
            echo "Cumlaude";
        }

        else{
            echo "You did a great job";
        }
    }

}

$mahasiswa = new Mahasiswa("Alif", "0110223097", "Bogor", "Teknik Informatika", "4.0");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Mahasiswa</legend>
        <?php echo "Nama Mahasiswa : " . $mahasiswa->namaMahasiswa; ?>
        <br>
        <?php echo "NIM : " . $mahasiswa->nim; ?>
        <br>
        <?php echo "Domisili : " . $mahasiswa->domisili; ?>
        <br>
        <?php echo "Prodi : " . $mahasiswa->prodi; ?>
        <br>
        <?php echo "IPK : " . $mahasiswa->ipk . " "; ?>
        <br>
        <?php $mahasiswa->setPredikatIPK(); ?>
    </fieldset>
</body>
</html>