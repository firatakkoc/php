<?php

$kategori1="Macera";
$kategori2="Dram";
$kategori3="Komedi";
$kategori4="Koku";

$film1_baslik="Paper Lives";
$film1_aciklama =   "Kagit toplayarak gecinen ve sagligi giderek kötülesen Mehmet terk edimis";
$film1_resim="";
$film1_yorumSayisi="23";
$film1_begeniSayisi="106";
$film1_vizyon="Vizyonda";

$film2_baslik="Walking Dead";
$film2_aciklama="Zombi kiyametinin ardindan hayatta kalanlar, birlikte verdikleri mücadele";
$film2_resim="";
$film2_yorumSayisi="236";
$film2_begeniSayisi="1023";
$film2_vizyon="Vizyonda Degil";

$film1_aciklama = strtolower ($film1_aciklama);
$film1_aciklama = ucfirst($film1_aciklama) ;

$film2_aciklama = strtolower($film2_aciklama);
$film2_aciklama = ucfirst($film2_aciklama);

$film1_aciklama = substr($film1_aciklama, 0,200)."...";
$film2_aciklama = substr($film2_aciklama, 0,200)."...";

$film1_url = strtolower ($film1_baslik);
$film1_url = str_replace( [" ", "ç"], ["_", "c"],$film1_url);

$film2_url = strtolower($film2_baslik);
$film2_url = str_replace ( [" ", "ç"], ["_", "c"],$film2_url);

const baslik = "Popüler Filmler";

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori1; ?></li>
                    <li class="list-group-item"><?php echo $kategori2; ?></li>
                    <li class="list-group-item"><?php echo $kategori3; ?></li>
                    <li class="list-group-item"><?php echo $kategori4; ?></li>
                    
                </ul>
            </div>
            
            <div class="col-9">
                <br>
                <h1 class="m4-4"> <?php echo baslik; ?> </h1>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo '<img class="img-fluid" src="https://m.media-amazon.com/images/M/MV5BZmU1MmMzNTctZDBlNS00NjMwLWFhNGQtOTNjYWU2ODU5MWNhXkEyXkFqcGdeQXVyMTA2ODkwNzM5._V1_.jpg" alt="">' ?>
                            
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo  "<a href=\"{$film1_url}\">{$film1_baslik}</a>"; ?></h5>
                                <p class="card-text"><?php echo $film1_aciklama; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $film1_yorumSayisi; ?></span>
                                    <span class="badge bg-primary"><?php echo $film1_begeniSayisi; ?></span>
                                    <span class="badge bg-warning"><?php echo $film1_vizyon; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="https://m.media-amazon.com/images/M/MV5BZmU5NTcwNjktODIwMi00ZmZkLTk4ZWUtYzVjZWQ5ZTZjN2RlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo  "<a href=\"{$film2_url}\">{$film2_baslik}</a>"; ?></h5>
                                <p class="card-text"><?php echo $film2_aciklama; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $film2_yorumSayisi; ?></span>
                                    <span class="badge bg-primary"><?php echo $film2_begeniSayisi; ?></span>
                                    <span class="badge bg-warning"><?php echo $film2_vizyon; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>

</html>
