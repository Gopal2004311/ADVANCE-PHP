<?php 
error_reporting(0);
try{
    $name=$_GET['student'];
    $conn=new mysqli("localhost","root","","advance_php");
    if($conn->connect_error==null)
    {
        $sql=$conn->prepare("SELECT * FROM `student` WHERE `studentName`=?");
        $sql->bind_param("s",$name);
        $sql->execute();
        $res=$sql->get_result();
        $row=$res->fetch_assoc();
         echo"<table border='1px solid black'>";
       echo"<caption>$name</caption>";
       echo"<tr>
       <th>Student no.</th>
       <th>Student name</th>
       <th>Percentage</th>
       </tr>";
       echo"<tr>
        <td>$row[studentNo]</td>
        <td>$row[studentName]</td>
        <td>$row[percentage]</td>
           </tr>";
       echo"</table>";
    }else
        throw new Exception("Database could not connected!!");
}catch(Exception $error)
{
    echo"<script>alert('{$error->getMessage()}');</script>";
}
