<!--2) Write Ajax program to calculate maximum runs scored for a particular country (Use Above 
Player table).-->
<?php 
error_reporting(0);
try{
    $conn=new mysqli("localhost","root","","advance_php");
    if($conn->connect_error==null)
    {
        $sql=$conn->prepare("SELECT `country` FROM `player`");
        $sql->execute();
        $res=$sql->get_result();
    }else
        throw new Exception("Database could not connected!!");
}catch(Exception $error)
{
    echo "<script>alert('{$error->getMessage()}');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax with database</title>
    <script src="Q2_calculateTotalRunAjax.js" defer></script>
</head>
<body>
    <div class="content">
        <div class="heading">
            <h2>Display maximum run scored of selected country!! </h2>
        </div>
        <div class="form-content">
            <form>
                <div class="form-element">
                    <label for="country">Select Country:</label>
                    <select name="country" id="country">
                        <?php 
                            try{
                                if($res->num_rows>0)
                                {
                                    while($column=$res->fetch_column())
                                        {
                                           if($column!=$temp)
                                            {
                                                echo"<option value='$column'>$column</option>";
                                                $temp=$column;
                                            }
                                        }
                                }else
                                    throw new Exception("!Don't have any option for selecting..");
                            }catch(Exception $error1)
                            {
                                echo"<script>alert('{$error1->getMessage()}');</script>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-element">
                    <input type="submit" value="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="output">
        <div class="head">
            <h3>The result given below..</h3>
        </div>
        <div id="result"></div>
    </div>
</body>
</html>