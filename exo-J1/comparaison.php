<?php 

// 0 == "0" → true
// 0 === "0" → false
// "1" == 1 → true
// "1" === 1 → false
// null == false → true
// null === false → false 

echo "0 == '0' : ";
var_dump(0 == "0");

echo "0 === '0' : ";
var_dump(0 === "0");

echo "'1' == 1 : ";
var_dump("1" == 1);

echo "'1' === 1 : ";
var_dump("1" === 1);

echo "null == false : ";
var_dump(null == false);

echo "null === false : ";
var_dump(null === false);

echo "ultimate echo echo";
?> 