<?php
/*
 * Plugin Name: Increase Maximum Execution Time
 * Description: Increase Maximum Execution Time to 10 min
 * Version: 0.1
 * Author: Deepak Kaushik 
 * Author URI: http://www.coderperhour.com
 * Text Domain: Increase-Maximum-Execution-Time
 */

function MaxExecutionTime() 
{
	$max_execution_time = 600;
	return $max_execution_time;
}
add_filter('max_execution_time', 'MaxExecutionTime');
?> 