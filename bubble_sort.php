<!DOCTYPE html>
<html>
	<head>
		<title>Bubble Sort</title>
		<meta name="author" content="Kelly Howard"/>
		<meta name="description" content="Working through Sorting Algorithms"/>
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
		<div>
			<!-- Set up a comparison array with 100 random values-->
			<h2>Starting Array:</h2>
			<p><?php
				$sample_array = [];
				for($num = 1; $num <= 100; $num++){
			        array_push($sample_array, rand(1,10000));
				}
				echo implode(", ", $sample_array);
			?></p>
			<h2>After Insertion Sort:</h2>
			<p>
			<?php
				//Make a swap function to be used in Bubble Sort
				function swap_in_array ($array, $id, $id2) {  
				    list($array[$id], $array[$id2]) = array($array[$id2], $array[$id]);  
				} 
				//Declare the Bubble Sort Function
				function bubble_sort($array){
					$size = sizeof($array);
					for ( $i = 0; $i < $size; $i++ ) {
					   for ($j = 0; $j < $size; $j++ )  
					   {  
					      if ($array[$i] < $array[$j])  
					      {  
					         $temp = $array[$i];  
					         $array[$i] = $array[$j];  
					         $array[$j] = $temp;  
					      }  
					   }  
					} 
					return $array;
				}
				//Microtime function to set start time
			    $time_start = microtime(true);
			    //Printing the Array with commas
				echo implode(", ", bubble_sort($sample_array));
		        //Stopping Microtime clock
		        $time_end = microtime(true);
			    $time = $time_end - $time_start;
			    //Printing result of Microtime function
			    echo "<br><br>Did sort in " . $time . " seconds\n";
			?>	</p>
		</div>
	</body>
</html>