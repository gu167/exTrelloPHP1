<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<?php

function soma(){

    $p = func_get_args();
    $t = func_num_args();
    $s = 0;
    for ($i = 0; $i < $t; $i++) {
        $s += $p[$i];
    }
    return $s;
}

$r = soma(3, 5, 2);
echo "A soma dos valores é $r";
?>
</body>
</html>