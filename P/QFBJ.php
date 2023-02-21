<?php

function read(...$filelist) {
$list = [];
foreach ($filelist as $file) {
$handle = fopen($file, 'r');
while (($line = fgets($handle)) !== false) {
array_push($list, trim($line));
}
fclose($handle);
}
return $list;
}

$list = read('https://jsd.cdn.zzko.cn/gh/QFBJ/ZY@main/P/QFBJ.txt');
$url = $list[array_rand($list)];

header("Location: {$url}");
