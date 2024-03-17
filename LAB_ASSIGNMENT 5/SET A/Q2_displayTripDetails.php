<!----2) Create Trip table as follows
Trip (tno, tname, Source, Destination, cost). Write Ajax program to select the trip name and print the 
selected trip details---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Database</title>
    <script src="Q2_displayTripDetails.js" defer></script>
</head>
<body>
    <?php 
      error_reporting(0);
      try{
            $conn=new mysqli("localhost","root","","advance_php");
            if($conn->connect_error)
                throw new Exception("Database connection failed!!");
            else
            {
                $sql=$conn->prepare("SELECT `tripName` FROM `trip`");
                $sql->execute();
                $res=$sql->get_result();
            }
      }catch(Exception $error)
      {
            echo"<script>alert('{$error->getMessage()}');</script>";
      }
    ?>
    <div class="content">
        <div class="form-heading">
            <h2>Display selected trip details!!</h2>
        </div>
        <div class="form-content">
            <form>
               <div class="element">
                 <label for="trip">Select trip:</label>
                <select name="trip" id="trip">
                <?php 
                try{
                    if($res->num_rows>0)
                    {
                        while($column=$res->fetch_assoc())
                            echo"<option value='$column[tripName]'>$column[tripName]</option>";
                    }else   
                        throw new Exception("Database Could not connected!!");
                }catch(Exception $error)
                {
                    echo"<script>alert('{$error->getMessage()}');</script>";
                };
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
            <h3>The Selected trip Details...</h3>
        </div>
        <div id="output"></div>
    </div>
</body>
</html>