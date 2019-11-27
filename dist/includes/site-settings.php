<?php 
    
    $whitelist = array(
        '127.0.0.1',
        '::1'
    );
    
    if( in_array($_SERVER['REMOTE_ADDR'], $whitelist) ):

        // ** error handling
        ini_set('display_errors', 1); // Report errors ON
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // ** version
        $version = rand();

    else:

        // ** error handling
        error_reporting(0); // Report errors OFF

        // ** version
        $version = "1.0.0";

    endif;

    // ** PHP dotenv
    require __DIR__ . '/../../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::create(__DIR__, '../../.env');
    $dotenv->load();
    // $db = $_ENV['DB_NAME'];

    // * Connect to database
    // include 'database.php';