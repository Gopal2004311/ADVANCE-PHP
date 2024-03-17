<!--1) Write Ajax program to get details of voters whose vage is greater than 40 year from Voter table 
Create voter table as Voter (vid, vname, vage,vaddress).---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter by Age</title>
    <script src="Q1_displayVoterByAge.js" defer></script>
</head>
<body>
    <div class="content">
        <div class="heading">
            <h2>Display Details of Voter!!</h2>
        </div>
        <div class="form-content">
            <form>
                <div class="form-element">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" placeholder="Enter age here...">
                </div>
                <div class="form-element">
                    <label for="condition">Select option:</label>
                    <select name="condition" id="condition">
                        <option value="1">Greater</option>
                        <option value="2">Lesser(less)</option>
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
            <h3>The result will be display here..</h3>
        </div>
        <div id="result"></div>
    </div>
</body>
</html>