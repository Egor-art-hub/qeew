<?php
$arr=[[1, 2, 3, 4,], [5, 6, 7, 8, 9], [0,'a','b','c'], ['d', 'e', 'f', 'g']];
$level= count($arr);
if($level%2==0) {
    $level/=2;
} else{
    $level=($level-1)/2;
}

 $le =count($arr);
    for ($m = 0; $m < $level; $m+=2) {
        $len = $le - $level;
        for ($i = 0; $i < $le; $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                echo $arr[$i][$j].$arr[$len - $i][$j].$arr[$len - $i][$len - $j].$arr[$i][$len - $j];
                $x = $arr[$i][$j];
                $arr[$i][$j] = $arr[$len - $i][$j];
                $arr[$len - $i][$j] = $arr[$len - $i][$len - $j];
                $arr[$len - $i][$len - $j] = $arr[$i][$len - $j];
                $arr[$i][$len - $j] = $x;
            }

        }
    }