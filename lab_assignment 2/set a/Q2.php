<!--2) Write PHP program to create student registration form and display student information.
(Use sticky form concept).-->

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
        }

        body{
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: auto;
            width: 100%;
            background-color: white;
        }

        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            border: 1px solid black;
            border-radius: 4px;
            box-shadow:3px 3px black;
            padding: 2%;
        }

        legend{
            text-align: center;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
            color: blue;
        }

        input,select{
            display: block;
            outline: none;
            width: 100%;
            padding: 1%;
        }

        input[type="submit"],input[type="reset"]
        {
            display: inline-block;
            width: 40%;
            margin-left: 5%;
        }

        input[type="submit"]:hover{
            border: none;
            background-color: blue;
            color: white;
            cursor: pointer;
            border-radius: 1px;
            padding: 1%;
            transition: 1s;
        }

        input[type="reset"]:hover{
            border: none;
            padding: 1%;
            cursor: pointer;
            background-color: red;
            color: white;
            border-radius: 1px;
            transition: 1s;
        }

        input:hover{
            border: 2px solid lightblue;
            transition: .5s;
        }

        select:hover{
            border: 2px solid lightblue;
            transition: .5s;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>!!Student information!!</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="stud_id"><b>Enter student id:</b></label>
    <input type="number" name="stud_id" id="stud_id" value="<?php if (isset($_POST['stud_id'])) {echo $_POST['stud_id'];}?>"><br>
    <label for="name"><b>Enter student name:</b></label>
    <input type="text" name="name" id="name" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>"><br>
    <label for="adr"><b>Enter student address:</b></label>
    <input type="text" name="adr" id="adr" value="<?php if (isset($_POST['adr'])) {echo $_POST['adr'];}?>"><br>
    <label for="birth"><b>Select date of birth:</b></label>
    <input type="date" name="birth" id="birth" value="<?php if (isset($_POST['birth'])) {echo $_POST['birth'];}?>"><br>
    <label for="class1"><b>Select student class:</b></label>
    <select name="class1" id="class1" value="<?php if (isset($_POST['class1'])) {echo $_POST['class1'];}?>">
        <option value="F.Y.B.B.A.(C.A.)">F.Y.B.B.A.(C.A.)</option>
        <option value="S.Y.B.B.A.(C.A.)">S.Y.B.B.A.(C.A.)</option>
        <option value="T.Y.B.B.A.(C.A.)">T.Y.B.B.A.(C.A.)</option>
        <option value="F.Y.B.Com">F.Y.B.Com</option>
        <option value="S.Y.B.Com">S.Y.B.Com</option>
        <option value="T.Y.B.Com">T.Y.B.Com</option>
        <option value="M.Com 1">M.Com 1</option>
        <option value="M.Com 2">M.Com 2</option>
    </select><br>
    <label for="hobbies"><b>Select Hobbies:</b></label>
    <select name="hobbies[]" id="hobbies" multiple>
        <option value="Dance">Dance</option>
        <option value="Singing">Singing</option>
        <option value="Writing">Writing</option>
        <option value="Reading">Reading</option>
        <option value="Learning">Learning</option>
        <option value="Speaking">Speaking</option>
    </select><br>
    <label for="cast"><b>Select cast:</b></label>
    <select name="cast" id="cast">
        <option value="OBC">OBC</option>
        <option value="ST">ST</option>
        <option value="SC">SC</option>
        <option value="NT">NT</option>
        <option value="open">open</option>
        <option id="other1">other</option>
    </select><br>
    <input type="submit" value="submit" name="submit">
    <input type="reset" value="reset" name="reset">
    </form>
    </fieldset>
</body>
</html>

<?php

error_reporting(0);
if (isset($_POST['submit'])) {
   // echo"<script>alert('";
    echo "The id:" . $_POST['stud_id'] . "<br>";
    echo "The name:" . $_POST['name'] . "<br>";
    echo "The Address:" . $_POST['adr'] . "<br>";
    echo "The Birth date:" . $_POST['birth'] . "<br>";
    echo "The class:" . $_POST['class1'] . "<br>";
    echo "The cast:" . $_POST['cast'] . "<br>";
    echo "The Hobbies:";
    foreach ($_POST['hobbies'] as $key) {
        echo $key . ",";
    }
   // echo"');</script>";
}

?>