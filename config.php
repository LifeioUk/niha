<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

ob_start();
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "localhost"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "root"); // database user name eg. root
define('DB_DATABASE', "vestido"); //database name
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc


// this is 4th branch

//========== site details described here ========================
define('SITE_TITLE', 'demo.com');dsdsdsssssssssssssssssssssssssssss
define('SITE_TAG_LINE', 'give your tag line of your project here');
dsdsdsdsdsdsd
//contact ifnormation
define('SITE_CONTACT', 'your number');
//email information
define('SITE_EMAIL_INFO', 'your mail id');
//url information
define('BASE_URL', 'http://localhost/cud opertaion/');

// included main class
require_once 'app/Main.php';
require_once 'app/Controller.php';
require_once 'app/Admin.php';
// /**
//  * @param $class
//  */
// function __autoload($class) {
//     require_once 'app/' . $class.'.php';
// }