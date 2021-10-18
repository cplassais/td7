<?php
//require_once 'models/connexion.php';

$oSubjects = new Subject();
echo($aParamsURL[2]);
if (!empty($aParamsURL[2])):
    Subject::deleteSubject($dbc, $aParamsURL[2]);
endif;
header('Location: /subjectlist/');

