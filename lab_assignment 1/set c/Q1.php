<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>perform operations as per choice:</h1>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <input type="radio" name="choice" id="choice" value="1"><b>Display details of all articles purchased.</b><br>
        <br>
        <input type="radio" name="choice" id="choice" value="2"><b>Display details of articles whose price exceeds 500.</b><br>
        <br>
        <input type="radio" name="choice" id="choice" value="3"><b>Display details of articles whose quantity exceeds 50.</b><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>
<?php
/*1) Write a PHP program to create a class article having article id, name, article qty, price.
Write menu driven program to perform following functions :( Use array of objects)
i) Display details of all articles purchased.
ii) Display details of articles whose price exceeds 500
iii) Display details of articles whose quantity exceeds 50*/
class Article
{
    public $articleId, $name, $articleQty, $price;
    private function __construct($articleId, $name, $articleQty, $price)
    {
        $this->articleId = $articleId;
        $this->name = $name;
        $this->articleQty = $articleQty;
        $this->price = $price;
    }

    public function display()
    {
        echo "Article id:" . $this->articleId . "<br>";
        echo "Article name:" . $this->name . "<br>";
        echo "Article Quantity:" . $this->articleQty . "<br>";
        echo "Article price:" . $this->price . "<br>";
    }
}

if (isset($_POST['submit'])) {

    $choice = $_POST['choice'];

    $article[0] = new Article(101, "computer", 60, 400);
    $article[1] = new Article(102, "purity", 40, 300);
    $article[2] = new Article(103, "richness", 50, 70);
    $article[3] = new Article(104, "books", 30, 700);
    $article[4] = new Article(105, "human", 45, 200);
    $article[5] = new Article(106, "science", 75, 100);
    $article[6] = new Article(107, "marketing", 80, 500);
    $article[7] = new Article(108, "company", 35, 450);
    $article[8] = new Article(109, "security", 65, 475);
    $article[9] = new Article(110, "world", 90, 800);

    switch ($choice) {
        case '1':
            echo "----Article Details----<br>";
            for ($i = 0; $i < count($article); $i++) {
                echo "<br>---------------------------<br>";
                echo"<pre>";
                $article[$i]->display();
                echo"</pre>";
            }
            break;

        case '2':
            echo "----Article Having price exceeds 500----<br>";
            for ($i = 0; $i < count($article); $i++) {
                if ($article[$i]->$price > 500) {
                    echo "<br>---------------------------<br>";
                    echo"<pre>";
                    $article[$i]->display();
                    echo"</pre>";
                }
            }
            break;

        case '3':
            echo "----Article Having price exceeds 50----<br>";
            for ($i = 0; $i < count($article); $i++) {
                if ($article[$i]->$articleQty > 50) {
                    echo "<br>---------------------------<br>";
                    echo"<pre>";
                    $article[$i]->display();
                    echo"</pre>";
                }
            }
            break;
    }
}

?>