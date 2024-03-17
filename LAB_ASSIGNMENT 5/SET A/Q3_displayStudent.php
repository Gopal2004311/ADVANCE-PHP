<!----3) Create student table as follows Student(sno, sname, per).
Write Ajax program to select the student name and print the selected student’s details---->
<?php 
error_reporting(0);
try{
    $conn=new mysqli("localhost","root","","advance_php");
    if($conn->connect_error==null)
    {
        $sql=$conn->prepare("SELECT `studentName` FROM `student`");
        $sql->execute();
        $res=$sql->get_result();
    }else
        throw new Exception("Database could not connected!!");
}catch(Exception $error)
{
    echo"<script>alert('{$error->getMessage()}');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <script src="Q3_displayStudent.js" defer></script>
</head>
<body>
    <div class="content">
        <div class="heading">
            <h2>Display details of selected student!!</h2>
        </div>
        <div class="form-content">
            <form>
                <div class="form-element">
                    <label for="name">Select student name:</label>
                    <select name="name" id="name">
                        <?php 
                        try{
                            if($res->num_rows>0)
                            {
                             while($row=$res->fetch_column())
                                echo"<option value='$row'>$row</option>";
                            }else
                                throw new Exception("Database could not connected!!");
                        }catch(Exception $error)
                        {
                            echo"<script>alert('{$error->getMessage()}');</script>";
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
    <div class="display">
         <div id="output"></div>
    </div>
</body>
</html>