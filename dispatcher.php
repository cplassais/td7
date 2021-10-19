<?php
spl_autoload_register(function ($Class) {
    require_once 'models/'.$Class.'.php';
});

const SERVER_NAME = 'localhost';
const DB_NAME = 'student';
const DB_USER = 'student';
const DB_PASS = 'student';

$dbc = new Db(SERVER_NAME, DB_NAME, DB_USER, DB_PASS);

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
    case 'importcsv':
        include 'controllers/importCsvController.php';
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
