<?php
/**
 * 选择排序
 * n个记录的文件的直接选择排序可经过n-1趟直接选择排序得到有序结果：
 * (1)初始状态：无序区为R[1..n]，有序区为空。
 * (2)第1趟排序
 * 在无序区R[1..n]中选出关键字最小的记录R[k]，
 * 将它与无序区的第1个记录R[1]交换，
 * 使R[1..1]和R[2..n]分别变为记录个数增加1个的新有序区和记录个数减少1个的新无序区。
 *　……
 * (3)第i趟排序
 * 第i趟排序开始时，当前有序区和无序区分别为R[1..i-1]和R[i..n](1≤i≤n-1)。
 * 该趟排序从当前无序区中选出关键字最小的记录R[k]，
 * 将它与无序区的第1个记录R[i]交换，
 * 使R[1..i]和R[i+1..n]分别变为记录个数增加1个的新有序区和记录个数减少1个的新无序区。
 *
 * 这样，n个记录的文件的直接选择排序可经过n-1趟直接选择排序得到有序结果。
 */
function selectSort(array $list)
{
	$length = count($list);
	for($i = 0; $i < $length; $i++){
		$key = $i;
		for($j = $i + 1; $j < $length; $j++){
			if($list[$j] < $list[$key]){
				$key = $j;
			}
		}
		$temp = $list[$key];
		$list[$key] = $list[$i];
		$list[$i] = $temp;
	}

	return $list;
}

$list = array(3, 6, 2, 4, 10, 1 ,9, 8, 5, 7);
var_dump(selectSort($list));

/**
 * 分析：
 * 原数组：[ 3 ,6 ,2 ,4 ,10 ,1 ,9 ,8 ,5 ,7 ]
 * key:5
 * [ 1 ,6 ,2 ,4 ,10 ,3 ,9 ,8 ,5 ,7 ]
 * key:2
 * [ 1 ,2 ,6 ,4 ,10 ,3 ,9 ,8 ,5 ,7 ]
 * key:5
 * [ 1 ,2 ,3 ,4 ,10 ,6 ,9 ,8 ,5 ,7 ]
 * key:3
 * [ 1 ,2 ,3 ,4 ,10 ,6 ,9 ,8 ,5 ,7 ]
 * key:8
 * [ 1 ,2 ,3 ,4 ,5 ,6 ,9 ,8 ,10 ,7 ]
 * key:5
 * [ 1 ,2 ,3 ,4 ,5 ,6 ,9 ,8 ,10 ,7 ]
 * key:9
 * [ 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,10 ,9 ]
 * key:7
 * [ 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,10 ,9 ]
 * key:9
 * [ 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,10 ]
 * key:9
 * [ 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,10 ]
 *  
 */