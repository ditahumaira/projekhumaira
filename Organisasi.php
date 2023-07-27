<?php
class organisasi {
   public $ketua;
   public $sekretaris;
   public $bendahara; 
   public $wakil;
   function moto(){
    echo "hirup_sauyunan"; 
   } 
}
   $ditaa = new organisasi ();
   $ditaa->ketua="daffa";
   $ditaa->sekretaris="dita h";
   $ditaa->bendahara="dita r";
   $ditaa->wakil="rayfal";

   echo "ketua :$ditaa->ketua <br> sekretaris : $ditaa->sekretaris <br> bendahara : $ditaa->bendahara <br> wakil 
   : $ditaa->wakil<br>";
echo $ditaa-> moto();
?>

