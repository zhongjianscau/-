<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-04-28 22:56:04
// +----------------------------------------------------------------------
//快速排序
function quick_sort(array $arr) :array
{
   $len = count($arr);
   if ($len <= 1) {
       return $arr;
   }
   $base = $arr[0];
   $left = [];
   $right = [];
   for ($i =1; $i < $len; $i ++) {
       if ($base > $arr[$i]) {
           $left[] = $arr[$i];
       } else {
           $right[] = $arr[$i];
       }
   }
   $left = quick_sort($left);
   $right = quick_sort($right);
   return array_merge($left, [$base], $right);
}
$arr = [10, 3, 2, 5, 9, 1, 8, 7];
print_r(quick_sort($arr));
