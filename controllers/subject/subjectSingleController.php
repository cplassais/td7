<?php
require_once 'models/connexion.php';
require_once 'models/Subject.php';
$oSubject = new Subject();
if (!empty($aParamsURL[2])):
    $oSubject = $oSubject->getSubject($dbc, $aParamsURL[2]);
endif;

include('views/subjectSingleView.php');