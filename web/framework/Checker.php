<?php
/**
 * 
 */
class Checker
{
	private $errors;

	function __construct($status)
	{
		if ($status)
		{
			$this->StartChecking();
		}
	}

	private function StartChecking()
	{
		foreach (G::getSysPathes() as $key => $value) {
			$path = ROOT . $value;

			if (!file_exists($path))
			{
				$this->errors[] = 'Not found file of framework: "' . $path . '"<br>';
			}
		}

		if ($this->errors)
		{
			foreach ($this->errors as $error) {
				echo $error;
			}
			exit;
		}
	} 


}