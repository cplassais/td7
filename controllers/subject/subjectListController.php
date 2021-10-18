<?php
//require_once 'models/connexion.php';

$oSubject = new Subject();
$tmp = new Connexion();
$dbc= $tmp->Connexion();
$aResponses = $oSubject::getListSubjects($dbc);

include('views/subjectListView.php');