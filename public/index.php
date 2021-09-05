<?php
// Valid PHP Version?
$minPHPVersion = '7.2';
if (phpversion() < $minPHPVersion)
{
    die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . phpversion());
}
unset($minPHPVersion);

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Location of the Paths config file.
// This is the line that might need to be changed, depending on your folder structure.
$pathsPath = realpath(FCPATH . '/app/Config/Paths.php');
define('ROOT', dirname(__FILE__));
// ^^^ Change this if you move your application folder

if($_SERVER["HTTP_HOST"]=="localhost"){
    define('TEMPLATE', 'http://localhost/travelinghome.com/template/');
    define('WEBTEMPLATE', 'http://localhost/travelinghome.com/template/web/');
    define('PATH', 'http://localhost/travelinghome.com/');
    define('DBHOST', 'localhost');
    define('DBNAME', 'travelinghome');
    define('DBUSER', 'root');
    define('DBPASS', '');
} else {
    define('TEMPLATE', 'https://travelinghome.com/template/');
    define('PATH', 'https://travelinghome.com/');
    define('DBHOST', 'localhost');
    define('DBNAME', 'travelinghome');
    define('DBUSER', 'travelinghome');
    define('DBPASS', '');
}

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
require $pathsPath;
$paths = new Config\Paths();

// Location of the framework bootstrap file.
$app = require rtrim($paths->systemDirectory, '/ ') . '/bootstrap.php';

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
$app->run();
