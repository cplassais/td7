<?php
require_once 'models/connexion.php';
require_once 'models/Subject.php';

$oSubjects = new Subject();
if(!empty($_POST)):
    var_dump($_POST);
    $oSubjects->addSubject($dbc,$_POST['name'],$_POST['description'],$_POST['duration'],$_POST['coefficient']);
//    $aParamsURL[2] = $_POST['id'];
    header('Location: /subjectlist/');
endif;
$actionForm = '/subjectadd/';
include('views/subjectFormView.php');