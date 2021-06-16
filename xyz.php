<?php

if(isset($_POST['save']))
{   $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
 }     
  
$con= new mysqli("localhost" , "root" , "" , "connect");

if($con->connect_error)
    {
        die("Connection Failed" . $con->connect_error);
    }

 
$sql= "INSERT INTO data VALUES('$Name','$Email','$Phone','$Subject','$Message')";
    

    if($con-> query($sql) ===TRUE)
    {
        echo "New Details Inserted";
    }
    else
    {
        echo "Error:" . $sql . "" .$con->error;
    }
   $con->close();

?>