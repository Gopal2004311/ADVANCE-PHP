<!--1) Write a AJAX program to display the selected course information from the list given in XML 
file and show the following output--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="style.css">
    <script src="Q1_displayCourseFromXml.js" defer></script>
</head>
<body>
    <div class="content">
        <div class="heading">
            <h2>Display Course Details !!</h2>
        </div>
        <div class="form-content">
            <form>
                <div class="element">
                    <label for="select">Select Course:</label>
                    <select name="select" id="course">
                        <option value="">Select course</option>
                        <?php 
                        $xml=simplexml_load_file("Q1_fetchCourseFromXml.xml");
                        $data=$xml->course;
                        foreach($data as $value)
                        {
                            echo"<option value='$value->name'>$value->name</option>";
                        } 
                        ?>
                    </select>
                </div>
                <div class="element">
                    <input type="submit" value="submit" id="submit" name="submit">
                </div>
            </form>
        </div>
        <div class="output-container">
            <div class="head">
                <h3>Course info will be listed here...</h3>
            </div>
            <div id="output"></div>
        </div>
    </div>
</body>
</html>