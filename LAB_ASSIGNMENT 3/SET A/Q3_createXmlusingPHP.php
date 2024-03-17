<!----3) Write PHP script to generate an XML code in the following format
<//?xml version="1.0" encoding="ISO-8859-1" ?>
<CATALOG>
<PLANT>
<BOTANICAL>Sanguinaria canadensis</BOTANICAL>
<ZONE>4</ZONE>
<LIGHT>Mostly Shady</LIGHT>
<PRICE>$2.44</PRICE>
<AVAILABILITY>031599</AVAILABILITY>
</PLANT>
</CATALOG>
Save the file with name “plant.xml”.---->
<?php 
error_reporting(0);
$dom=new DOMDocument("1.0","ISO-8859-1");
$root=$dom->createElement("CATALOG");
$dom->append($root);

$plant=$dom->createElement("PLANT");
$root->appendChild($plant);

$b=$dom->createElement("BOTANICAL","Sanguinaria canadensis");
$zone=$dom->createElement("ZONE","4");
$light=$dom->createElement("LIGHT","Mostly Shady");
$price=$dom->createElement("PRICE","$2.44");
$available=$dom->createElement("AVAILABILITY","031599");

$plant->appendChild($b);
$plant->appendChild($zone);
$plant->appendChild($light);
$plant->appendChild($price);
$plant->appendChild($available);

echo"<xmp>{$dom->saveXML()}</xmp>";
$dom->save("plant.xml");

?>