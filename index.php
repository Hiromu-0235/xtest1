<?php

   //卒業テストPHP１
    function fizzBuzz($number) {
        switch (true) {
            case $number % 3 === 0 && $number % 5 === 0 :
             return 'FizzBuzz';
             break;

            case $number % 3 === 0:
             return 'Fizz';
             break;

            case $number % 5 === 0:
             return 'Buzz';
             break;

            default:
            return $number;
            break;
        }
    }
    for ($i = 1; $i <= 100; $i++) {
        echo fizzBuzz($i).' ';
        echo '<br>';
    }

    echo '<hr><br>';

    //卒業テストPHP２
    for ($i = 1; $i <= 10000; $i++) {
        $point = 0;

        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j ==0) {
                $point += 1;
            }
        }

        if ($point == 2) {
            echo $i .'<br>';
        }
    }
    echo '<hr><br>';

    //卒業テストPHP３

    // 配列
    $friend1 = ['name' => 'suzuki', 'age' => 20];
    $friend2 = ['name' => 'yamada', 'age' => 21];
    $friend3 = ['name' => 'otsuka', 'age' => 22];
    $friend4 = ['name' => 'tanaka', 'age' => 23];

    // 二次元配列
    $all_friends = [$friend1, $friend2, $friend3, $friend4];

    echo $all_friends[0]['name'];

    echo '<br>';

    echo $all_friends[3]['age'];

    echo '<br>';

    $webService['sns'][0]['users'][0]['name'];

