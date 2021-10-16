<?php
require_once 'models/connexion.php';
require_once 'models/Student.php';

$oStudent = new Student();
$aResponses = $oStudent->getListStudents($dbc);

include('views/studentListView.php');