<!---3) Write a PHP script for the following: Design a form to accept a number from the user. 
Perform the operations and show the results.
• Check whether number is palindrome or not.
• Reverse the number using 
recursions-->
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
            box-shadow: 1px 1px 7px gray;
            border-radius: 4px;
            padding: 1%;
            border:none;
        }

        legend{
            background: white;
        }

        input{
            display: block;
            outline: none;
            width: 100%;
            padding: 1%;
        }

        input:hover{
            border: 2px solid lightblue;
            transition: .5s;

        }
        #choice,#choice1{
           display: flex; 
           margin-top: -13px;
        }

        input[type="submit"],input[type="reset"]{
            padding-left: 2%;
            padding-right: 2%;
            margin: 1%;
            display: inline-block;
            width: 25%;
        }

        input[type="submit"]:hover{
            background-color: blue;
            color:white;
            border: 1px solid blue;
            border-radius: 2px;
            transition: .5s;
            cursor: pointer;

        }
        input[type="reset"]:hover{
            background-color: red;
            border: 1px solid red;
            border-radius: 2px;
            transition: .5s;
            color: white;
            cursor: pointer;
        }
        legend{
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: blue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>!!Performing Operations!!</legend>
        <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="num"><b>Enter a number:</b></label>
        <input type="number" name="num" id="num"><br>
        <label for="choice"><b>check number is palindrome or not!</b></label>
        <input type="radio" name="choice" id="choice" value="palindrome"><br>
        <label for="choice"><b>reverse a number using recursion!</b></label>
        <input type="radio" name="choice" id="choice1" value="reverse"><br>
        <input type="submit" value="submit" name="submit">
        <input type="reset" name="reset" id="reset">
    </form>

    </fieldset>
</body>
</html>

<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    $ch=$_POST['choice'];
    switch($ch)
    {
        case 'palindrome':
            $n=strrev($num);
            if($n==$num)
            {
                echo"<script>alert('The $num is palindrome!!');</script>";
            }else{
                echo"<script>alert('The $num is not a palindrome!!');</script>";
            }
            break;
        case 'reverse':
            $n=strrev($num);
            echo"<script>alert('The reverse number of $num is $n..');</script>";
            break;
    }
}
?>