<!-- 1) Write a script to create “cricket.xml” file with multiple elements as shown below:
<CricketTeam>
<Team country=”India”>
<player> </player>
<runs> </runs>
<wicket> </wicket>
</Team>
</CricketTeam>
Write a script to add multiple elements in “cricket.xml” file of category, country=”Australia” -->
<?php 
error_reporting(0);
$dom=new DOMDocument("1.0","UTF-8");
$root=$dom->createElement("CricketTeam");
$dom->append($root);

$team=$dom->createElement("Team");
$team->setAttribute("country","India");
$root->appendChild($team);

$player=$dom->createElement("player","Virat Kohli");
$wicket=$dom->createElement("wicket","300");
$run=$dom->createElement("runs","400");

$team->appendChild($player);
$team->appendChild($wicket);
$team->appendChild($run);



$team=$dom->createElement("Team");
$team->setAttribute("country","Australia");
$root->appendChild($team);

$player=$dom->createElement("player","Sean Abbott");
$wicket=$dom->createElement("wicket","400");
$run=$dom->createElement("runs","500");

$team->appendChild($player);
$team->appendChild($wicket);
$team->appendChild($run);


$team=$dom->createElement("Team");
$team->setAttribute("country","Pakistan");
$root->appendChild($team);

$player=$dom->createElement("player","Agha salman");
$wicket=$dom->createElement("wicket","200");
$run=$dom->createElement("runs","250");

$team->appendChild($player);
$team->appendChild($wicket);
$team->appendChild($run);

$team=$dom->createElement("Team");
$team->setAttribute("country","England");
$root->appendChild($team);

$player=$dom->createElement("player","David Worner");
$wicket=$dom->createElement("wicket","400");
$run=$dom->createElement("runs","450");

$team->appendChild($player);
$team->appendChild($wicket);
$team->appendChild($run);

echo"<xmp>{$dom->saveXML()}</xmp>";
$dom->save("player.xml");
?>