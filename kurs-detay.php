<?php require_once('config.php') ?>

<?php include('partials/_header.php') ?>
<?php include('partials/_navbar.php')?>
<?php 

if (!isset($_GET["id"])) {
   header("Location:index.php");//id url içinde mi kontrolü
   //isset ise get içerisinde id bilgisi var (Burada ! işaretiyle olmadığı durum kontrol ediliyor)
}


$id=$_GET["id"];//id bilgisini taşımak için kullanılan obje

$result_kategoriler = mysqli_query($baglanti, "SELECT * from kategoriler");
$kategoriler=mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC );//assoc tipinde hepsini getir

$result_kurs = mysqli_query($baglanti, "SELECT * from kurslar where id=".$id  );
$kurs=mysqli_fetch_assoc($result_kurs);//assoc tipinde hepsini getir


mysqli_close(($baglanti));

?>

<div class="cointainer my-3">
    <div class="row">
        <div class="col-3">
            <?php include('partials/_kategoriler.php') ?>
            <div class="col-9">
            <?php include('partials/_kurs.php') ?>
            </div>

        </div>
    </div>
</div>
<?php include('partials/_footer.php') ?>