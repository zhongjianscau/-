<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-05-02 16:49:46
// +----------------------------------------------------------------------
//寻找两个有序数组里相同的元素
function find_common(array $arr1, array $arr2) : array
{
    $common = [];
    $i = $j = 0;
    $count1 = count($arr1);
    $count2 = count($arr2);
    while ($i < $count1 && $j < $count2) {
        if ($arr1[$i] < $arr2[$j]) {
            $i ++;
        } elseif ($arr1[$i] > $arr2[$j]) {
            $j ++;
        } else {
            $common[] = $arr1[$i];
            $i ++;
            $j ++;
        }
    }
    return array_unique($common);
}
print_r(find_common([1, 3, 5, 7, 9], [1, 2, 3, 4, 5, 6, 10]));
