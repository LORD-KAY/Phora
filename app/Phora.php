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
	public    $name = '';

	protected $length = 0;

	protected $limiter;

	protected $splitter = '';

	protected $converted_data = '';

	protected $arr_sequence = '';
	/**
	* Truncation function / Word Wrapper
	* @var params
	* Static Function
	* params data eg.banks , length eg.10 , delimiter eg. "...."
	*/

	public function WordWrap(string $name = NULL, int $length = 0, string $limiter = "..."){
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
			return "First Argument is either empty or not a string. Provide Correct Arguments";
		}
	}

	/**
	* Capitalize function / WordCap with parameter
	* @var params
	* Non Static Function
	* params data eg.banks 
	*/

	public function WordCap(string $name = NULL){
		if (!empty($name) && is_string($name)) {
			$this->converted_data = '';
			$this->name = preg_split('/[\s,]+/', $name);
			foreach ($this->name as $value) {
				$toCap = ucfirst($value);
				$this->converted_data .= " ".$toCap;
			}
			return $this->converted_data;
		}
		else{
			return "Argument either empty or not a string";
		}
	}

	/**
	* Uppercase function / WordUpper with parameter
	* @var params
	* Non static Function
	* params data eg.banks 
	*/

	public function WordUpper(string $name = NULL){
		if (!empty($name) && is_string($name)) {
			$this->converted_data = '';
			$this->name = preg_split('/[\s,]+/', $name);
			foreach ($this->name as $value) {
				$toCap = strtoupper($value);
				$this->converted_data .= " ".$toCap;
			}
			return $this->converted_data;
		}
	}
	/**
	* Lowercase function / WordLower with parameter
	* @var params
	* Non static Function
	* params data eg.banks 
	*/
	public function WordLower(string $name = NULL){
		if (!empty($name) && is_string($name)) {
			$this->converted_data = '';
			$this->name = preg_split('/[\s,]+/', $name);
			foreach ($this->name as $value) {
				$toCap = strtolower($value);
				$this->converted_data .= " ".$toCap;
			}
			return $this->converted_data;
		}
	}

	


	/**
	* Array Configurations starts here
	* @var params
	* array manipulations and configs
	*/

	public function toArray(string $arr_sequence = NULL, $splitter = " "){
		if (isset($arr_sequence) && !empty($arr_sequence)) {
			$this->converted_data = '';
			 if (isset($splitter) && !empty($splitter)) {
			 	$this->converted_data = explode($splitter, $arr_sequence);
			 	return $this->converted_data;
			 }else{
			 	$this->converted_data = explode(' ', $arr_sequence);
			 	return $this->converted_data;
			 }

		}
		else{
			return;
		}
	}

}
 ?>