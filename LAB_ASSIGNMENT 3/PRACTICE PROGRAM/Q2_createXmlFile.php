<!-- 2) Write a script to create “Company.xml” file with multiple elements as shown below:
<CemployeeTeam>
<Team Name=”Red”>
<Ename> </ Ename>
<Eexperience> </ Eexperience >
<Emobno> </ Emobno>
<Eaddress> </Eaddress>
</Team>
</CemployeeTeam> -->
<?php 
error_reporting(0);
//creating DOM object
$dom=new DOMDocument("1.0");
//creating an root element
$employee=$dom->createElement("employeeTeam");
//creating the child of root
$team=$dom->createElement("Team");
//appending root element to document
$dom->appendChild($employee);
//appending child element to root
$employee->appendChild($team);
//set the attribute to child element team
$team->setAttribute("Name","Red");
//creating sub child's of team element
$eName=$dom->createElement("Ename","Rakesh");
$exp=$dom->createElement("Eexperience","3 years");
$mobile=$dom->createElement("Emobno","8956432561");
$adr=$dom->createElement("Eaddress","shrirampur");
//appending sub-child elements to team element
$team->appendChild($eName);
$team->appendChild($exp);
$team->appendChild($mobile);
$team->appendChild($adr);
//saving the document with file name
echo"<xmp>{$dom->saveXML()}</xmp>";
$dom->save("Q2_xmlCreateUsingPhp.xml");