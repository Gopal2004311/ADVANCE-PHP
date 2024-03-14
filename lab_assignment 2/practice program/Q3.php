<?php /*3) Write PHP program to create student registration form and display student information. 
(Use sticky form concept).*/?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #submit,
    #reset {
        display: inline-block;
        width: 35%;
        margin-left: 25px;
        margin-right: 25px;
    }

    #submit:hover{
        background-color: rgb(5, 1, 250);
        color: white;
        transition: 0.5s;
        border-radius: 2px;
        cursor: pointer;
    }

    #reset:hover{
        background-color: red;
        color: white;
        transition: 0.5s;
        border-radius: 2px;
        cursor: pointer;
    }
    input,
    select {
        width: 100%;
        display: block;
        outline: none;
        padding-top: 1%;
        padding-bottom: 1%;
    }

    fieldset {
        margin-left: 25%;
        margin-right: 25%;
        border-radius: 2px;
        box-shadow: 2px 2px 2px black;
    }

    legend{
        text-align: center;
        justify-content: center;
        align-items: center;
        font-size: 150%;
        font-weight: 400;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: salmon;
    }
</style>

<body>
    <fieldset>
        <legend>!!Student Registration!!</legend>
        <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
            <label for="id"><b>Enter your id:</b></label>
            <input type="number" name="id" id="id" value="<?php if(isset($_POST['id'])){echo$_POST['id'];}?>"><br>
            <label for="name"><b>Enter your name:</b></label>
            <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])){echo$_POST['name'];}?>"><br>
            <label for="birth"><b>Select birth date:</b></label>
            <input type="date" name="birth" id="birth" value="<?php if(isset($_POST['birth'])){echo$_POST['birth'];}?>"><br>
            <label for="adr"><b>Enter your Address:</b></label>
            <input type="text" name="adr" id="adr" value="<?php if(isset($_POST['adr'])){echo$_POST['adr'];}?>"><br>
            <label for="mobile"><b>Enter your mobile no.:</b></label>
            <input type="number" name="mobile" id="mobile" value="<?php if(isset($_POST['mobile'])){echo$_POST['mobile'];}?>"><br>
            <label for="class1"><b>Select your class:</b></label>
            <select name="class1" id="class1" value="<?php if(isset($_POST['class1'])){echo$_POST['class1'];}?>">
                <option value="F.Y.B.B.A.(C.A.)">F.Y.B.B.A.(C.A.)</option>
                <option value="S.Y.B.B.A.(C.A.)">S.Y.B.B.A.(C.A.)</option>
                <option value="T.Y.B.B.A.(C.A.)">T.Y.B.B.A.(C.A.)</option>
                <option value="F.Y.B.com">F.Y.B.com</option>
                <option value="S.Y.B.com">S.Y.B.com</option>
                <option value="T.Y.B.com">T.Y.B.com</option>
                <option value="M.com 1">M.com 1</option>
                <option value="M.com 2">M.com 2</option>
                <option id="other">other</option>
            </select><br>
         <!--   <input type="text" name="class1" id="class2" class="class2" placeholder="Enter your class.."><br><br>-->
            <input type="submit" value="submit" name="submit" id="submit">
            <input type="reset" value="reset" name="reset" id="reset">
        </form>
    </fieldset>
</body>

</html>

<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
    echo"student id:".$_POST['id']."<br>";
    echo"student name:".$_POST['name']."<br>";
    echo"student birth date:".$_POST['birth']."<br>";
    echo"student address:".$_POST['adr']."<br>";
    echo"student mobile no.:".$_POST['mobile']."<br>";
    echo"student class:".$_POST['class1']."<br>";
}
?>