<?php

$kategoriler = array ("Macera", "Dram","Komedi","Korku");

array_push($kategoriler,"Bilim Kurgu");

sort($kategoriler);

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kagit toplayarak gecinen ve sagligi giderek kötülesen Mehmet terk edimis",
        "yorumSayisi" => "23",
        "begeniSayisi" => "106",
        "vizyon" => "vizyonda",
        "url" => "https://m.media-amazon.com/images/M/MV5BZmU1MmMzNTctZDBlNS00NjMwLWFhNGQtOTNjYWU2ODU5MWNhXkEyXkFqcGdeQXVyMTA2ODkwNzM5._V1_.jpg"
    ),

    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kiyametinin ardindan hayatta kalanlar, birlikte verdikleri mücadele",
        "yorumSayisi" => "236",
        "begeniSayisi" => "1023",
        "vizyon" => "Vizyonda Degil",
        "url" => "https://m.media-amazon.com/images/M/MV5BZmU5NTcwNjktODIwMi00ZmZkLTk4ZWUtYzVjZWQ5ZTZjN2RlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg"
    ),
);

$yeni_film = array(
    "baslik" => "Spider-man",
        "aciklama" => "Radyo aktif bir örümcek tarafindan isiririlan Peter Parker bir süper kahramana dönüsür",
        "yorumSayisi" => "436",
        "begeniSayisi" => "3023",
        "vizyon" => "Vizyonda Degil",
        "url" => "https://m.media-amazon.com/images/I/61-rozyeQQL._UF894,1000_QL80_.jpg"

);

$filmler[0] = $yeni_film;
ksort($filmler);
shuffle($filmler);





$filmler["1"]["aciklama"] = strtolower ($filmler["1"]["aciklama"]);
$filmler["1"]["aciklama"] = ucfirst($filmler["1"]["aciklama"]) ;

$filmler["2"]["aciklama"] = strtolower($filmler["2"]["aciklama"]);
$filmler["2"]["aciklama"] = ucfirst($filmler["2"]["aciklama"]);

$filmler["0"]["aciklama"] = strtolower($filmler["2"]["aciklama"]);
$filmler["0"]["aciklama"] = ucfirst($filmler["2"]["aciklama"]);

$filmler["1"]["aciklama"] = substr($filmler["1"]["aciklama"], 0,200)."...";
$filmler["2"]["aciklama"] = substr($filmler["2"]["aciklama"], 0,200)."...";
$filmler["0"]["aciklama"] = substr($filmler["0"]["aciklama"], 0,200)."...";

$film1_url = strtolower ($filmler["1"]["baslik"]);
$film1_url = str_replace( [" ", "ç"], ["_", "c"],$film1_url);

$film2_url = strtolower($filmler["2"]["baslik"]);
$film2_url = str_replace ( [" ", "ç"], ["_", "c"],$film2_url);

$film2_url = strtolower($filmler["0"]["baslik"]);
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
                    <li class="list-group-item"><?php echo $kategoriler[0]; ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[1]; ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[2]; ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[3]; ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[4]; ?></li>
                    
                </ul>
            </div>
            
            <div class="col-9">
                <br>
                <h1 class="m4-4"> <?php echo baslik; ?> </h1>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="<?php echo $filmler['1']['url']; ?>" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo  "<a href=\"{$film1_url}\">{$filmler["1"]["baslik"]}</a>"; ?></h5>
                                <p class="card-text"><?php echo $filmler["1"]["aciklama"]; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["1"]["yorumSayisi"]; ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["1"]["begeniSayisi"]; ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["1"]["vizyon"]; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="<?php echo $filmler['2']['url']; ?>" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo  "<a href=\"{$film2_url}\">{$filmler["2"]["baslik"]}</a>"; ?></h5>
                                <p class="card-text"><?php echo $filmler["2"]["aciklama"]; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["2"]["yorumSayisi"]; ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["2"]["begeniSayisi"]; ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["2"]["vizyon"]; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="<?php echo $filmler['0']['url']; ?>" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo  "<a href=\"{$film2_url}\">{$filmler["0"]["baslik"]}</a>"; ?></h5>
                                <p class="card-text"><?php echo $filmler["0"]["aciklama"]; ?></p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["0"]["yorumSayisi"]; ?></span>
                                    <span class="badge bg-primary"><?php echo $filmler["0"]["begeniSayisi"]; ?></span>
                                    <span class="badge bg-warning"><?php echo $filmler["0"]["vizyon"]; ?></span>
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
