<?php

// $soluong = -1;

// if ($soluong > 0 && $soluong < 10) {
//     echo "Khong giam gia";
// } elseif($soluong >= 10 && $soluong <=20) {
//     echo "Giam 5%";
// } else {
//     echo "Giam 10%";
// }

// if($soluong < 0) {
//     echo "Khong hop le";
// } elseif ($soluong < 10) {
//     echo "Khong giam gia";
// } elseif ($soluong <= 20) {
//     echo "Giam 5%";
// } else {
//     echo "Giam 10%";
// }

//  =========== Vòng lặp ===============
// FOR

// FOREACH
$sinhviens = ["Dũng", "Vinh", "Mạnh Dũng" ,"Tùng", "Hoàng"];

// for($i = 0; $i < count($sinhviens); $i++) {
//     echo $sinhviens[$i]."<br>";
// }

foreach($sinhviens as $index => $sinhvien) {
    echo $index."-".$sinhvien."<br>";
}