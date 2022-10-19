<?php
function calculator(string $expressionStr): string
{
    if (strpos($expressionStr, '/0')) {
        return('Incorrect input');
    }
    $checklistSigns = ['/', '*', '-', '+'];
    $checklistNums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $correctExp = '';
    $numericalExpArr = str_split($expressionStr);
    foreach ($numericalExpArr as $keyArr) {
        if (!(in_array($keyArr, $checklistSigns) || in_array($keyArr, $checklistNums))){
            return('Incorrect input');
        }
        $correctExp .= $keyArr;
    }
    return eval("return $correctExp;");
}
echo calculator('4+4*4/4');