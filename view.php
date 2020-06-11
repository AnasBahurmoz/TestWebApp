<?php
  //connection string 
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "Anas1565", "Database" => "ddacdbtp045065", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp045065.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  
   if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!";
?>
