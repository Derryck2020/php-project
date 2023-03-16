<?php
    // $name = 'Derryck';
    // $age = 31;
    // $school = ' Pentecost ';
    // $schoolLastName = 'Peparatory';
    // $firstAnswer = 'English';

    // echo $name;

    // define('LOCATION', 'India');

    // echo strlen($name);
    // echo strtoupper($name);
    // echo str_replace('r', 'b', $name);

    // $num1 = 40;
    // $num2 = 2;

    // echo $num1 / $num2 ** 2;

    $peopleOne = ['Ben', 'kate', 'bigman'];
    // print_r ($peopleOne);

    $ages = [19, 21, 10];
    $ages[2] = 15;
    // print_r($ages);
    $ages [] = 30;
    // print_r($ages);

    $players = [
        ['beckham', 'david', 'left-footer', 35],
        ['sergio', 'ramos', 'right-footer', 29],
        ['conte', 'antonio', 'dual', 24]
    ];
    // print_r($players)
    // print_r($players[1][2])

    $starPlayers = [
        ['fname' => 'beckham', 'surname' => 'david', 'footer' => 'left-footer', 'age' => 35],
        ['fname' => 'sergio', 'surname' => 'ramos', 'footer' => 'right-footer', 'age' => 29],
        ['fname' =>'conte', 'surname' => 'antonio', 'footer' => 'dual', 'age' => 24]
    ];
    // print_r($starPlayers);
    // echo count($starPlayers);

    $starPlayers[] = ['fname' =>'david', 'surname' => 'alaba', 'footer' => 'right-footer', 'age' => 31];
    // print_r($starPlayers);
    // echo count($starPlayers);

    //Loops

    $colors = ['white', 'green', 'indigo', 'yellow', 'red'];

    // for ($i = 0; $i < count($colors); $i++){
    //     echo $colors[$i] . '<br/>';
    // }

    // foreach ($colors as $color) {
    //     echo $color. '<br/>';
    // }

    // foreach($starPlayers as $starPlayer){
    //     echo $starPlayer['fname'] . ' - ' . $starPlayer['age'];
    //     echo '<br />';
    // }

    $products = [
        ['name' => 'pen', 'price' => 18,],
        ['name' => 'pencil', 'price' => 15],
        ['name' => 'ruler', 'price' => 20,],
        ['name' => 'eraser', 'price' => 9,]
    ];
    // print_r($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Tutorials</title>
</head>
<body>

    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) { ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>$<?php echo $product['price']; ?></p>

        <?php } ?>
    </ul>





</body>
</html>