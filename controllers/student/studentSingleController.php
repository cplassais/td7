<?php
require_once 'models/connexion.php';

$oStudent = new Student();
if (!empty($aParamsURL[2])):
    $oStudent->getStudent($dbc, $aParamsURL[2]);
endif;

include('views/studentSingleView.php');