<?php 
$kategoriler=["programlama","Web Geliştirme","Mobil Uygulamalar"];
$kurslar=[

    [
        "id" => 1,
        "baslik"=>"Web Geliştime Kursu",
        "aciklama"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia illo animi nostrum, ducimus laudantium doloribus sequi tempora beatae accusamus quidem in porro debitis?",
        "resim"=>"1.jpg"
        
    ]
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />

</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <a class="navbar-brand" href="#">CourseApp</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kurslar</a>
      </li>
     
  </div>
</nav>
<div class="cointainer my-3">
<div class="row">
<div class="col-3">
<div class="list-group">
<?php 
foreach ($kategoriler as $kategori):?> 
    <a href="#" class="list-group-item list-group-item-action">
        <?php 
        
        echo $kategori;
        
        ?>
    </a>
 

<?php endforeach;?>
  

  </div>
  </div>
<div class="col-9">
<?php foreach($kurslar as $kurs):?>
    <div class="card mb-3">
        
        <div class="row">
            <div class="col-md-4">
                <img src="img/<?php echo $kurs["resim"];?>"  class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    
                <h5 class="card-title"> <?php
               echo $kurs["baslik"];
               ?></h5>
                <p>
                    <?php 
                    echo $kurs["aciklama"];?>
                </p>
            </div>
        </div>
        </div>
   <?php endforeach; ?>
    
    </div>
   
</div>
</div>
</div>
</body>

</html>