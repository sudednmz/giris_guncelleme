<?php

$a=$_POST["ad"];
$adii=221210581;
$adiii="@sakarya.edu.tr";

$adi="b";


 if($a==$adi.$adii.$adiii) 
{ 
   
}
 
 else
{
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: ".$url);
    
} 

$b=$_POST["sifre"];
$sifre="b";
$sifree=221210581; 
 if($b==$sifre.$sifree) 
 {

  echo "hosgeldiniz   ".$sifre.$sifree." Ana Sayfaya gitmek icin asagidaki yaziya tiklayin".".<br>";
  echo "<a href='anasayfa.php'>ana sayfa</a>";
 
  } 
  else
 {
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: ".$url);
 }







?>




