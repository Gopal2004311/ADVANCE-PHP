<?php 
error_reporting(0);
try{
    $age=$_GET['age'];
    $option=$_GET['condition'];
    $conn=new mysqli("localhost","root","","advance_php");
    if($option=='1')
    {
        $sql=$conn->prepare("SELECT * FROM `voter` WHERE `voterAge`>?");
    }else{
        $sql=$conn->prepare("SELECT * FROM `voter` WHERE `voterAge`<?");
    }
    $sql->bind_param("s",$age);
    $sql->execute();
    $res=$sql->get_result();
    if($res->num_rows>0)
    {
        echo"<table border='1px solid black'>";
        echo"<tr>
        <th>Voter No.</th>
        <th>Voter Name</th>
        <th>Voter Age</th>
        <th>Voter Address</th>
        </tr>";
        while($row=$res->fetch_assoc())
        {
            echo"<tr>
            <td>$row[Vid]</td>
            <td>$row[voterName]</td>
            <td>$row[voterAge]</td>
            <td>$row[voterAddress]</td>
            </tr>";
        }
        echo"</table>";
    }else{
        echo"No data found!!";
    }
}catch(Exception $error)
{
    echo$error->getMessage();
}