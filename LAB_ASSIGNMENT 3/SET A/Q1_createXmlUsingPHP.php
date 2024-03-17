<!--1) Write a PHP script to create XML file named“Course.xml”
<Course>
<SYBBA CA>
<Studentname> .......</Studentname>
<Classname>......</Class name>
<percentage>....</percentage>
</SYBBA CA>
</Course>
Store the details of 5 students who are in SYBBACA.-->
<?php 
error_reporting(0);
//creating a DOM object
$dom=new DOMDocument("1.0","UTF-8");
//creating a course element and assign it to $course
$course=$dom->createElement("course");
//Appending the created course element to the document
$dom->appendChild($course);


//creating the child element BBACA of course element
$sybbaca=$dom->createElement("BBACA");
//appending the child element to the root(course) element
$course->appendChild($sybbaca);
//set the attribute to the child element
$sybbaca->setAttribute("id","1");
//creating the child elements of BBACA element
$name=$dom->createElement("StudentName","Rakesh");
$class=$dom->createElement("ClassName","S.Y.B.B.A.(C.A.)");
$per=$dom->createElement("percentage","89.76");
//appending the child elements to BBACA element
$sybbaca->appendChild($name);
$sybbaca->appendChild($class);
$sybbaca->appendChild($per);


//Above same process are carried out in below
$sybbaca=$dom->createElement("BBACA");
$course->appendChild($sybbaca);
$sybbaca->setAttribute("id","2");

$name=$dom->createElement("StudentName","Rohit");
$class=$dom->createElement("ClassName","T.Y.B.B.A.(C.A.)");
$per=$dom->createElement("percentage","79.76");

$sybbaca->appendChild($name);
$sybbaca->appendChild($class);
$sybbaca->appendChild($per);



$sybbaca=$dom->createElement("BBACA");
$course->appendChild($sybbaca);
$sybbaca->setAttribute("id","3");

$name=$dom->createElement("StudentName","Gopal");
$class=$dom->createElement("ClassName","S.Y.B.B.A.(C.A.)");
$per=$dom->createElement("percentage","85.59");

$sybbaca->appendChild($name);
$sybbaca->appendChild($class);
$sybbaca->appendChild($per);



$sybbaca=$dom->createElement("BBACA");
$course->appendChild($sybbaca);
$sybbaca->setAttribute("id","4");

$name=$dom->createElement("StudentName","Ganesh");
$class=$dom->createElement("ClassName","F.Y.B.B.A.(C.A.)");
$per=$dom->createElement("percentage","74.76");

$sybbaca->appendChild($name);
$sybbaca->appendChild($class);
$sybbaca->appendChild($per);



$sybbaca=$dom->createElement("BBACA");
$course->appendChild($sybbaca);
$sybbaca->setAttribute("id","5");

$name=$dom->createElement("StudentName","Ram");
$class=$dom->createElement("ClassName","F.Y.B.B.A.(C.A.)");
$per=$dom->createElement("percentage","70.79");

$sybbaca->appendChild($name);
$sybbaca->appendChild($class);
$sybbaca->appendChild($per);

//displaying the created xml file in php file
echo "<xmp>{$dom->saveXML()}</xmp>";
//saving the xml file with name course.xml
$dom->save("course.xml");
?>