<?php 

//para iniciar una nueva sesion de curl; ch = curl handle
//si solo quiero hacer un get de lo que trae la api hay otra forma de hacerlo 
// $result = file_get_contents(API_URL)


const API_URL = "https://whenisthenextmcufilm.com/api";


$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resultado = curl_exec($ch);

$datos = json_decode($resultado, true);

curl_close($ch);

//var_dump($datos);



?>



<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba de apis</title>
        
        <style>
            :root {
                color-scheme: light dark;

            }

            body{
                display:grid;
                place-content: center;
                padding:0 200px
                
            }

            .imagen{
                
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
                border-radius:18px;
                display:block;
                width: 100%;
                max-width: 250px;
                height: auto;
                margin: 0 auto;

            }

            .contenedor_titulos{
                
                align-items: center;
                margin: 0 auto;
            }

            .contenedor_descripcion{
                background-color: blueviolet;
                border-radius: 20px;
                border: 2px solid azure;  
                align-items: center;
                margin: 0 auto;
                padding:10px;
            }

        </style>


    </head>
    <body>
        <h1>Next Marvel movie API</h1>
        <img class="imagen" src="<?=$datos["poster_url"]; ?>">
        <div class="contenedor_titulos">
            <h2> Title: <?= $datos["title"]; ?> </h2>
            <h3> Days untill reveal: <?= $datos["days_until"]; ?> </h3>

        </div>

        <p>
            <i>WATCH!: <?= $datos["release_date"]; ?></i>
        </p>
       
        <h4><b>Overview</b></h4>
        <div class="contenedor_descripcion">
            <?= $datos["overview"]; ?>
        </div>



    </body>

</html>










