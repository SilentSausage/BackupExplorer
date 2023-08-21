<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/Methods.php');
	include_once(__DIR__ . '/Methods_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('Methods');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'Methods';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`Methods`.`id`" => "id",
		"`Methods`.`name`" => "name",
		"IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') /* Software */" => "software",
		"`Methods`.`procedure`" => "procedure",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`Methods`.`id`',
		2 => 2,
		3 => '`Software1`.`name`',
		4 => 4,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`Methods`.`id`" => "id",
		"`Methods`.`name`" => "name",
		"IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') /* Software */" => "software",
		"`Methods`.`procedure`" => "procedure",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`Methods`.`id`" => "ID",
		"`Methods`.`name`" => "Name",
		"IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') /* Software */" => "Software",
		"`Methods`.`procedure`" => "Procedure",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`Methods`.`id`" => "id",
		"`Methods`.`name`" => "name",
		"IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') /* Software */" => "software",
		"`Methods`.`procedure`" => "procedure",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['software' => 'Software', ];

	$x->QueryFrom = "`Methods` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Methods`.`software` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = (getLoggedAdmin() !== false);
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = (getLoggedAdmin() !== false);
	$x->RecordsPerPage = 25;
	$x->QuickSearch = 0;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'Methods_view.php';
	$x->TableTitle = 'Methods';
	$x->TableIcon = 'resources/table_icons/align_left.png';
	$x->PrimaryKey = '`Methods`.`id`';

	$x->ColWidth = [150, 150, ];
	$x->ColCaption = ['Name', 'Software', ];
	$x->ColFieldName = ['name', 'software', ];
	$x->ColNumber  = [2, 3, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/Methods_templateTV.html';
	$x->SelectedTemplate = 'templates/Methods_templateTVS.html';
	$x->TemplateDV = 'templates/Methods_templateDV.html';
	$x->TemplateDVP = 'templates/Methods_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: Methods_init
	$render = true;
	if(function_exists('Methods_init')) {
		$args = [];
		$render = Methods_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Methods_header
	$headerCode = '';
	if(function_exists('Methods_header')) {
		$args = [];
		$headerCode = Methods_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: Methods_footer
	$footerCode = '';
	if(function_exists('Methods_footer')) {
		$args = [];
		$footerCode = Methods_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
