<?php
	define('PREPEND_PATH', '');
	include_once(__DIR__ . '/lib.php');

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'Clients' => function($data, $options = []) {

			return $data;
		},
		'Endpoints' => function($data, $options = []) {
			if(isset($data['clientid'])) $data['clientid'] = pkGivenLookupText($data['clientid'], 'Endpoints', 'clientid');

			return $data;
		},
		'Jobs' => function($data, $options = []) {
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'Jobs', 'client');
			if(isset($data['software'])) $data['software'] = pkGivenLookupText($data['software'], 'Jobs', 'software');
			if(isset($data['endpoint'])) $data['endpoint'] = pkGivenLookupText($data['endpoint'], 'Jobs', 'endpoint');
			if(isset($data['method'])) $data['method'] = pkGivenLookupText($data['method'], 'Jobs', 'method');
			if(isset($data['destination'])) $data['destination'] = pkGivenLookupText($data['destination'], 'Jobs', 'destination');

			return $data;
		},
		'Log' => function($data, $options = []) {
			if(isset($data['date'])) $data['date'] = guessMySQLDateTime($data['date']);
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'Log', 'client');
			if(isset($data['endpoint'])) $data['endpoint'] = pkGivenLookupText($data['endpoint'], 'Log', 'endpoint');
			if(isset($data['job'])) $data['job'] = pkGivenLookupText($data['job'], 'Log', 'job');

			return $data;
		},
		'Methods' => function($data, $options = []) {
			if(isset($data['software'])) $data['software'] = pkGivenLookupText($data['software'], 'Methods', 'software');

			return $data;
		},
		'Software' => function($data, $options = []) {

			return $data;
		},
		'Destinations' => function($data, $options = []) {
			if(isset($data['client'])) $data['client'] = pkGivenLookupText($data['client'], 'Destinations', 'client');

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'Clients' => function($data, $options = []) { return true; },
		'Endpoints' => function($data, $options = []) { return true; },
		'Jobs' => function($data, $options = []) { return true; },
		'Log' => function($data, $options = []) { return true; },
		'Methods' => function($data, $options = []) { return true; },
		'Software' => function($data, $options = []) { return true; },
		'Destinations' => function($data, $options = []) { return true; },
	];

	/*
	Hook file for overwriting/amending $transformFunctions and $filterFunctions:
	hooks/import-csv.php
	If found, it's included below

	The way this works is by either completely overwriting any of the above 2 arrays,
	or, more commonly, overwriting a single function, for example:
		$transformFunctions['tablename'] = function($data, $options = []) {
			// new definition here
			// then you must return transformed data
			return $data;
		};

	Another scenario is transforming a specific field and leaving other fields to the default
	transformation. One possible way of doing this is to store the original transformation function
	in GLOBALS array, calling it inside the custom transformation function, then modifying the
	specific field:
		$GLOBALS['originalTransformationFunction'] = $transformFunctions['tablename'];
		$transformFunctions['tablename'] = function($data, $options = []) {
			$data = call_user_func_array($GLOBALS['originalTransformationFunction'], [$data, $options]);
			$data['fieldname'] = 'transformed value';
			return $data;
		};
	*/

	@include(__DIR__ . '/hooks/import-csv.php');

	$ui = new CSVImportUI($transformFunctions, $filterFunctions);
