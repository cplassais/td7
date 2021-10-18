<?php
require_once 'models/connexion.php';
//require_once 'models/Subject.php';

$oSubjects = new Subject();
echo($aParamsURL[2]);
if (!empty($aParamsURL[2])):
    $oSubjects->deleteSubject($dbc, $aParamsURL[2]);
endif;
header('Location: /subjectlist/');

