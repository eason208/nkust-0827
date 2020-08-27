
<button type=botton><a href="index.php">回首頁</a></button>
<button type=botton><a href="test07.php?height=1.74&weight=68">小明的BMI</a></button>
<button type=botton><a href="test07.php?height=1.65&weight=55">小華的BMI</a></button>
<button type=botton><a href="test07.php?height=1.80&weight=80">小陳的BMI</a></button>
<hr>


<?php

   $height = $_GET["height"];
   $weight = $_GET["weight"];

    if ($height!=NULL and $weight!=NULL){  //確定兩個值都不是空的

    echo "身高：", $height, "公尺<br>";
	echo "體重：". $weight. "公斤<br>"; 

	$bmi = $weight / $height ** 2;
	echo "BMI：" . $bmi . "<br>";
	if ($bmi>24) {
		echo "體重有些太重囉！";
	} else if ($bmi>=18.5) {
		echo "體重很標準耶！";
	} else {
		echo "體重有些太輕了！";
   }
    }
    else{
    	echo "您要在網址輸入正確資料難才能計算!!!!!!!!!!!!!!!!!!!!!<br>";
    	echo "使用範例:http://localhost/mysite/test07/?height=身高&weight=體重";
    }
	
?>

