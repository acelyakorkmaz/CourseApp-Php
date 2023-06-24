<?php 
$host ="localhost";
$username ="root";
$password ="";
$database ="courseDb";
//mysqli(object oriented, procedural)
$baglanti=mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_error()>0){
    die("hata: ".mysqli_connect_error());//eğer bağlantı hatası varsa kodları çalıştırma
}



