<?php

// ========= Indexed Array =================
// $sinhviens = array("Tung", "Huy", "Giang");
// $sinhviens = ["Tung", "Huy", "Giang"];
// for($i = 0; $i < count($sinhviens); $i++) {
//     print_r($sinhviens[$i]);
// }
// foreach($sinhviens as $key => $sv) {
//     // print_r($sv.);
//     echo "$sv"."-".$key."<br>";
// }

// echo '<pre>';

// $fruits = ['apple', 'banana', 'orange'];

// print_r($fruits);
// echo $fruits[0].PHP_EOL;

// foreach ($fruits as $key => $value) {
//     echo $key . ' - ' . $value . PHP_EOL;
// }

// print_r($fruits);

// echo $fruits[1];
//  ========= Thêm phần tử vào mảng ========
// $fruits[] = 'Lemon';

// print_r($fruits);

// // =========== Association array ==========
// $student = ['Tuva9', 32, 'HN'];

$students = [
    'BH00873' => [
        'name' => 'Son',
        'age' => 20,
        'address' => 'HaNoi'
    ],
    'BH00869' => [
        'name' => "Ly",
        'age' => 20,
        'adress' => "VinhPhuc",
    ]
];

foreach($students as $key => $sv) {
    echo $key."-".$sv["name"].$sv['age']."<br>";
}

function printStudents() {
    
}

// foreach ($student as $key => $value) {
//     echo $key . ' - ' . $value . PHP_EOL;
// }

// print_r($student);

// // echo $student['name'] . PHP_EOL;
// // echo $student['age'] . PHP_EOL;
// // echo $student['address'] . PHP_EOL;


// $array = [
//     [1, 2, 2],

//     'student' => ['name' => 'TUVA9', 'age' => 32, 'address' => 'HN'],

//     ['ahihi' => [1, 2], 'kk' => 'ahihi', 'keke' => [0, 'lolo']]
// ];


foreach($array as $key => $value) {
    // print_r($value);
    echo $key.PHP_EOL;
    foreach($value as $key => $value2) {
        echo "KEY2: ", $key.PHP_EOL;
        // print_r($value2);
    }
    // foreach($value as $key2 => $value2) {
    //     print_r($value2);
    // }
}
// $array[1]['keke'][] = 'okok';
// $array[1]['keke'][] = [123, 567];

// $array[1]['keke']['student'] = $student;

// print_r($array[1]['keke']);

// foreach ($array as $key => $value) {
//     echo "KEY: $key" . PHP_EOL;

//     foreach ($value as $key2 => $value2) {
//         echo "\n KEY2: $key2" . PHP_EOL;

//         print_r($value2);
//     }
// }