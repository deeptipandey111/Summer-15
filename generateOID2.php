<?php
include 'writeOrigfile.php';
echo "hi";
$filename = file('origfile.txt');
echo "file_exists ( $filename )";
if(file_exists ( file('origfile.txt') ))
{
	getRandID();
}
else
{
	makeRandFile();
	getRandID();
}
getRandID()
{
	exec('head -1 origfile.txt > newfile.txt; awk \'NR>1\' origfile.txt > newfile.txt; mv newfile.txt origfile.txt');
	$firstOID = file_get_contents("newfile.txt");
	error_log($firstOID);
	echo $firstOID;
}

	//echo $randOID;
	//echo $randIndex;
?>
