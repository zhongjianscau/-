<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-04-28 23:30:15
// +----------------------------------------------------------------------
//插入排序
function insert_sort(array $arr) :array
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    for ($i = 1; $i < $len; $i ++) {
        $tmp = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j --) {
            if ($tmp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $arr;
}
$arr = [10, 3, 2, 5, 9, 1, 8, 7];
print_r(insert_sort($arr));