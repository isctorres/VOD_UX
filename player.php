<?php
$peliculas = array(
  "6ZfuNTqbHE8", // Avenger Infinity War
  "GvbzrqD_kno", // Star Wars
  "_8Ktfs2mBDY", // Juegos del Hambre
  "xjDjIWPwcPU", // Black Panther
  "XnkhgMzUlRA", // La mujer maravilla
  "Pa_dOcZxDy8", // Matrix
  "WDkg3h8PCVU", // Acuaman
  "9QAXztNrlfo", // Prometeo
  "T6Walb5hQeY", // Era de hielo
  "D_hxHlORX1I", // Los minions
  "rlRz2T_IeyI", // Como entrenar a tu dragon
  "wmiIUN-7qhE", // Toy Story
  "EInk4GJz_v8", // Frozen
  "8xj5li33r-A", // El Lorax
  "8UwxL-Zheqk", // Increibles
  "HtmVePtxh-Q", // Ralph
  "-iRajLSA8TA", // Titanic
  "hBtSF4-cnzk", // Milagros inesperados
  "CK3_6phS20g", // Desde mi cielo
  "BFwGqLa_oAo", // El pianista
  "jrVVIaO_hTg", // Siempre a tu lado
  "JHldZNvZY4Q", // Lo imposible
  "HpW6qzO4LHI", // Hasta el ultimo hombre"
  "si12yPyTnSs" // Viven
);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>MexFlix VOD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/player.css">
  </head>
  <body>
      
    <iframe width="949" height="534" src="https://www.youtube.com/embed/<?= $peliculas[$_SESSION['pos']]?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>