<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Which Movie Genre Would You Like To See?</h3>
<p> Format = Movie Name, Year of Release, Rating.</p>
<form action="movietheatre.php" method="get">
    <label for="genre">Genre: </label>
    <select name="genre" id="genre">
        <option value="Family" name="family">Family</option>
        <option value="Comedy" name="comedy">Comedy</option>
        <option value="Action" name="action">Action</option>
        <option value="Romance" name="romance">Romance</option>
        <option value="Horror" name="horror">Horror</option>
    </select>
    <input type="submit" name="formSubmit" value="Submit">
</form>
<br>

<?php
//Defining class
class Film{ //class
// variables
    public $film_name;
    public $director;
    public $year_of_release;
    public $rating;
    public $genre;
}

//Collection of films by categories
$film1 = new Film;  //object - instance of class
$film1->film_name = "The Invisible Man";
$film1->director = "Leigh Whannells";
$film1->year_of_release = 2020;
$film1->rating = 18;
$film1->genre = "Horror";

$film2 = new Film;
$film2->film_name = "Avengers : Endgame";
$film2->director = "Anthony Russo and Joe Russo";
$film2->year_of_release = 2019;
$film2->rating = 12;
$film2->genre = "Action";

$film3 = new Film;
$film3->film_name = "A Star Is Born";
$film3->director = "Bradley Cooper";
$film3->year_of_release = 2018;
$film3->rating = 15;
$film3->genre = "Romance";

$film4 = new Film;
$film4 -> film_name = "Mad Max : Fury Road";
$film4 -> director = "George Miller";
$film4 -> year_of_release = 2015;
$film4 -> rating = 15;
$film4 -> genre = "Action";

$film5 = new Film;
$film5 -> film_name = "Soul";
$film5 -> director = "Pete Docter";
$film5 -> year_of_release = 2020;
$film5 -> rating = "PG";
$film5 -> genre = "Family";

$film6 = new Film;
$film6 -> film_name = "Lady bird";
$film6 -> director = "Greta Gerwig";
$film6 -> year_of_release = 2018;
$film6 -> rating = 15;
$film6 -> genre = "Comedy";

$film7 = new Film;
$film7 -> film_name = "Finding Nemo";
$film7 -> director = "Andrew Stanton";
$film7 -> year_of_release = 2003;
$film7 -> rating = "U";
$film7 -> genre = "Family";

$film8 = new Film;
$film8 -> film_name = "Toystory 3";
$film8 -> director = "Lee Unkrich";
$film8 -> year_of_release = 2015;
$film8 -> rating = "U";
$film8 -> genre = "Family";

// if statement to show user the genre that they've chosen
$Select_genre=$_GET['genre'];
if ($Select_genre == 'Family') {
    echo "Film: " . $film5->film_name;
    echo "\n" . $film5 ->year_of_release;
    echo "\n" . $film5 -> rating . ". \n";
    echo "Film: " . $film7->film_name;
    echo "\n" . $film7->year_of_release;
    echo "\n" . $film7-> rating . ". \n";
    echo "Film: " . $film8->film_name . "\n";
    echo $film8->year_of_release . "\n";
    echo $film8->rating . ".\n";

}elseif ($Select_genre == 'Action') {
    echo "Film: " . $film2-> film_name;
    echo "\n" . $film2->year_of_release;
    echo "\n" . $film2-> rating . ". \n";
    echo "Film: " . $film4-> film_name;
    echo "\n" . $film4->year_of_release;
    echo "\n" . $film4->rating . ". \n";

}elseif ($Select_genre == 'Comedy') {
    echo "Film: " . $film6->film_name;
    echo "\n" . $film6->year_of_release;
    echo "\n" . $film6->rating . ".\n";

}elseif ($Select_genre == 'Romance') {
    echo "Film: " . $film3->film_name;
    echo "\n" . $film3->year_of_release;
    echo "\n" . $film3->rating . ".\n";
}elseif ($Select_genre == 'Horror') {
    echo "Film: " . $film1->film_name;
    echo "\n" . $film1->year_of_release;
    echo "\n" . $film1->rating . ".\n";
}
?>

</body>
</html>