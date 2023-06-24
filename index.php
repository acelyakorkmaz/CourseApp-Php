<?php require_once('config.php')?>
<!-- bağımlı olunan sayfalar için include yerim require kullanılır -->

<?php include('partials/_header.php')?>
<?php include('partials/_navbar.php')?>
<?php include('partials/_results.php')?>

<div class="cointainer my-3">
<div class="row">
<div class="col-3">
<?php include('partials/_kategoriler.php') ?>
<div class="col-9">
<?php foreach($kurslar as $kurs):?>
    <?php if ($kurs["onayliMi"]&&$kurs["anasayfa"]):?>
        <?php include('partials/_kurs.php')?>
        <?php endif;?>
    
   <?php endforeach; ?>
    
    </div>
   
</div>
</div>
</div>
<?php include('partials/_footer.php')?>