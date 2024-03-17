<!-- 2) Write PHP script to generate an XML code in the following format
<//?xml version="1.0" encoding="ISO-8859-1" ?>
<CATALOG>
<CD>
<TITLE>Empire Burlesque</TITLE>
<ARTIST>Bob Dylan</ARTIST>
<COUNTRY>USA</COUNTRY>
<COMPANY>Columbia</COMPANY>
<PRICE>10.90</PRICE>
<YEAR>1985</YEAR>
</CD>
</CATALOG>
Save the file with name “CD.xml”. -->
<?php 
error_reporting(0);
$dom=new DOMDocument("1.0","ISO-8859-1");
$root=$dom->createElement("CATALOG");
$dom->append($root);

$cd=$dom->createElement("CD");
$root->appendChild($cd);

$title=$dom->createElement("TITLE","Empire Burlesque");
$artist=$dom->createElement("ARTIST","Bob Dylan");
$country=$dom->createElement("COUNTRY","USA");
$company=$dom->createElement("COMPANY","Columbia");
$price=$dom->createElement("PRICE","10.90");
$year=$dom->createElement("YEAR","1985");

$cd->appendChild($title);
$cd->appendChild($artist);
$cd->appendChild($country);
$cd->appendChild($company);
$cd->appendChild($price);
$cd->appendChild($year);


echo"<xmp>{$dom->saveXML()}</xmp>";
$dom->save("CD.xml");
?>