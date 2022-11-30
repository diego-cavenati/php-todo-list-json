<?php

$tasks = [
    "Learn HTML",
    "Learn CSS",
    "Learn Bootstrap",
    "Learn JS",
    "Learn Vue",
    "Learn Vite",
    "Learn PHP"
];

header('Content-Type: application/json');
echo json_encode($tasks);
