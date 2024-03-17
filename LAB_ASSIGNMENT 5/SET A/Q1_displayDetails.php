<!-----1) Write Ajax program to print Movie details by selecting an Actor’s name. Create table MOVIE and 
ACTOR as follows with 1 : M cardinality MOVIE (mno, mname, release_yr) and ACTOR(ano, 
aname).---->
<?php 
error_reporting(0);
try{
$conn=new mysqli("localhost","root","","advance_php");
if($conn->connect_error)
    throw new Exception("Database could not connected!!");
$sql=$conn->prepare("SELECT * FROM `actor`");
$sql->execute();
$res=$sql->get_result();
}catch(Exception $error)
{
    echo"<script>alert('{$error->getMessage()}');</script>";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="Q1_displayDetails.js" defer></script>
</head>
<body>
    <div class="content">
        <div class="heading">
            <h2>Display Movie Details!!</h2>
        </div>
        <div class="form-content">
            <form>
                <div class="element">
                    <label for="actor">Select Actor:</label>
                    <select name="actor" id="actor">
                        <?php 
                        try{
                            if($res->num_rows>0)
                            {
                            while($row=$res->fetch_assoc())
                            {
                                $data=$row['actorName'];
                                echo"<option value='$data'>$data</option>";
                            }
                        }else
                            throw new Exception("Data cannot fetched!!");
                        }catch(Exception $error)
                        {
                            echo"<script>alert('{$error->getMessage()}');</script>";
                        }
                        ?>
                    </select>
                </div>
                <div class="element">
                    <input type="submit" value="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="details">
        <div class="heading">
            <h3>The details of selected actor...</h3>
        </div>
        <div id="output"></div>
    </div>
</body>
</html>