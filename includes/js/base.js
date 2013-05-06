function findPrice($value, $textValues)
{	
	$result = null;
	
	switch($value)
	{
		case '250':
			$result = $textValues[0];
			break;
		case '500':
			$result = $textValues[1];
			break;
		case '1000':
			$result = $textValues[2];
			break;
	}
	
	return $result;
}