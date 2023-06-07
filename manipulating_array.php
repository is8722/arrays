<h1>Manipulating arrays</h1>
<?php
$me = array(
    'age' => 35,
    'season' => 'spring',
    'soccer' => true
);
$me['hobbies'] = array('football', 'basket-ball', 'childrens', 'Becode');
$me['hobbies'][] = 'gaming';
$me['name'] = ['Ismaël', 'Anas'];

$friend = array(
    'age' => 39,
    'season' => 'winter',
    'soccer' => true
);
$friend['hobbies'] = array('SAP', 'mangas', 'pencak', 'swimming');

echo '<pre>';
$arr_replacement = $me['name'] = array('Ismaël', 'Mesmoudi');
print_r($me);
array_replace($me['name'], $arr_replacement);
echo "<br>";
echo "Le nombre total d'hobbies pour moi est " . count($me['hobbies']) . ".";
echo "<br>";
echo "Le nombre total d'hobbies de mon ami est " . count($friend['hobbies']) . ".";
echo "<br>";
$hobbiesMe = count($me['hobbies']);
$hobbiesFriend = count($friend['hobbies']);
$total = $hobbiesFriend + $hobbiesMe;
echo "Le nombre total d'hobbies à nous deux est égal à " . $total . ".";
echo '</pre>';
?>

<h1>Créer un array à partir d'un autre</h1>
<?php
$me = array(
    'age' => 35,
    'season' => 'summer',
    'soccer' => false
);
$me['hobbies'] = array('football', 'basket-ball', 'childrens', 'Becode');

$soulmate = array(
    'age' => 39,
    'season' => 'winter',
    'soccer' => true
);
$soulmate['hobbies'] = array('football', 'basket-ball', 'childrens', 'Becode');

echo "<pre>";
print_r($me);
print_r($soulmate);

echo "////////////////////////////////////////////////////// Intersection des hobbies en commun";
echo "<br>";

$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

print_r($possible_hobbies_via_intersection);
echo "////////////////////////////////////////////////////// Merge des hobbies en commun";
echo "<br>";
print_r($possible_hobbies_via_merge);

echo "</pre>";
?>