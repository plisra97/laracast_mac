<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_1</title>
</head>
<body>


 <!-- Create a paragraph that uses PHP to echo any basic sentence of your choosing. Practice typing the opening and closing --> -->



    
    <h1>
        <?php
        echo "Primo Esercizio";
        
        ?>
    </h1>

    <p>
        <?php
        echo "Oggi c'è bel tempo";
        ?>
    </p>


    <h2>
        <?php 
        echo "Secondo esercizio"
        ?>
    </h2>

    <p>
        <?php
        // Ora che $greeting è una variabile, fai lo stesso per il sostantivo ("Mondo"). Quindi gioca con la modifica dei valori delle variabili per generare frasi diverse.
        
        $greeting= "Ciao";
        $who= " a tutti";

        echo $greeting . $who;
        
        ?>
    </p>

    <h2>
        <?php
        echo "Esercizio 5";
        ?>
    </h2>
   
        <?php 
        $book= "Occhi fatali";
        $read= false;

        if($read){
            $message= "Complimenti hai letto il libro $book"; 
        }else{
            $message= " Mi dispiace non hai ancora letto il libro $book";
        }

        
        ?>
    <h3>
        <?= $message?>
    </h3>




<!-- <h2>
    <?php
    echo "Esercizio 6";
    ?>
</h2>

<?php
    $bestusers = [
        ['name'=> "Daniele", 'type_user'=> "premium", 'since'=> "2004"],
        ['name'=> "Franco", 'type_user'=> "basic",'since'=> "2009"], 
        ['name'=> "Adelia", 'type_user'=> "premium",'since'=> "2021"],

    ];


?>

<h3>
   <?php foreach ($bestusers as $bestuser) : ?>
    
    <?= $bestuser['name']  . " utente dal " . $bestuser['since'] ?>
    <?php endforeach; ?>
</h3> -->



<h2>
    <?php echo "Esercizio 7"?>
</h2>

<?php
    $movies= [
        ['title'=> "Iron Man", 'date'=>"2008"],
        ['title'=> "Avengers", 'date'=>"2012"],
        ['title'=> "Avengers: Age of Ultron", 'date'=>"2015"],

    ];

 function filterByRecent($movies){

    $filteredMovies = [];

    foreach($movies as $movie){
        if($movie['date']>2008){
            $filteredMovies[]= $movie;
        }
    }

    return $filteredMovies;
 }
 
?>

<?php foreach(filterByRecent($movies) as $movie) : ?> 
    
   <li>
   <?= $movie['title'] ?>
   </li>


<?php endforeach; ?>

</body>
</html>