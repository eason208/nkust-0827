<h2>超神準大樂透預測王</h2>
<hr>
<?php

	$count = 0; //目前取得的隨機數
	while($count < 6){
		$t = rand(1, 49); //先取得一個候選隨機數
	if (in_array($t, $lotto)){ //判斷是否在$lotto陣列裡
	continue; 
    }
	$lotto[] = $t;
	$count ++;	//$count+1
	}

	sort($lotto); //sort()=陣列從小排到大
	foreach ($lotto as $no ) {
		echo $no . ",";
	}


	echo "<br>特別號：" ;

	$spec = rand(1,49);
     while (in_array($spec,$lotto)) {
     	$spec = rand(1,49);
     }
	echo $spec;
     	
     

?>
<hr>
<iframe width="560" height="315" src="https://www.youtube.com/embed/tApRlb08H1w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
不準免錢，有中歡迎斗內...