<?php
require_once 'models/connexion.php';
require_once 'models/Subject.php';

$oSubjects = new Subject();
$aListSubjects = $oSubjects->getListSubjects($dbc);

include ('views/subjectListView.php');