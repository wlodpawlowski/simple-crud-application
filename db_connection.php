<?php 
  function OpenCon() {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'pTYw1WGbZyMCEQx6';
    $db = 'ajax-database';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die('Connect failed: %s\n'. $conn -> error);

    return $conn;
  }

  function CloseCon($conn) {
    {
      $conn -> close();
    }
  }
?>