<?php 
error_reporting(0);
try{
    $trip=$_GET['trip'];
    $conn=new mysqli("localhost","root","","advance_php");
    if($conn->connect_error==null)
    {
       $sql=$conn->prepare("SELECT * FROM `trip` WHERE `tripName`=?");
       $sql->bind_param("s",$trip);
       $sql->execute();
       $res=$sql->get_result();
       $row=$res->fetch_assoc();
       echo"<table border='1px solid black'>";
       echo"<caption>$row[tripName]</caption>";
       echo"<tr>
       <th>trip no.</th>
       <th>trip source</th>
       <th>trip destination</th>
       <th>trip cost</th>
       </tr>";
       echo"<tr>
        <td>$row[tripNo]</td>
        <td>$row[source]</td>
        <td>$row[destination]</td>
        <td>$row[cost]</td>
           </tr>";
       echo"</table>";
    }else
        throw new Exception("Data base can't be connected!!");
}catch(Exception $error)
{
    echo$error->getMessage();
}