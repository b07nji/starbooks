<?php 
ini_set( 'display_errors', 1 );
ini_set( 'error_reporting', E_ALL );


include 'inc/db_info.php';

try {
    $stmt = $pdo->query("select * from book");
    $books = $stmt->fetchAll();

} catch (PDOException $e) {
    var_dump($e);
}


require "d_index.php";

