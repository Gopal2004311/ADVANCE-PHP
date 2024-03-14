<?php
/*2) Write a PHP program to accept two strings from user and check whether entered
strings are matching or not. (Use sticky form concept).*/
?>
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
            box-sizing: border-box;
        }

        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            padding: 1%;
            border-radius: 2px;
            box-shadow: 5px 5px lightblue;
        }

        legend{
            text-align: center;
            justify-content: center;
            align-items: center;
            color: blue;
            font-size: 25px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 500;
        }

        input{
            outline: none;
            display: block;
            width: 100%;
            padding: 1%;
        }

        input:hover{
            border: 2px solid lightblue;
        }
        .submit,.reset{
            width: 20%;
            display: inline-block;
            padding: 1%;
            font-size: 15px;
            margin-left: 10%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .reset{
            margin-left: 20%; 
        }
        .submit:hover{
            background-color: blue;
            color: white;
            cursor: pointer;
            transition: .5s;
            border-color: blue;
            padding: 1%;
            border-radius: 3px;
        }

        .reset:hover{
            background-color: red;
            color: white;
            cursor: pointer;
            transition: .5s;
            border-color: red;
            padding: 1%;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>String Comparison!!</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="str1"><b>Enter First String:</b></label>
    <input type="text" name="str1" id="str1" placeholder="Enter first string here..." value="<?php if(isset($_POST['str1'])){echo$_POST['str1'];}?>"><br>
    <label for="str2"><b>Enter Second String:</b></label>
    <input type="text" name="str2" id="str2" placeholder="Enter second string here..." value="<?php if(isset($_POST['str2'])){echo$_POST['str2'];}?>"><br>
    <input type="submit" value="submit" name="submit" class="submit">
    <input type="reset" value="cancel" name="reset" class="reset">
    </form>
    </fieldset>
</body>
</html>

<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
    $str1=$_POST['str1'];
    $str2=$_POST['str2'];
    if(strcmp($str1,$str2)==0)
    {
        echo"<script>alert('Both strings are equal!!');</script>";
    }else{
        echo"<script>alert('strings are not equal!!');</script>";
    }
}

?>