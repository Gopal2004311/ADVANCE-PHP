<!---1) Write PHP program to accept name of student , Gender(male ,female ) using radio buttons
,Qualification(SSC, HSC, BCA, MCA) using check boxes . Display information of student.
(Use sticky multi-valued parameter).-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            padding: 1%;
            padding-right: 2%;
            border-radius: .5%;
            background-color: white;
            box-shadow: 0px 10px 0px 10px lightblue;
        }

        input{
            display: block;
            width: 100%;
            outline: none;
            padding: 1%;
        }

        legend{
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 25px;
          /*  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
          font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          font-weight: 700;
          color: blue;
        }
        input[type="checkbox"],input[type="radio"]
        {
            margin-bottom: -15px;
            width:50%;
        }

        input[type="submit"],input[type="reset"]
        {
            width: 30%;
            display: inline-block;
            margin: 2%;
            margin-left: 12%;
            font-size: 17px;
           /* font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;*/
           font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        input[type="submit"]{
            background-color: blue;
            color: white;
            border-radius: 2px;
            border: 1px solid blue;
            transition: .5s;
           /* box-shadow: 2px 2px 2px 2px blue;*/
            cursor: pointer;
        }

        input[type="reset"]{
            background-color: red;
            color: white;
            border-radius: 2px;
            border: 1px solid red;
            transition: .5s;
           /* box-shadow: 2px 2px 2px 2px red;*/
            cursor: pointer;
        }

        #name:focus{
            border: 1px solid blue;
            box-shadow: 1px 1px 7px lightblue;
            transition: .5s;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>!!Student Details!!</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name"><b>Enter student name:</b></label>
        <input type="text" name="name" id="name" placeholder="Enter your name.." value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>"><br>
        <label for="gender"><b>select gender:</b></label>
        <input type="radio" name="gender" id="gender1" value="male"
         <?php
if (isset($_POST['gender'])) {
    if ($_POST['gender'] == "male") {
        echo "checked";
    }
}
?>><label for="gender1"><b>male</b></label>
        <input type="radio" name="gender" id="gender2" value="female"
         <?php
if (isset($_POST['gender'])) {
    if ($_POST['gender'] == "female") {
        echo "checked";
    }
}
?>><label for="gender2"><b>female</b></label><br>
        <label for="qualification"><b>tick qualification:</b></label>
        <input type="checkbox" name="qualification[]" id="qualification1" value="BCA"
        <?php
if (isset($_POST['qualification'])) {
    if (in_array("BCA", $_POST['qualification'])) {
        echo "checked";
    }
}
?>><label for="qualification1"><b>BCA</b></label><br>
        <input type="checkbox" on name="qualification[]" id="qualification2" value="MCA"
        <?php
if (isset($_POST['qualification'])) {
    if (in_array("MCA", $_POST['qualification'])) {
        echo "checked";
    }
}
?>><label for="qualification2"><b>MCA</b></label><br>
        <input type="checkbox" name="qualification[]" id="qualification3" value="MBA"
        <?php
if (isset($_POST['qualification'])) {
    if (in_array("MBA", $_POST['qualification'])) {
        echo "checked";
    }
}
?>><label for="qualification3"><b>MBA</b></label><br>
        <input type="checkbox" name="qualification[]" id="qualification4" value="MSC"
        <?php
if (isset($_POST['qualification'])) {
    if (in_array("MSC", $_POST['qualification'])) {
        echo "checked";
    }
}
?>><label for="qualification4"><b>MSC</b></label><br>
        <input type="checkbox" name="qualification[]" id="qualification5" value="MD"
        <?php
if (isset($_POST['qualification'])) {
    if (in_array("MD", $_POST['qualification'])) {
        echo "checked";
    }
}
?>><label for="qualification5"><b>MD</b></label><br>
        <input type="submit" value="submit" name="submit">
        <input type="reset" value="cancel" name="reset">
        <?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    echo "<hr>";
    echo "the name :" . $name . "<br>";
    echo "the gender:" . $gender . "<br>";
    echo "the qualification:<br>";
    foreach ($_POST['qualification'] as $key) {
        echo $key . "<br>";
    }
}
?>
    </form>
    </fieldset>
</body>
</html>

