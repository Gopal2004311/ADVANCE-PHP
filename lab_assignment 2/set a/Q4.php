<!--4) Write PHP program to select list of subjects from list box and display selected subject on
information. (Use sticky multi-valued parameter)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
            background-repeat: no-repeat;
        }

        legend{
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: blue;
        }

        fieldset{
            border-radius: 2px;
            margin-left: 25%;
            margin-right: 25%;
            padding: 2%;
            justify-content: center;
            box-shadow: 10px 10px lightblue;
        }

        select{
            display: block;
            width: 100%;
            outline: none;
        }

        input{
            padding-left: 2%;
            padding-right: 2%;
            width: 25%;
            cursor: pointer;
        }

        input:hover{
            background-color: blue;
            color: white;
            border:blue;
           transition: .5s;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>
            !Subject Details!
        </legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="subject"><b>Select subjects:</b></label>
    <select name="subject[]" id="subject" multiple>
    <option value="php">php</option>
    <option value="data structure">data structure</option>
    <option value="advance php">advance php</option>
    <option value="networking">networking</option>
    <option value="software engineering">software engineering</option>
    <option value="digital marketing">digital marketing</option>
    <option value="C++">C++</option>
    <option value="big data">big data</option>
    </select><br>
    <input type="submit" value="submit" name="submit">
    </form>
    </fieldset>
</body>
</html>

<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
    echo"The selected subject are:<br>";
    foreach ($_POST['subject'] as $key) {
        echo$key."<br>";
    }
}

?>