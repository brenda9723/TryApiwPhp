

<!--  puede ser usado escribiendo el comando entero  con "eco" o solo con caracteres representativos como en el ejemplo mas abajo-->


<!--  Las variables se definen con un signo de dolar en frente y no le gustan muchos caracteres especiales o numeros al principio del nombre de la variable-->

<?php
   
    //constante una vez noma se le puede usar porque como es una constante no va cambiar y si hay dos se va quejar

 

    define('LOGO_URL', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqsPyX8psx8qG77BblCwimkF-oLkhNfWYUPQ&s');

  
    const TITULO = 'proyecto';





    $name = "Pedrito";
    $isDev = true;
    $age = 1;
    var_dump($name);
    var_dump($isDev);
    var_dump($age);

  



   // string(7) "Pedrito" bool(true) int(27) resultado de hacer un var_dump

   //el gettype es para lo que su nombre indica obtener los tipos de datos, existen otras como is_string(), is_bool(), is_int() para el mismo fin

   echo gettype($name); 
   
    //$age = (bool) 28;

    //seria para forzar a una variable a cambiar su tipo

    $output = "Hola \$ $name, cuando cumplis $age ?";

    //el output es como el printf en python donde podes traer todo lo que queres imprimir en una linea nomas y mezclar con el texto normal, para ignorar un caracter especial y que no piense que es una variable se pone una barra invertida 


    
    //------------------if-----------------

    echo "<p> ---------------------------------------------</p>";
    $isOld = $age > 40;


    //fun fact el else if se puede escribir todo junto e igual lee

/*     if($isOld){
        echo "<h3> Respuesta de if: Estas muy viejo</h3>";

    }elseif($isDev){
        echo "<h3> Respuesta de if: Estas jodido</h3>";
    }else{
        echo "<h3> Respuesta de if: Estas joven aun</h3>";
    }
 */

    //-------------ternarias---------------

    $output = $isOld
    ? 'Eres viejo, pendejo (resultado de ternaria)'
    : 'Eres joven, pendejo (resultado de ternaria)'



?> 

<!-- existe una manera distinta de escribir if en php que seria usarlo como un sistema de plantillas en donde por cada codigo de php podes insertar un html sin tener que hacer un echo a las respuestas a mostrar
Aca solo hay una linea, pero yo puedo meter tanto html como sea necesario, por eso el tema de plantillas
Lo malo es que vos no podes separar el elseif esto porque sino va aparecer "parse error" que no es muy especifico y te sacara canas verdes xd


-->



<?php if ($isOld) : ?>
    <h3> Respuesta de if diferente: Estas muy joven</h3>
<?php elseif ($isDev) : ?>
    <h3> Respuesta de if diferente: Estas jodido</h3>
<?php else : ?>
    <h3> Respuesta de if diferente: Estas muy viejo</h3>
<?php endif; ?>



<!-- +------------------------------+


    en match se evaluan varias condiciones y para este caso en particular se utilizo que alguna de las condiciones devolvieran true y ese va ser el resultado que se muestre, esto se puede hacer tambien con if o con switch pero es mayor codigo y mayor complejidad

 -->

<?php $outputAge = match(true) {
    $age < 2 => "Eres un bebe, $name",
    $age <10 => "Eres un nene",
    $age < 18 => "Eres adolescente",
    $age === 18 => "Eres mayor de edad",
    $age < 40 => "Chavorruco",
    $age >= 40 => "Adulto anciano",
    default => "estas mas alla que aca",

};


//arreglos

$bestLanguages = ["php", "javascript", "python"];
//para añadir mas valores solo hay que hacer como que se va acceder a ninguna posicion poque el corchete esta vacio y agregar 
$bestLanguages[] = "java";
$bestLanguages[] = "typescript";




?>

<hr>

<div class="cont">
    <p> el mejor lenguaje es : <?= $bestLanguages[4] ?>
    <h3> Lista de lenguajes </h3>
    <ul>
        <?php foreach($bestLanguages as $key => $language) : ?>
<!-- 
            para mostrar el indice y concatenarlo -->
            <li> <?= $key . " -- " . $language ?> </li>
        <?php endforeach; ?>



    </ul>



</div>


<div array_aso>
    <?php $person = [
        "name" => "Brenda",
        "age" => 27,
        "isDev" => true,
        "languages" => ["php", "js", "python"]

    ];
    ?>

    <!--  se puede alterar o mutar-->

    <?php $person["name"] = "elizabeht"; ?>
    <?php $person["languages"][] = "java"; ?>
    <!--  se le puede agregar al array mas elementos tambien-->

</div>

    

<br>
<hr>
<hr>
<br>

<p> 
    <?= $outputAge ?>;
</p>

<hr>









<img src="<?= LOGO_URL?>" alt="PHP logo" width="200">

<h1>
        

    <?= "Hola mundo"; ?>
    <hr>
    <br>

    <?= $output ?>
    <hr>
    <br>

    <?= TITULO ?>
   
    
        
</h1>


<p>
    <?= $name; ?>
    <?= $isDev; ?>
    <?= $age; ?>
 



</p>





<style>
    :root {
        color-scheme: light dark;

    }

    body {
        display : grid;
        place-content: center;
    }


    .cont{
        text-align: center;
        border: 2px solid white;
        border-radius : 20px;
    }


</style>