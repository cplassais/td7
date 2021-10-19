<?php

if (!empty($aParamsURL[2])):
    $oSubject = Subject::getSubject($dbc, $aParamsURL[2]);
endif;
include('views/subjectSingleView.php');