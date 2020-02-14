// Medium.com

// 1.In an unsorted array of 5 elements, start with the first two elements and sort them in ascending order. (Compare the element to check which one is greater).
// 2.Compare the second and third element to check which one is greater, and sort them in ascending order.
// 3.Compare the third and fourth element to check which one is greater, and sort them in ascending order.
// 4.Compare the fourth and fifth element to check which one is greater, and sort them in ascending order.
// 5.Repeat steps 1–5 until no more swaps are required.


// 1.Some Characteristics of Bubble Sort:
// 2.Large values are always sorted first.
// 3.It only takes one iteration to detect that a collection is already sorted.
// 4.The best time complexity for Bubble Sort is O(n). The average and worst time complexity is O(n²).
// 5.The space complexity for Bubble Sort is O(1), because only single additional memory space is required.



// Algorithm
// 1.[15,2,35,68,58]
// 2.compare i index value to i+1 index value [important part] => forexample 0 index value to 0+1 index value
// 3.if 0 index value is greated with any other index value then swap
// 4.if less do not swap


<?php


$arr = [15,2,35,68,58];

//bubble sort

$temp = 0;

for($i=0;$i<count($arr);$i++)
{
    for($j=$i+1;$j<count($arr);$j++)
    {
        if($arr[$i] > $arr[$j])
        {
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}

print_r($arr);


?>
