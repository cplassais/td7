<?php
require_once 'models/connexion.php';
require_once 'models/Subject.php';

$oSubject = new Subject();
$aResponses = $oSubject->getListSubjects($dbc);

include('views/subjectListView.php');