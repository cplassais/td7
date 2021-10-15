<?php
require_once 'models/connexion.php';
require_once 'models/Subject.php';

$oSubjects = new Subject();
if(!empty($_POST)):
    $oSubjects->updateSubject($dbc, $_POST['id'], $_POST['name'],$_POST['description'],$_POST['duration'],$_POST['coefficient']);
    $aParamsURL[2] = $_POST['id'];
    header('Location: /subjectlist/');
endif;

if (!empty($aParamsURL[2])):
    $oSubjects->getSubject($dbc, $aParamsURL[2]);
endif;

include('views/subjectUpdateView.php');