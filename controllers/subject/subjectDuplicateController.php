<?php
//require_once 'models/connexion.php';

$oSubjects = new Subject();
if(!empty($_POST)):
    $oSubjects->addSubject($dbc,$_POST['name'],$_POST['description'],$_POST['duration'],$_POST['coefficient']);
    //$aParamsURL[2] = $_POST['id'];
    header('Location: /subjectlist/');
endif;

if (!empty($aParamsURL[2])):
    $oSubjects = Subject::getSubject($dbc, $aParamsURL[2]);
endif;
$actionForm = '/subjectduplicate/';
include('views/subjectFormView.php');
//include('views/subjectDuplicateView.php');