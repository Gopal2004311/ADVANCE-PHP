<?php 
error_reporting(0);
try{
    $country=$_GET['country'];
    $conn=new mysqli("localhost","root","","advance_php");
    if($conn->connect_error==null)
    {
        $sql=$conn->prepare("SELECT MAX(`run`) FROM `player` GROUP BY `country` HAVING `country`=?");
        $sql->bind_param("s",$country);
        $sql->execute();
        $res=$sql->get_result();
        $run=$res->fetch_column();

        $sql=$conn->prepare("SELECT * FROM `player` WHERE `country`=? AND `run`=?");
        $sql->bind_param("ss",$country,$run);
        $sql->execute();
        $result=$sql->get_result();

         echo"<table border='1px solid black'>";
            echo"<caption>Player Details</caption>";
            echo"<tr>
            <th>Player No.</th>
            <th>Player Name</th>
            <th>Country</th>
            <th>Wickets</th>
            <th>Runs</th>
            </tr>";
            while($row=$result->fetch_assoc())
            {
                echo"<tr>
                <td>$row[playerNo]</td>
                <td>$row[playerName]</td>
                <td>$row[country]</td>
                <td>$row[wicket]</td>
                <td>$run</td></tr>";
            }
            echo"</table>";
    }else
        throw new Exception("Connection failed!!");
}catch(Exception $error)
{
    echo$error->getMessage();
}