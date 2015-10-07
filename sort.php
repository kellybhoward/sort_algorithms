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
		<div id="smallest_largest">
			<h2>Getting Smallest to Largest (Left -> Right):</h2>
			<?php
	            $sortingArray = [];
	            for($num = 1; $num <= 100; $num++){
		            array_push($sortingArray, rand(1,10000));
				}
	            function selection_sort($array){
	            	for ($i=0; $i < count($array); $i++){
	            		$min = $array[$i];
		            	for ($j=$i; $j < count($array); $j++) { 
							if ($min > $array[$j]){
								$min = $array[$j];
							}
						}
					$temp = $array[$i];
						for ($k=0; $k < count($array); $k++){
							if ($min == $array[$k]){
								$array[$k] = $temp;
							}
						}
					$array[$i] = $min;
					}
	            	return $array;
	            }
			   $time_start = microtime(true);
	            $result = implode(", ", selection_sort($sortingArray));
	            echo $result;
	            $time_end = microtime(true);
			    $time = $time_end - $time_start;
			    echo "<br><br>Did nothing in " . $time . " seconds\n";
			?>
		</div>
		<div id="both_max_min">
			<h2>Getting BOTH Max and Min with swapping:</h2>
			<?php
				function selection_sort_both($array){
	            	for ($i=0; $i < count($array); $i++){
	            		$min = $array[$i];
	            		$max = $array[count($array)-1];
	            		for ($j = 0; $j < count($array); $j++){
	            			if($array[$j] < $min){
	            				$min = $array[$j];
	            			} else if ($array[$j] > $max){
	            				$max = $array[$j];
	            			}
	            		}
	            		$tempMin = $array[$i];
	            		$tempMax = $array[count($array)-1];
	            		$array[$i] = $min;
	            		$array[count($array)-1] = $max;
	            	return $array;
		            }
	            }
	            $time_start = microtime(true);
	            $result = implode(", ", selection_sort_both($sortingArray));
	            echo $result;
	            $time_end = microtime(true);
			    $time = $time_end - $time_start;
			    echo "<br><br>Did nothing in " . $time . " seconds\n";
			?>
		</div>
	</body>
</html>