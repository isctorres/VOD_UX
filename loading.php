<?php
session_start();
$_SESSION['pos'] = $pos;
?>

<!doctype html>
<svg version="1.1" id="preloader" x="0px" y="0px" width="240px" height="120px" viewBox="0 0 240 120">

        <style type="text/css" >
            <![CDATA[
        
                #plug,
                #socket { fill:#FFFFFF }
        
                #loop-normal { fill: none; stroke: #FFFFFF; stroke-width: 12 }
                #loop-offset { display: none }
        
            ]]>
        </style>
        
        <path id="loop-normal" class="st1" d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
        L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
            <animate attributeName="stroke-dasharray" attributeType="XML"
                from="500, 50"  to="450 50"
                begin="0s" dur="2s"
                repeatCount="indefinite"/>
            <animate attributeName="stroke-dashoffset" attributeType="XML"
                from="-40"  to="-540"
                begin="0s" dur="2s"
                repeatCount="indefinite"/>  
        </path>
          
        <path id="loop-offset" d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
        L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5
        L146.48,87.02z"/>
          
        <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z"/>  
          
        <path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z"/>
          
        <animateMotion
            xlink:href="#plug"
            dur="2s"
            rotate="auto"
            repeatCount="indefinite"
            calcMode="linear"
            keyTimes="0;1"    
            keySplines="0.42, 0, 0.58, 1">
            <mpath xlink:href="#loop-normal"/>
        </animateMotion>
          
        <animateMotion             
            xlink:href="#socket"
            dur="2s"
            rotate="auto"
            repeatCount="indefinite"
            calcMode="linear"
            keyTimes="0;1"
            keySplines="0.42, 0, 0.58, 1">
            <mpath xlink:href="#loop-offset"/>
        </animateMotion>  
        </svg>
<html lang="en">
  <head>
    <title>Cargando Contenido....</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="5;url=./player.php">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/loading.css">
  </head>
  <body>
                <div class="credit">
                  <a href="https://thenounproject.com/search/?q=energy&i=2064" target="_blank">Conectandose al servidor...</a>
                </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>