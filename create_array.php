<h2>Array countries</h2>
<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
array_push($countries, 'England');
echo '<pre>';
print_r($countries);
var_dump($countries);
?>

<h2>Array family</h2>
<?php
$family = array('Faïza', 'Nassim', 'Issra', 'Faouzia', 'Samir', 'Malika');

print_r($family);
var_dump($family);
echo "<br>";

?>

<h2>Array favourite recipes </h2>
<?php
$recipes = array('Hamburger', 'Pizza', 'Lasagnes', 'Crêpes');
print_r($recipes);
echo "<br>";
var_dump($recipes);
?>

<h2>Array favourite movies</h2>
<?php
$movies = array('Aviator', 'Inception', 'The Revenant', 'Django');
echo " " . $movies[1];
echo "<br>";
var_dump($movies);
?>