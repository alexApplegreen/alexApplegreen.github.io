<?php
class beispiel {

	public static function saveValues() {
		$file = './values.csv';
		$handle = fopen($file, 'a');
		$values = array('test', 42, 42, 42);
		foreach ($values as $value) {
			fputcsv($handle, explode(',', $value));
		}
	}

	public static function retrieveValues() {
		$file = './values.csv';
		$handle = fopen($file, 'r');
		$line = fgetcsv($handle);
		return $line;
	}
}