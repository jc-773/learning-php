<?php
// //basic for loop
// for ($i = 0; $i < 10; $i++) {
//     echo $i . "<br/>";
// }

// echo "While loop below <br/>";

// //basic while loop
// $x = 1;
// while ($x <= 10) {
//     echo $x . "<br/>";
//     $x++;
// }

// //do while loop
// $i = 0;
// do {
//     echo $i . "<br/>";
//     $i++;
// } while ($i <= 10);

//nested loops (especially for multi-dimensional arrays)
// for ($i = 0; $i < 5; $i++) {
//     echo $i . "<br/>";
//     for ($j = 0; $j < 5; $j++) {
//         echo $j . "<br/>";
//     }
// }

// //looping through arrays
// $users = ["Tom", "Tim", "David", "George"];
// for ($i = 0; $i < count($users); $i++) {
//     echo $users[$i] . " ";
//     if ($users[$i] == "David") {
//         echo "On david...";
//     }
// }

// //looping through multi-demensional arrays
// $users_md = [
//     ["name" => "John", "email" => "John@email.com", "password" => "123abc", "salary" => 80000],
//     ["name" => "Tim", "email" => "Tim@email.com", "password" => "123abc", "salary" => 40000],
//     ["name" => "Sly", "email" => "Sly@email.com", "password" => "123abc", "salary" => 90000]
// ];
// $count = 0;
// for ($i = 0; $i < count($users_md); $i++) {
//     if ($users_md[$i]["salary"] > 50000) {
//         $count++;
//     }
// }
// echo $count;
