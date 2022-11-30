<?php

// $tasks = [
//     "Learn HTML",
//     "Learn CSS",
//     "Learn Bootstrap",
//     "Learn JS",
//     "Learn Vue",
//     "Learn Vite",
//     "Learn PHP"
// ];

$tasks_string = file_get_contents('./assets/data/tasks.json');
$tasks_array = json_decode($tasks_string);

if (isset($_POST['newTask'])) {
    $task = $_POST['newTask'];
    var_dump($_POST['newTask']);
    array_push($tasks_array, $task);
    $json_tasks = json_encode($tasks_array);
    file_put_contents('./assets/data/tasks.json', $json_tasks);
};

header('Content-Type: application/json');
echo json_encode($tasks_array);
