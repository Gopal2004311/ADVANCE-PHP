<?php 
error_reporting(0);
try{
$conn=new mysqli("localhost","root","","advance_php");
if($conn->connect_error)
{
  throw new Exception("$conn->connect_error");
}else{
    $act=$_GET['name'];
    $sql=$conn->prepare("SELECT * FROM `actor`,`movie` WHERE `actor`.`actorNo`=`movie`.`actNo` AND `actorName`='$act'");
    $sql->execute();
    $res=$sql->get_result();

    echo"<table border='1px solid black'>";
      echo"<caption>Actor $act</caption>";
      echo"<tr>";
        echo"<th>Movie No.</th>";
        echo"<th>Movie Name</th>";
        echo"<th>Released Year</th>";
      echo"</tr>";
      while($row=$res->fetch_assoc())
      {
          echo"<tr>";
          echo"<td>$row[movieNo]</td>";
          echo"<td>$row[movieName]</td>";
          echo"<td>$row[releaseYear]</td>";
          echo"</tr>";
      }
    echo"</table>";
}
}catch(Exception $error)
{
    echo $error->getMessage();
};