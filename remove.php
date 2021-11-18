<?php

include 'utilities.php';

function removeTasks(array $allTasks, array $indexes)
{
	$tasks = array();

	foreach($allTasks as $index => $taskData)
    {
       
        if(in_array($index, $indexes) == false)
        {
            array_push($tasks, $taskData);
        }
    }


	return $tasks;
}

if(array_key_exists('indexes', $_POST) == true)
{
    $allTasks = loadTasks();

    $tasks = removeTasks($allTasks, $_POST['indexes']);

    saveTasks($tasks);
}


header('Location: index.php');
exit();