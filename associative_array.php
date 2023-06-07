<h1> arrays associative</h1>

<?php
$me = array(
    'age' => 35,
    'season' => 'spring',
    'soccer' => true
);

echo '<pre>';
print_r($me);
echo $me['season'];
echo '</pre>';
?>

<h1>arrays multidimensional</h1>

<?php
$me = array(
    'age' => 35,
    'season' => 'spring',
    'soccer' => true
);

$me['hobbies'] = array('football', 'basket-ball', 'childrens', 'Becode');

$friend = array(
    'age' => 39,
    'season' => 'winter',
    'soccer' => true
);

$friend['hobbies'] = array('SAP', 'mangas', 'pencak','swimming' );

$me['friend'] = $friend;

echo '<pre>';
print_r($me);
//print_r($friend);
echo '</pre>';
?>