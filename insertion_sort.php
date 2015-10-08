<!DOCTYPE html>
<html>
	<head>
		<title>Insertion Sort</title>
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
		//Declare the Insertion Sort Function
		function insertion_sort($array){
			$size = count($array);
			for($i = 0 ; $i < $size; $i++){
				$marker = $array[$i];
				$j = $i;
				while($j > 0 && $array[$j-1] > $marker) {
					$array[$j] = $array [$j-1];
					$j -= 1;
				}
			$array[$j] = $marker;
			}
			return $array;
		}
		//Microtime function to set start time
	    $time_start = microtime(true);
	    //Printing the Array with commas
		echo implode(", ", insertion_sort($sample_array));
        //Stopping Microtime clock
        $time_end = microtime(true);
	    $time = $time_end - $time_start;
	    //Printing result of Microtime function
	    echo "<br><br>Did sort in " . $time . " seconds\n";
		?>	</p>
		</div>
	</body>
</html>