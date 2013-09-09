<?php
	/**
	*
	* Utility class used to operate methods on string to ensure 
	* the manipulated data are safe
	*
	**/
	class Utility {
		
		// Method to convert as safe string to save in a DB
		public static function ConvertAsSafeString($string)
		{
			$result = null;
			
			if (isset($string))
			{
				$result = htmlspecialchars($string);
			}
			
			return $result;
		}
	
	}
