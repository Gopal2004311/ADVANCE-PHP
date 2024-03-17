<?php 
error_reporting(0);
try{
    $name=$_GET['player'];
    $conn=new mysqli("localhost","root","","advance_php");
    if($conn->connect_error==null)
    {
        $sql=$conn->prepare("SELECT * FROM `player` WHERE `playerName`=?");
        $sql->bind_param("s",$name);
        $sql->execute();
        $res=$sql->get_result();
        if($res->num_rows>0)
        {
            echo"<table border='1px solid black'>";
            echo"<caption>$name</caption>";
            echo"<tr>
            <th>Player No.</th>
            <th>Country</th>
            <th>Wickets</th>
            <th>Runs</th>
            </tr>";
            while($row=$res->fetch_assoc())
            {
                echo"<tr>
                <td>$row[playerNo]</td>
                <td>$row[country]</td>
                <td>$row[wicket]</td>
                <td>$row[run]</td>
                </tr>";
            }
            echo"</table>";
        }else{
            echo"No Data found!!";
        }
    }else
        throw new Exception("Database could not connected!!");
}catch(Exception $error)
{
    // echo"<script>alert('{$error->getMessage()}');</script>";
    echo$error->getMessage();
}