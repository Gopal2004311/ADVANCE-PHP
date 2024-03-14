
<!--1) Write a PHP Script to display Server information in table format (Use$_SERVER).-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <caption>server information</caption>
        <tr>
            <th>PHP_SELF</th>
            <th>SERVER_NAME</th>
            <th>HTTP_HOST</th>
            <th>HTTP_REFERER</th>
            <th>HTTP_USER_AGENT</th>
            <th>SCRIPT_NAME</th>
        </tr>
        <tr>
            <td><?php echo $_SERVER['PHP_SELF'];?></td>
            <td><?php echo $_SERVER['SERVER_NAME'];?></td>
            <td><?php echo $_SERVER['HTTP_HOST'];?></td>
            <td><?php echo $_SERVER['HTTP_REFERER'];?></td>
            <td><?php echo $_SERVER['HTTP_USER_AGENT'];?></td>
            <td><?php echo $_SERVER['SCRIPT_NAME'];?></td>
        </tr>
    </table>
</body>
</html>
