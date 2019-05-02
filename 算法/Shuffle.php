<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-05-02 17:02:34
// +----------------------------------------------------------------------
//打乱数组
function custom_shuffle (array $arr) : array
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    for ($i = 0; $i < $len; $i ++) {
        $rand = mt_rand(0, $len - 1);
        if ($i != $rand) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$rand];
            $arr[$rand] = $temp;
        }
    }
    return $arr;
}
print_r(custom_shuffle([1, 2, 3, 4, 5, 6, 7, 8]));