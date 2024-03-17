<!-- 3) Create a XML file which gives details of movies available in “Mayanagari CD Store” from 
following categories
a) Classical
b) Action
c) Horror
Elements in each category are in the following format
<Category>
<MovieName> ----</MovieName>
<ReleaseYear> ----</ReleaseYear>
</Category>
Save the file with name “movies.xml”. -->
<?php 
error_reporting(0);
$dom=new DOMDocument("1.0","UTF-8");
$root=$dom->createElement("MayanagariCDStore");
$dom->append($root);

$classical=$dom->createElement("ClassicalMovie");
$root->appendChild($classical);

$movie=$dom->createElement("Movie");
$classical->appendChild($movie);

$name=$dom->createElement("MovieName","Hathi mere sathi");
$year=$dom->createElement("ReleaseYear","1971");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$classical->appendChild($movie);

$name=$dom->createElement("MovieName","Abhimaan");
$year=$dom->createElement("ReleaseYear","1973");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$classical->appendChild($movie);

$name=$dom->createElement("MovieName","Anand");
$year=$dom->createElement("ReleaseYear","1971");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$classical->appendChild($movie);

$name=$dom->createElement("MovieName","sholay");
$year=$dom->createElement("ReleaseYear","1975");
$movie->appendChild($name);
$movie->appendChild($year);




$Action=$dom->createElement("ActionMovie");
$root->appendChild($Action);

$movie=$dom->createElement("Movie");
$Action->appendChild($movie);

$name=$dom->createElement("MovieName","Pathan");
$year=$dom->createElement("ReleaseYear","2023");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$Action->appendChild($movie);

$name=$dom->createElement("MovieName","Wanted");
$year=$dom->createElement("ReleaseYear","2009");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$Action->appendChild($movie);

$name=$dom->createElement("MovieName","Tiger 3");
$year=$dom->createElement("ReleaseYear","2023");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$Action->appendChild($movie);

$name=$dom->createElement("MovieName","Singham");
$year=$dom->createElement("ReleaseYear","2011");
$movie->appendChild($name);
$movie->appendChild($year);




$horror=$dom->createElement("HorrorMovie");
$root->appendChild($horror);

$movie=$dom->createElement("Movie");
$horror->appendChild($movie);

$name=$dom->createElement("MovieName","shapit");
$year=$dom->createElement("ReleaseYear","2010");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$horror->appendChild($movie);

$name=$dom->createElement("MovieName","The house next door");
$year=$dom->createElement("ReleaseYear","2017");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$horror->appendChild($movie);

$name=$dom->createElement("MovieName","creature 3D");
$year=$dom->createElement("ReleaseYear","2014");
$movie->appendChild($name);
$movie->appendChild($year);

$movie=$dom->createElement("Movie");
$horror->appendChild($movie);

$name=$dom->createElement("MovieName","Krishna Cottage");
$year=$dom->createElement("ReleaseYear","2004");
$movie->appendChild($name);
$movie->appendChild($year);


echo"<xmp>{$dom->saveXML()}</xmp>";
$dom->save("movies.xml");
?>