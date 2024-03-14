<!--1) Write PHP program accept name, select your cities you would like to visit and display
selected information on page. (Use multi-valued parameter),.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
        }

        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 3px;
            padding: 2%;
            border: 1px solid black;
            justify-content: space-between;
        }

        legend{
            justify-content: center;
            text-align: center;
            align-items: center;
            font-size: 50px;
            font-weight: 400;
            color: blue;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        input,select{
            display: block;
            outline: none;
            width: 100%;
            padding: 1%;
        }

        input[type="submit"],input[type="reset"]
        {
            display: inline;
            width: 35%;
            margin-left: 2%;
            margin-right: 2%;
            padding-top: 2%;
            padding-bottom: 2%;
        }

        input[type="submit"]:hover{
            background-color: blue;
            color: white;
            transition: 0.5s;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="reset"]:hover
        {
            background-color: red;
            color: white;
            transition: 0.5s;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="reset"]{
            margin-left: 20%;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Information</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name"><b>Enter your name:</b></label>
        <input type="text" name="name" id="name"><br>
        <label for="select1"><b>Select visited cities:</b></label>
        <select name="select1[]" id="select" multiple>
            <option value="pune">pune</option>
            <option value="mumbai">mumbai</option>
            <option value="nagar">nagar</option>
            <option value="ayodhya">ayodhya</option>
            <option value="shrirampur">shrirampur</option>
        </select><br>
        <input type="submit" value="submit" name="submit">
        <input type="reset" name="reset" value="reset">
    </form>
    </fieldset>
</body>
</html>
<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $value = "";
    foreach ($_POST['select1'] as $select) {
        $value .= $select . ",";
    }

    echo"<script>alert('the name:$name...the cities:$value');</script>";
   /* echo"The name :$name..<br>";
    echo"The selected cities are:";
    print_r($value);*/
}
?>