<?php
require_once 'models/connexion.php';

$oStudent = new Student();
$aResponses = $oStudent->getListStudents($dbc);

include('views/studentListView.php');