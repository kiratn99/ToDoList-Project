<?php

include 'utilities.php';

function addTask($title, $description, $date, $priority)
{
    if(empty($description) == true)
    {
        $description = 'Tâche sans description';
    }

	$taskData =
	[
		$title,
		$description,
		$date,
		$priority
	];

	saveTask($taskData);
}

if(empty($_POST['title']) == false) // or if($_POST['title'] != '')
{
    $description = $_POST['description'];
    $date        = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $priority    = $_POST['priority'];
    $title       = $_POST['title'];

    addTask($title, $description, $date, $priority);
}

header('Location: index.php');
exit();