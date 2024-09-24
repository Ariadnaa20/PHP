<?php

$lloc = [
    ["Tokyo", "Japan", "Asia"],
    ["Mexico City", "Mexico", "North America"],
    ["New York City", "USA", "North America"],
    ["Mumbai", "India", "Asia"],
    ["Seoul", "Korea", "Asia"],
    ["Shanghai", "China", "Asia"],
    ["Chicago", "USA", "North America"],
    ["Buenos Aires", "Argentina", "South America"],
    ["Cairo", "Egypt", "Africa"],
    ["London", "UK", "Europe"]
];

$comptadorUSA = 0;
$comptadorNorthAmerica = 0;


foreach ($lloc as $ciutat) {
    if ($ciutat[1] == "USA") {
        $comptadorUSA++;
    }

    
    if ($ciutat[2] == "North America") {
        $comptadorNorthAmerica++;
    }
}

echo "El país 'USA' apareix: " . $comptadorUSA . " vegades. <br>";
echo "El continent 'North America apareix: " . $comptadorNorthAmerica . " vegades. <br>";
?>
