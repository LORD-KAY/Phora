<?php 
/**
* @Functions and methods are defined here
* @var params
* author : LORD KAY
* email  : offeilord@gmail.com
* github : github.com/LORD-KAY
*/
class Phora
{

	/*
	* @var $string_name
	*/
	public $name;

	public $length;

	public $limiter;


	/**
	* Truncation function / Word Wrapper
	* @var params
	* Static Function
	* params data eg.banks , length eg.10 , delimiter eg. "...."
	*/

	public static function WordWrap(string $name = NULL, int $length = 0, string $limiter = "..."){
		$word = $name;
		$getLength = strlen($name);
		$wordSize  = $length;
		$delimiter = $limiter;

		if (!empty($word) && is_string($word)) {
			if ($getLength > 0 && $getLength >= $wordSize) {
				$wordwrap =  "";

				//Appending and combining
				for ($i=0; $i <= $wordSize ; $i++) { 
					if ($i == $wordSize) {
						$wordwrap.= " ".$delimiter;
					}
					else{
						$wordwrap .= $word[$i];
					}
				}
				return $wordwrap;
			}
			else{
				return $word;
			}
		}else{
			return "First Parameter is either empty or not a string. Provide Correct Parameters";
		}
	}

	/**
	* Capitalize function / WordCap with parameter
	* @var params
	* Static Function
	* params data eg.banks 
	*/

	public static function wordCap(string $name = NULL){
		if (!empty($name) && is_string($name)) {
			$this->name = ucfirst($name);
			return $this;	
		}
		else{
			return "Parameter either empty or not a string";
		}
	}


}
 ?>