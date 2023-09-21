<?php
//sitename
define('SITENAME','Mini Post');

//classname
define('CLASSNAME','Mini Post');

//app root URL
define('__APPROOT__',dirname(dirname(dirname(__FILE__))));

//root URL
define('ROOTURL', 'http://localhost/sql_retrival');

//public imag url
define('P_IMG_URL',__APPROOT__."/public/images/");

//Connecton variable
// $conn=mysqli_connect("localhost","root","","sql_retrival");
$conn = mysqli_connect('localhost','root','','sql_retrival');

//file upload path
define('FILEPATH',__APPROOT__.'/public/pages/');
define('FILEVPATH',ROOTURL.'/public/pages/');

//editor css
define('editCSS',__APPROOT__.'/public/css/contents.css');

error_reporting(0);
?>