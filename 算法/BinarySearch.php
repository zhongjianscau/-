<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-04-28 23:40:07
// +----------------------------------------------------------------------
//二分查找，数组必须是有序的
function binary_search(array $arr, int $target) :int
{
    $len = count($arr);
    if ($len == 0) {
        return -1;
    }
    if ($len == 1) {
        if ($arr[0] == $target) {
            return 0;
        } else {
            return -1;
        }
    }
    $low = 0;
    $high = $len;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($arr[$mid] == $target) {
            return $mid;
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}
$arr = [1, 2, 3, 5, 7, 8, 9, 10];
print_r(binary_search($arr, 8));