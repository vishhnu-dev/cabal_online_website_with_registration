<?php
  // https://www.php.net/manual/pt_BR/function.sqlsrv-connect.php

  
  // Connect on a specified port example
  // $serverName = "serverName\\sqlexpress, 1542"; //serverName\instanceName, portNumber (default is 1433)
  // $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
  // $conn = sqlsrv_connect( $serverName, $connectionInfo);

  // specifying a user name and password example
  // $serverName = "serverName\\sqlexpress"; //serverName\instanceName
  // $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
  // $conn = sqlsrv_connect( $serverName, $connectionInfo);
  


  #The connection will be attempted using Windows Authentication.
  $serverName = "DESKTOP-P4JLCFF\MSSQLSERVER01";
  $connectionInfo = array("Database"=>"Account");
  $conn = sqlsrv_connect($serverName, $connectionInfo);

  if( $conn ) {
       
  }else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
  }
?>