<?php

function saveTask(array $taskData)
{
	$file = fopen('recap.csv', 'a');
    
    fputcsv($file, $taskData);
    
    fclose($file);
    
}


function loadTasks()
{
	$file = fopen('recap.csv', 'a+');
		
	$tasks = array(); // []
    
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


?>
