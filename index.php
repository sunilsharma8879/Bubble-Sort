<?php

$arr = [15,2,35,68,58];

//bubble sort

$temp = 0;

for($i=0;$i<count($arr);$i++);
{
    for($j=0;$j<count($arr)-1;$j++)
    {
        if($arr[$j] > $arr[$j+1])
        {
            $temp = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
print_r($arr);

?>
