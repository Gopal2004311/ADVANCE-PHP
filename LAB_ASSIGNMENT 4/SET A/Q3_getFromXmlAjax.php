<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Q3_getFromXmlAjax.css">
    <script src="Q3_getFromXmlAjax.js" defer></script>
</head>
<body>
    <div class="container">
    <div class="content">
        <div class="heading">
            <h2>Ajax to display Book details!!</h2>
        </div>
        <div class="form-content">
            <form>
                <div class="element">
                    <label for="book">Select book name:</label>
                    <select name="book" id="name">
                        <?php 
                        $xml=simplexml_load_file("Q3_getFromXmlAjax.xml");
                        $object=$xml->book;
                        foreach($object as $data)
                        {
                            echo"<option value='$data->title'>$data->title</option>";
                        }  
                        ?>
                    </select>
                </div>
                <div class="element">
                    <input type="submit" value="submit" name="submit" id="submit"> 
                </div>
            </form>
        </div>
    </div>
    <div class="output">
        <div class="head">
            <h2>Book Details!!</h2>
        </div>
        <div class="details" id="details"></div>
    </div>
    </div>
</body>
</html>