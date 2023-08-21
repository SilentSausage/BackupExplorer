<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/Clients.php');
	include_once(__DIR__ . '/Clients_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('Clients');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'Clients';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`Clients`.`id`" => "id",
		"`Clients`.`name`" => "name",
		"`Clients`.`logo`" => "logo",
		"`Clients`.`endpoints`" => "endpoints",
		"`Clients`.`jobs`" => "jobs",
		"`Clients`.`destinations`" => "destinations",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`Clients`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`Clients`.`id`" => "id",
		"`Clients`.`name`" => "name",
		"`Clients`.`logo`" => "logo",
		"`Clients`.`endpoints`" => "endpoints",
		"`Clients`.`jobs`" => "jobs",
		"`Clients`.`destinations`" => "destinations",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`Clients`.`id`" => "ID",
		"`Clients`.`name`" => "Name",
		"`Clients`.`endpoints`" => "Endpoints",
		"`Clients`.`jobs`" => "Jobs",
		"`Clients`.`destinations`" => "Destinations",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`Clients`.`id`" => "id",
		"`Clients`.`name`" => "name",
		"`Clients`.`endpoints`" => "endpoints",
		"`Clients`.`jobs`" => "jobs",
		"`Clients`.`destinations`" => "destinations",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`Clients` ";
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
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = (getLoggedAdmin() !== false);
	$x->AllowPrintingDV = (getLoggedAdmin() !== false);
	$x->AllowCSV = (getLoggedAdmin() !== false);
	$x->RecordsPerPage = 25;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'Clients_view.php';
	$x->TableTitle = 'Clients';
	$x->TableIcon = 'resources/table_icons/ceo.png';
	$x->PrimaryKey = '`Clients`.`id`';
	$x->DefaultSortField = '2';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth = [150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Name', 'Logo', 'Endpoints', 'Jobs', 'Destinations', ];
	$x->ColFieldName = ['name', 'logo', 'endpoints', 'jobs', 'destinations', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/Clients_templateTV.html';
	$x->SelectedTemplate = 'templates/Clients_templateTVS.html';
	$x->TemplateDV = 'templates/Clients_templateDV.html';
	$x->TemplateDVP = 'templates/Clients_templateDVP.html';

	$x->ShowTableHeader = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = true;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: Clients_init
	$render = true;
	if(function_exists('Clients_init')) {
		$args = [];
		$render = Clients_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Clients_header
	$headerCode = '';
	if(function_exists('Clients_header')) {
		$args = [];
		$headerCode = Clients_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: Clients_footer
	$footerCode = '';
	if(function_exists('Clients_footer')) {
		$args = [];
		$footerCode = Clients_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
