<?php
include 'index.php';
$aParamsURL = explode('/',$_SERVER['REQUEST_URI']);
switch ($aParamsURL[1]) {
    case 'subjectlist':
        include 'controllers/subjectListController.php';
        break;
    case 'subjectsingle':
        include 'controllers/subjectSingleController.php';
        break;
    case 'subjectupdate':
        include 'controllers/subjectUpdateController.php';
        break;
    case 'subjectdelete':
        include 'controllers/subjectDeleteController.php';
        break;
    case 'student':
        include 'controllers/studentController.php';
        break;
    case 'addstudent':
        include 'controllers/addStudentController.php';
        break;
    case 'addform':
        include 'controllers/formStudentController.php';
        break;
    default:
        include 'controllers/errorPageController.php';
}
