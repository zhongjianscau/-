<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2019-05-02 17:11:37
// +----------------------------------------------------------------------
//给一个含有数字和字母的字符串，让连着的数字和字母对应
function number_alphabet(string $str)
{
    $number = preg_split('/[a-zA-Z]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $alphabet = preg_split('/\d+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $len = count($number);
    for ($i = 0; $i < $len; $i ++) {
        echo $number[$i] . ':' . $alphabet[$i] . "\n";
    }
}
number_alphabet('dfa12fdfasdfa23dsfasd3222');
