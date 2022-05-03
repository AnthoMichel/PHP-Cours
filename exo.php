<?php 
require_once "repoData.php";

// FONCTIONS 


// function hello(){
//     echo "Hello";
// }

// function lanceRoquette(){
//     echo "La violence c'est mal, m'voyez... !";
// }

// // lanceRoquette();

// function peace(){
//     lanceRoquette();
// }

// // peace(); 200 / 3500 

// function salut($name){
//     echo "<p>Hello " . $name .  " my friend !</p>";
// }

// salut("Calogero");

// salut("Mixhle");

// salut(12);

// function tourName($tour,$prenom){
//     echo "<ul>";
//     for ($i=0; $i < $tour ; $i++) {
//        echo "<li> Toto $i - $prenom</li>";
//     }
//     echo "</ul>";
    
// }

// tourName(3,"BoB");
// tourName(6,"Revolver");

// // tourName(); bug car pas d'arguments !

// function multiplication($nb,$nb2){
//     return $nb * $nb2;
// }


// $resultat=  multiplication(12,87) ;

// echo $resultat;
 

// ----------- FOCUS SUR LE RETURN CONTINUE DIE SLEEP !!!!


// if (true) {
//     echo "On est KO";
//     return;
//     echo "On fait une heure supp les gars !";
// }

// echo "On est KO mon djo";
// // return "mouk";
// echo "On fait une heure supp les gars !";


// for ($i=10; $i >= 0 ; $i--) { 

//     // echo "délire !";

//     if($i > 5 && $i < 9){
//         die;
//     }
//     echo "$i <br>";
// }


// // Heure actuelle
// echo date('h:i:s') . "\n";

// // Stoppe pour 10 secondes
// sleep(2);

// // retour !
// echo date('h:i:s') . "\n";
// $text = "User Nale";
// echo strlen($text);
// var_dump(empty($text)); // true / false ici c'est false

// var_dump(isset($text));
// echo gettype($text);


/**
 * Permet de vérifier une string...
 *
 * @param string $string
 * @return boolean
 */
function verifString($string){
    if (!empty($string)  &&  (strlen($string) > 2) && gettype($string) == "string" ) {
        return true;
    }else{
        return false;
    }

}

verifString($text);

// if(verifString($text)){
//     echo "Ajout en bdd réussi";
// }else{
//     echo "Donnée corrumpue";
// }


// ----------------- ALTER SPOILER !!!!



// $bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root","");

// $reqSQL  = $bdd->prepare("SELECT * FROM jeux");



// $reqSQL->execute();

// $tabs = $reqSQL->fetchAll(PDO::FETCH_ASSOC);

// // var_dump($tabs[0]["name"]);

// foreach($tabs as $tab ){

//     echo "<p> Id:" . $tab['id'] . "</p>
//              <p> Name: " . $tab['name'] . "</p>
//             <p>" . $tab['nb_players'] . "</p>" ;  

// }
// $reqSQL->closeCursor();
