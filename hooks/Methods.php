<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function Methods_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function Methods_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function Methods_footer($contentType, $memberInfo, &$args) {
		$footer='';

		switch($contentType) {
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function Methods_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function Methods_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function Methods_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function Methods_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function Methods_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function Methods_after_delete($selectedID, $memberInfo, &$args) {

	}

	function Methods_dv($selectedID, $memberInfo, &$html, &$args) {

	}

	function Methods_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function Methods_batch_actions(&$args) {

		return [];
	}
