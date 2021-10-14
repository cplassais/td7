<?php
$servername = 'localhost';
$username = 'student';
$password = 'student';
$bddname = 'student';


try {
    $dbc = new PDO("mysql:host=$servername;dbname=$bddname", $username,
        $password);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion réussie"." ";
} catch (PDOException $e) {
    echo $e->getMessage();
    // on peut utiliser getCode() pour identifier l'erreur
}
//$data = $dbc->query("SELECT * FROM `student`");
//foreach ($data as $trainers => $value) { ?>
<!--    <p>--><?php //echo $value['id']; ?><!--</p>-->
<!--    <p>--><?php //echo $value['firstname']; ?><!--</p>-->
<!--    <p>--><?php //echo $value['name']; ?><!--</p>-->
<!--    <p>--><?php //echo $value['birthdate']; ?><!--</p>-->
<!--    <hr>-->
<!--    --><?php
//}
// selectionner une ligne par recherche
//$query = "SELECT * FROM `student` WHERE name LIKE '%PLASSAIS%'";
//$response = $dbc->query($query);
//$student = $response->fetch(PDO::FETCH_ASSOC);
//     ?><!--<p>--><?php //echo $student['name']; ?><!--</p>--><?php
//?>
<!--inserer une nouvelle ligne dans la base-->
<?php
//$query = "INSERT INTO student (id, name, firstname, birthdate) VALUES (NULL, 'AMPOULE', 'Machine', '2021-10-12')";
//$student= $dbc->prepare($query);
//$student->execute(['name','firstname','birthdate']);
//?>
<!--delete une ligne-->
<?php
//$query = "DELETE FROM `student` WHERE `student`.`id` = 40";
//$dbc->query($query);
//?>
<!--update une ligne-->
<?php
//$query = "UPDATE `student` SET `firstname` = 'Bassam' WHERE `student`.`id` = 1";
//    $dbc->query($query);
//?>
<?php
// déconnexion

// $conn = null;
// echo (' Base déconnectée');


function superZero($nb)
{
    if ($nb < 0) {
        throw new Exception('Nb inférieur à zéro', 2);
    } else {
        echo 'Le nombre est supérieur ou égal à 0';
    }
}


