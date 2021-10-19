<?php

$aResponses = Subject::getListSubjects($dbc);

include('views/subjectListView.php');