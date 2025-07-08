 <?php
/*
function arraysum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}


echo arraysum([10, 12, 13]);
*/



$age = 18;


if($age >= 18){
    echo "You can vote";
}else{
    echo "You cant vote";
}

echo "<br>";
echo "<br>";





$first_name = "Ardi";
$last_name = "Tahiri";

echo "Hello $first_name  $last_name";

echo "<br>";
echo "<br>";





$employees = [
    [
        "name" => "employe1",
        "age" => 30,
        "position" => "front-end"
    ],
    [
        "name" => "employe2",
        "age" => 45,
        "position" => "back-end"
    ],
    [
        "name" => "employe3",
        "age" => 28,
        "position" => "full-stack"
    ]
];


foreach($employees as $employee){
    echo "Name: " . $employee["name"] . "\n";
    echo "Age: " . $employee["age"] . "\n";
    echo "Position: " . $employee["position"] . "\n";
    echo "<br>";
}

?>


