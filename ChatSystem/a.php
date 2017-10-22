<?php
	$t1=$_POST['n1'];
	$t2=$_POST['n2'];
	$count=0;
	echo "Prime numbers are:";
	for($i=$t1;$i<=$t2;$i++)
	{
		$count=0;
		for($j=1;$j<=$i;$j++)
		{
			if($i % $j == 0)
				$count++;
		}
		if($count==2)
			echo " ".$i;
	}
?>
