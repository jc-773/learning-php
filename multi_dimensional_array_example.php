/*
A very simple example of creating a multi-dimensional array and accessing a specific element
*/

<?php
//create a md array
$user = [
    ["name" => "John", "email" => "John@email.com", "password" => "123abc"],
    ["name" => "Tim", "email" => "Tim@email.com", "password" => "123abc"],
    ["name" => "Sly", "email" => "Sly@email.com", "password" => "123abc"]
];

//print the 2 indexed user's email
echo $user[2]["email"];

//add a user to the md array
$user[] = ["name" => "Jarvis", "email" => "Jarvis@email.com", "password" => "123abc"];

//print the third indexed user
$output = $user[3];
?>