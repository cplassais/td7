<?php
require_once 'models/connexion.php';
require_once 'models/Student.php';
$oStudent = new Student();
if (!empty($aParamsURL[2])):
    $oStudent->getStudent($dbc, $aParamsURL[2]);
endif;

include('views/studentSingleView.php');