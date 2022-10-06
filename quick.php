<?php
	function quick_Sort($array){
        if(count($array))<1 return [];
	$arr=[];
	$left=[];
	$right=[];
	$pivot=$array[0];

for($i=1; $i<count($array);$i++){
	if($array[$i]<$pivot{
	array_push($left,$array[$i]);
}else{
    array_push($right,$array[$i]);
}
}


$array_push($arr,$pivot);
return array_merge(quick_Sort($left),$arr,quick_Sort($right));
echo implode(',',quickSort($array1));
?>