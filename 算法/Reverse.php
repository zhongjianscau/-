<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-05-02 16:44:16
// +----------------------------------------------------------------------
//反转函数
function reverse(array $arr) : array
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    $left = 0;
    $right = $len - 1;
    while ($left < $right) {
        $temp = $arr[$left];
        $arr[$left ++] = $arr[$right];
        $arr[$right --] = $temp;
    }
    return $arr;
}
print_r(reverse([10, 3, 2, 5, 9, 1, 8, 7]));
