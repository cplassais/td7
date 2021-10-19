<?php

$oSubjects = new Subject();
if(!empty($_POST)):
    $oSubjects->updateSubject($dbc, $_POST['id'], $_POST['name'],$_POST['description'],$_POST['duration'],$_POST['coefficient']);
    $aParamsURL[2] = $_POST['id'];
    header('Location: /subjectlist/');
endif;

if (!empty($aParamsURL[2])):
    $oSubjects = Subject::getSubject($dbc, $aParamsURL[2]);
endif;
$actionForm = '/subjectupdate/';
include('views/subjectFormView.php');
//include('views/subjectUpdateView.php');