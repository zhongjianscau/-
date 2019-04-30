<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-04-30 21:09:06
// +----------------------------------------------------------------------
//求1!+2!+...+n!
//循环遍历方法
function factorial1(int $n) : int
{
    if ($n <= 1) {
        return 1;
    }
    $sum = 0;
    for ($i = 1; $i <= $n; $i ++) {
        $interSum = 1;
        for ($j = 1; $j <= $i; $j ++) {
            $interSum *= $j;
        }
        $sum += $interSum;
    }
    return $sum;
}


//递归方法
function factorial2(int $n) : int
{
    if ($n <= 1) {
        return 1;
    }
    $sum = 0;
    for ($i = 1; $i <= $n; $i ++) {
        $temp = recursion($i);
        $sum += $temp;
    }
    return $sum;
}

//常规方法
function factorial3(int $n) : int
{
    if ($n <= 1) {
        return 1;
    }
    $sum = 0;
    $temp = 1;
    for ($i = 1; $i <= $n; $i ++) {
        $temp *= $i;
        $sum += $temp;
    }
    return $sum;
}

function recursion(int $n) : int
{
    if ($n == 1) {
        return 1;
    } else {
        return recursion($n - 1) * $n;
    }
}
print_r(factorial1(5) . "\n");
print_r(factorial2(5) . "\n");
print_r(factorial3(5) . "\n");
