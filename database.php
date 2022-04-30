<?php


if(isset($_GET['Name'])&&isset($_GET['Last']))
{
    

$Name = $_GET['Name'];

$Last_Name = $_GET['Last'];

    Connect_DB($Name,$Last_Name);
}
else{
    Echo "<h1 style='color:red'>Error On Input Data !</h1>";
}




function Connect_DB($Name,$Last_Name)
{

    $Server_Name = "localhost";
    $User_Name = "root";
    $Password = "";
    $DataBase_Name = "student_test";
    
    $mysqli = new mysqli($Server_Name,$User_Name,$Password,$DataBase_Name);
    
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    
    
    
    $SQL_Query = "INSERT INTO `student`(`Name`, `Last_Name`) VALUES ('$Name','$Last_Name')";
    
    
    $Result = $mysqli->query($SQL_Query);   
    // Perform query 
    if ($Result==true) {
      Echo "<h1 style='color:green'>Success</h1>";
    }
    else{
        Echo "<h1 style='color:red'>Error</h1>";
    }
    
    $mysqli -> close();
    
}






