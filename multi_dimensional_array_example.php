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


//challenge 3 from tutorial
$job_listings = [
    [
        "id" => "123",
        "job_title" => "Accountant",
        "company" => "EY",
        "contact_email" => "acc@ey.com",
        "contact_phone" => "1///",
        "skills" => ["Math", "Calculator"]
    ],
    [
        "id" => "124",
        "job_title" => "CTO",
        "company" => "Startup",
        "contact_email" => "startup@stup.com",
        "contact_phone" => "1///",
        "skills" => ["UX", "Leadership"]
    ],
    [
        "id" => "125",
        "job_title" => "Backend Engineer",
        "company" => "Google",
        "contact_email" => "goog@google.com",
        "contact_phone" => "1///",
        "skills" => ["Java", "Spring Boot", "MySQL"]
    ]
];
array_push($job_listings, [
    "id" => "126",
    "job_title" => "Frontend Engineer",
    "company" => "Google",
    "contact_email" => "goog@google.com",
    "contact_phone" => "1///",
    "skills" => ["React", "Javascript"]
])

//inside of html, you can have:
//<?= $job_listings[2]["skills"][0] 
?>