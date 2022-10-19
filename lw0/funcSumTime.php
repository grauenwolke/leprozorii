<?php
function sumTime(string $firstTime,string $secondTime): string
{
	if (strtotime($firstTime) === false || strtotime($secondTime) === false){
		return 'incorrect input';
	}
	return date('H:i:s', strtotime($firstTime) + strtotime($secondTime));
}
echo sumTime('10:30:30','11:12:13');