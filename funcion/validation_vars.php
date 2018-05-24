<?php 

	function validate_string($var) {

		if (isset($var) && trim($var) != "") {
			return trim($var);
		}

		return false;

	}

	function validate_int($var) {

		$opciones = array(
    		'options' => array(
        		'min_range' => 1
    		)
		);

		if ($number = filter_var($var, FILTER_VALIDATE_INT)) {
			return $number;
		}

		return false;

	}

?>