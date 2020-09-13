<?php
class mobil {
    private  $merk, $tipe, $mesin, $max_speed;

    public function cetakTipe(){
        return $this->tipe;
    }
    public function KecepatanMaksimal() {
        return "Kecepatan Maksimal Dari Mobil Ini Adalah".$this->max_speed;
    }
}

class BMW extends Mobil {

}

 class Tesla extends Mobil {
     function selfParking(){
        echo"Parkir Sendiri";
     }
 }

$bmw = new BMW;
$bmw ->merk = "BMW"; 
$bmw ->tipe = "320i";
$bmw ->mesin = "2000cc";
$bmw ->max_speed = "280km/h";

$tesla = new tesla;
$tesla->merk = "Tesla"; 
$tesla ->tipe = "Model x ";
$tesla ->mesin = "Listrik";
$tesla ->max_speed = "280km/h";

echo $tesla->KecepatanMaksimal();
