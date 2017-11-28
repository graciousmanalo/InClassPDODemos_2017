<?php

/* 
 * 2 Ways to bring external scripts into existing:
 * 1- INCLUDE
 * 2- REQUIRE
 * 
 * Note: There is also an INQUIRE_ONCE and REQUIRE_ONCE 
 * 
 * Differences between each are:
 * 
 * Failure to include a file results in a warnig and the script
 * continues...
 * 
 * Failure to require a file results in a fatal error and the script
 * is halted
 * 
 * Typically INCLUDE files like HTML header, footer, sidebar, etc.
 * 
 * Typically REQUIRE files that are critical to the site's functionality
 * like database connections, configuration files, etc.
 */

//Retrieve the database info (inside of root foder)
$root = dirname($_SERVER['DOCUMENT_ROOT']).'/dbconn';
//echo $root;//C:/xampp/dbconn

//Create a constant to represent the final db connection file location
define('MySQL',$root.'/2017_pdo_connect.php');
//giving the final path
//C:/xampp/dbcon/2017_pdo_connect.php

//var_dump('MySQL');
