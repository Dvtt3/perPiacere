<?php

  function getRecordCount() {
    $servername = 'maria';
    $username = 'root';
    $password = 'root';
    $dbname = 'userData';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM AccessData";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "id: ".$row["id"]." accessDate:".$row["accessDate"]." accessFrom:".$row["accessFrom"]."</br>";
      }
    }
    $conn->close();
  }

    function getIPAddress() {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
            $ip = $_SERVER['HTTP_CLIENT_IP'];  
            } 
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
        else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    } 

    $ip = getIPAddress();  

    $servername = 'maria';
    $username = 'root';
    $password = 'root';
    $dbname = 'userData';
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO AccessData ( ip, accessDate, accessFrom) VALUES ( \"$ip\", CURRENT_DATE(), 1 )";
    
    if ($conn->query($sql) === TRUE) {
      echo "access succesfully registered</br>";
      getRecordCount();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>