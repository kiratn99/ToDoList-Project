<?php

const DATAFILE = 'tasks.csv';

function loadTasks()
{
	
	$file = fopen(DATAFILE, 'a+');

	$tasks = array();

	while(true)
	{
		$taskData = fgetcsv($file);

		if($taskData == false)
		{
			break;
		}

		array_push($tasks, $taskData);
	}

	fclose($file);

	return $tasks;
}

function saveTask(array $taskData)
{
	
	$file = fopen(DATAFILE, 'a');

	fputcsv($file, $taskData);

	fclose($file);
}

function saveTasks(array $tasks)
{
	
	$file = fopen(DATAFILE, 'w');

	foreach($tasks as $taskData)
	{
		fputcsv($file, $taskData);
	}

	fclose($file);
}