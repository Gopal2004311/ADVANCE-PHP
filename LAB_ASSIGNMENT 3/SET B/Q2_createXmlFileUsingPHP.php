<!-- 2) Write a script to create “breakfast.xml” file with multiple elements as shown below:
<breakfast_menu>
<food>
<name>French Fries</name>
<price>Rs45</price>
<description>Young youths are very much interested to eat it </description>
<calories>650</calories>
</food>
</breakfast_menu>
Write a script to add multiple elements in “breakfast.xml” file of category, Juice -->
<?php 
error_reporting(0);
$dom=new DOMDocument("1.0","UTF-8");
$root=$dom->createElement("breakfast_menu");
$dom->append($root);

$food=$dom->createElement("food");
$root->appendChild($food);
$food->setAttribute("category","fastFood");

$name=$dom->createElement("name","French Fries");
$price=$dom->createElement("price","Rs45");
$desc=$dom->createElement("description","Young youths are very much interested to eat it");
$calory=$dom->createElement("calories","650");

$food->appendChild($name);
$food->appendChild($price);
$food->appendChild($desc);
$food->appendChild($calory);



$food=$dom->createElement("food");
$root->appendChild($food);
$food->setAttribute("category","juice");

$name=$dom->createElement("name","orange");
$price=$dom->createElement("price","Rs30");
$desc=$dom->createElement("description","Make body more stronger");
$calory=$dom->createElement("calories","700");

$food->appendChild($name);
$food->appendChild($price);
$food->appendChild($desc);
$food->appendChild($calory);



$food=$dom->createElement("food");
$root->appendChild($food);
$food->setAttribute("category","juice");

$name=$dom->createElement("name","Apple");
$price=$dom->createElement("price","Rs40");
$desc=$dom->createElement("description","Refresh the body and mind");
$calory=$dom->createElement("calories","650");

$food->appendChild($name);
$food->appendChild($price);
$food->appendChild($desc);
$food->appendChild($calory);



$food=$dom->createElement("food");
$root->appendChild($food);
$food->setAttribute("category","fastFood");

$name=$dom->createElement("name","burger");
$price=$dom->createElement("price","Rs60");
$desc=$dom->createElement("description","Make the life enjoyable");
$calory=$dom->createElement("calories","400");

$food->appendChild($name);
$food->appendChild($price);
$food->appendChild($desc);
$food->appendChild($calory);

echo"<xmp>{$dom->saveXML()}</xmp>";
$dom->save("breakfast.xml");
?>