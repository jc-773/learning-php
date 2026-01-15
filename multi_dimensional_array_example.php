/*
A very simple example of creating a multi-dimensional array and accessing a specific element
*/

<?php
$user = [
    ["name" => "John", "email" => "John@email.com", "password" => "123abc"],
    ["name" => "Tim", "email" => "Tim@email.com", "password" => "123abc"],
    ["name" => "Sly", "email" => "Sly@email.com", "password" => "123abc"]
];

echo $user[2]["email"];
?>