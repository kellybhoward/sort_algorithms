<!DOCTYPE html>
<html>
	<head>
		<title>Sorting Algorithm</title>
		<meta name="author" content="Kelly Howard"/>
		<meta name="description" content="Working through Sorting Algorithms"/>
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
		<div id="selection_sort">
			<h2>Selection Sort: Smallest to Largest (Left -> Right):</h2>
			<?php
				//Setting a Random Array Set of 100 Values
	            $sortingArray = [];
	            for($num = 1; $num <= 100; $num++){
		            array_push($sortingArray, rand(1,10000));
				}
				//Selection Sort Function Declaration
	            function selection_sort($array){
	            	$size = sizeof($array);
	            	for ($i=0; $i < $size; $i++){
	            		$min = $i;
		            	for ($j = $i+1; $j < $size; $j++) { 
							if ($array[$j] < $array[$min])
								$min = $j;
						}
						$temp = $array[$min];
						$array[$min] = $array[$i];
						$array[$i] = $temp;
					}
	            	return $array;
	            }

	            //Microtime function to set start time
			    $time_start = microtime(true);
			    //Printing the Array with commas
	            echo implode(", ", selection_sort($sortingArray));;
	            //Stopping Microtime clock
	            $time_end = microtime(true);
			    $time = $time_end - $time_start;
			    //Printing result of Microtime function
			    echo "<br><br>Did sort in " . $time . " seconds\n";
			?>
		</div>
		<div id="both_max_min">
			<h2>Selection Sort: Switching BOTH Max and Min:</h2>
			<?php
				//Setting a Random Array Set of 100 Values
				$sortingArray2 = [];
	            for($num = 1; $num <= 100; $num++){
		            array_push($sortingArray2, rand(1,10000));
				}
				//Selection Sort Function Declaration that uses both Min and Max
				function selection_sort_both($array){
					$size = sizeof($array);
	            	for ($i=0; $i < $size; $i++){
	            		$min = $array[$i];
						$max = $array[$i];
						$minIndex = $i;
						$maxIndex = $i;
		            	for ($j=$i; $j < $size; $j++) { 
							if ($min > $array[$j]){
								$min = $array[$j];
								$minIndex = $j;
							} else if ($max < $array[$j]){
								$max = $array[$j];
								$maxIndex = $j;
							}
						}
					$temp = $array[$i];
						for ($k=0; $k < $size; $k++){
							if ($min == $array[$k]){
								$array[$k] = $temp;
							}
						}
					$array[$i] = $min;
					}
	            	return $array;
	            }
	            //Microtime function to set start time
	            $time_start = microtime(true);
	            //Printing the Array with commas
	            echo implode(", ", selection_sort_both($sortingArray2));
	            //Printing result of Microtime function
	            $time_end = microtime(true);
			    $time = $time_end - $time_start;
			    echo "<br><br>Did sort in " . $time . " seconds\n";
		    ?>
		</div>
	</body>
</html>