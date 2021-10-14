<?php include 'connexion.php';
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $birthdate = $_POST['birthdate'];
    $query = "INSERT INTO `student` (`id`, `name`, `firstname`,`birthdate`) VALUES (NULL, '$name', '$firstname', '$birthdate')";
    $student = $dbc->prepare($query);
    $student->execute(['name', 'firstname', 'birthdate']);
include 'views/formAddStudentView.php';

