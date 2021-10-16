<?php
include 'index.php';
$aParamsURL = explode('/',$_SERVER['REQUEST_URI']);
switch ($aParamsURL[1]) {
    case 'subjectlist':
        include 'controllers/subject/subjectListController.php';
        break;
    case 'subjectsingle':
        include 'controllers/subject/subjectSingleController.php';
        break;
    case 'subjectupdate':
        include 'controllers/subject/subjectUpdateController.php';
        break;
    case 'subjectdelete':
        include 'controllers/subject/subjectDeleteController.php';
        break;
    case 'subjectadd':
        include 'controllers/subject/subjectAddController.php';
        break;
    case 'subjectduplicate':
        include 'controllers/subject/subjectDuplicateController.php';
        break;
    case 'studentsingle':
        include 'controllers/student/studentSingleController.php';
        break;
    case 'studentlist':
        include 'controllers/student/studentListController.php';
        break;
    default:
        include 'controllers/errorPageController.php';
}
