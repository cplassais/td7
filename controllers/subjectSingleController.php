<?php
require_once 'models/connexion.php';
require_once 'models/Subject.php';
$oSubjects = new Subject();
if (!empty($aParamsURL[2])):
    $aListSubjects = $oSubjects->getSingleSubjects($dbc, $aParamsURL[2]);
endif;

include('views/subjectSingleView.php');