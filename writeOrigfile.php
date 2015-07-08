<?php
makeRandFile()
{
	echo "hithere";
	$sortedNum = range(10000,99999);
	$randNum = shuffle($sortedNum);
	file_put_contents("FILE", implode(PHP_EOL, $randNum));
}

?>