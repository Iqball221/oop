<html>
 <head><title>Pengolahan Form</title></head>
 <body>

 <form action="" method="post">

     <fieldset>
         <legend>Sorum Mobil</legend>
         <table>
             <tr>
                 <td>Nama Mobil</td>
                 <td>:</td>
                 <td><input type="text" name="nama"></td>
             </tr>
             <tr>
                 <td>jenis mobil</td>
                 <td>:</td>
                 <td><input type="text" name="jenis"></td>
             </tr>
             <tr>
                 <td>Plat mobil</td>
                 <td>:</td>
                 <td><input type="text" name="plat"></td>
             </tr>
             <tr>
                 <td>Berapa cc</td>
                 <td>:</td>
                 <td><input type="text" name="cc"></td>
             </tr>
             <tr>
                 <td>merk</td>
                 <td>:</td>
                 <td><input type="text" name="merk"></td>
             </tr>

         </table>
     </fieldset>
 <input type="submit" name="Input" value="Input">
 <input type="reset" name="Reset" value="Reset">
 </FORM>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $plat = $_POST['plat'];
    $cc = $_POST['cc'];
    $merk = $_POST['merk'];

    class Mobil
    {
        public function __construct($nama, $jenis, $plat, $cc, $merk)
        {
            $this->nama = $nama;
            $this->jenis = $jenis;
            $this->plat = $plat;
            $this->cc = $cc;
            $this->merk = $merk;

        }

    }
// turunkan class Malaikat ke chromebook
    class ngabret extends Mobil
    {
        public function status()
        {
            if (1 >= $this->merk) {
                $a = "Grade D (Lambat)";

            } elseif (2 >= $this->nilai) {
                $a = "Grade C (Over Head)";

            } elseif (3 >= $this->nilai) {
                $a = "Grade B (Belum Ngabret)";

            } else {
                $a = "Grade A (Ngabret pisan)";

            }

            // $b = $this->nilaimobil();
            // $c = $this->nilaicc();
            // $d = $this->nilaimodif();
            return $a;
        }
    }

// buat objek dari class Mobil (instansiasi)
    $merk = new ngabret($nama, $jenis, $plat, $cc, $merk);

//panggil method objek
    echo "Nama Mobil : $merk->nama<br>";
    echo "Jenis :  $merk->jenis<br>";
    echo "Plat :  $merk->plat<br>";
    echo "Berapa  Cc :  $merk->cc<br>";
    echo "Merk :  $merk->merk<br>";
    echo "Status :" . $merk->status() . "<br>";

}