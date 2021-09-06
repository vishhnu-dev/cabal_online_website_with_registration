<?php
  $serverName = "DESKTOP-P4JLCFF\MSSQLSERVER01";

  // Since UID and PWD are not specified in the $connectionInfo array,
  // The connection will be attempted using Windows Authentication.
  $connectionInfo = array( "Database"=>"Account");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);

  if( $conn ) {
       
  }else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
  }
?>