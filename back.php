<?php 
function to_number($arr) {
	//$arr = array_reverse($arr);
	$resp =0 ;
	$total = null;

	foreach ($arr as $key=>$value) {
		if($value == '')
			continue;
		$aux = 0;

		switch ($value) {
			case 'millions':
			case 'million':
				if(is_null($total)) {
					$total = $resp*1000000;
				}elseif ($total < $resp*1000000){
					$total = ($total+$resp)*1000000;
				}else{
					$total += $resp*1000000;
				}
				$resp = 0;
				break;
			case 'thousand':
				if(is_null($total)) {
					$total = $resp*1000;
				}elseif ($total < $resp*1000){
					$total = ($total+$resp)*1000;
				}else{
					$total += $resp*1000;
				}
				$resp = 0;
				break;
			case 'hundred':
				if(is_null($total)) {
					$total = $resp*100;
				}elseif ($total < $resp*100){
					$total = ($total+$resp)*100;
				}else{
					$total += $resp*100;
				}
				$resp = 0;
				break;

			case 'one':
				$resp += 1;
				break;
			case 'two':
				$resp += 2;
				break;
			case 'three':
				$resp += 3;
				break;
			case 'four':
				$resp += 4;
				break;
			case 'five':
				$resp += 5;
				break;
			case 'six':
				$resp += 6;
				break;
			case 'seven':
				$resp += 7;
				break;
			case 'eight':
				$resp += 8;
				break;
			case 'nine':
				$resp += 9;
				break;
			case 'ten':
				$resp += 10;
				break;
			case 'eleven':
				$resp += 11;
				break;
			case 'twelve':
				$resp += 12;
				break;
			case 'thirteen':
				$resp += 13;
				break;
			case 'fourteen':
				$resp += 14;
				break;
			case 'fifteen':
				$resp += 15;
				break;
			case 'sixteen':
				$resp += 16;
				break;
			case 'seventeen':
				$resp += 17;
				break;
			case 'eighteen':
				$resp += 18;
				break;
			case 'nineteen':
				$resp += 19;
				break;
			case 'twenty':
				$resp += 20 ;
				break;
			case 'thirty':
				$resp += 30 ;
				break;
			case 'forty':
				$resp += 40 ;
				break;
			case 'fifty':
				$resp += 50 ;
				break;
			case 'sixty':
				$resp += 60 ;
				break;
			case 'seventy':
				$resp += 70 ;
				break;
			case 'eighty':
				$resp += 80 ;
				break;
			case 'ninety':
				$resp += 90 ;
				break;
			case 'zero':
				return 0;
			default:
				return "No reconocido: ".$value;
				break;
		}
	}

	return $total+$resp;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resp</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php 
$arr1 = preg_split("[\040|,|-]", $_GET['t1']);
$arr2 = preg_split("[\040|,|-]", $_GET['t2']);
echo '<h5 id="t1">'.to_number( $arr1 ).'</h5>';
echo '<h5 id="plus"> + </h5>';
echo '<h5 id="t2">'.to_number( $arr2 ).'</h5>';
 ?>	
<h5 id="equal"> = </h5>
<h5 id="ans"> - </h5>
<hr>
<h5 id="typed"></h5>

<script type="text/javascript" src="script.js"></script>

</body>
</html>
