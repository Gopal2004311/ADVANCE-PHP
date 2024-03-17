<?php 
error_reporting(0);
$subject=array(
    array("id"=>"401","name"=>"Networking","chapter"=>"6","faculty"=>"computer"),
    array("id"=>"402","name"=>"Operating System","chapter"=>"8","faculty"=>"computer"),
    array("id"=>"403","name"=>"Object oriented concept through CPP","chapter"=>"9","faculty"=>"computer"),
    array("id"=>"404","name"=>"Advance PHP","chapter"=>"5","faculty"=>"computer"),
    array("id"=>"403","name"=>"cpp","chapter"=>"9","faculty"=>"computer")
);
$flag=0;
$request=strtoupper($_GET['name']);
for($i=0;$i<count($subject);$i++)
{
    $up=strtoupper($subject[$i]["name"]);
    if(strcmp($up,$request)==0)
    {
        $flag=1;
        foreach($subject[$i] as $key=>$value)
        {
            if($key=="id"||$key=="name")
            {
                echo"Subject $key:$value<br>";
            }else{
                 echo"$key:$value<br>";
            }
        }
    }
}

if($flag==0)
    echo"No Data found!!";

