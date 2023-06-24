<?php 
// $query="SELECT * from kategoriler";
// $result = mysqli_query($baglanti, $query);

$result_kategoriler = mysqli_query($baglanti, "SELECT * from kategoriler");
$kategoriler=mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC );//assoc tipinde hepsini getir

$result_kurslar = mysqli_query($baglanti, "SELECT * from kurslar");
$kurslar=mysqli_fetch_all($result_kurslar,MYSQLI_ASSOC );//assoc tipinde hepsini getir


mysqli_close(($baglanti));

?>