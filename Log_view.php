<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/Log.php');
	include_once(__DIR__ . '/Log_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('Log');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'Log';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`Log`.`id`" => "id",
		"if(`Log`.`date`,date_format(`Log`.`date`,'%d-%m-%Y'),'')" => "date",
		"`Log`.`user`" => "user",
		"IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') /* Client */" => "client",
		"IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') /* Endpoint */" => "endpoint",
		"IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`) || CHAR_LENGTH(`Destinations1`.`id`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`type`, '- ', `Destinations1`.`id`), '') /* Job */" => "job",
		"`Log`.`status`" => "status",
		"`Log`.`results`" => "results",
		"`Log`.`screenshot`" => "screenshot",
		"`Log`.`notes`" => "notes",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`Log`.`id`',
		2 => '`Log`.`date`',
		3 => 3,
		4 => '`Clients1`.`name`',
		5 => '`Endpoints1`.`hostname`',
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`Log`.`id`" => "id",
		"if(`Log`.`date`,date_format(`Log`.`date`,'%d-%m-%Y'),'')" => "date",
		"`Log`.`user`" => "user",
		"IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') /* Client */" => "client",
		"IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') /* Endpoint */" => "endpoint",
		"IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`) || CHAR_LENGTH(`Destinations1`.`id`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`type`, '- ', `Destinations1`.`id`), '') /* Job */" => "job",
		"`Log`.`status`" => "status",
		"`Log`.`results`" => "results",
		"`Log`.`screenshot`" => "screenshot",
		"`Log`.`notes`" => "notes",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`Log`.`id`" => "ID",
		"`Log`.`date`" => "Date",
		"`Log`.`user`" => "User",
		"IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') /* Client */" => "Client",
		"IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') /* Endpoint */" => "Endpoint",
		"IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`) || CHAR_LENGTH(`Destinations1`.`id`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`type`, '- ', `Destinations1`.`id`), '') /* Job */" => "Job",
		"`Log`.`status`" => "Status",
		"`Log`.`results`" => "Results",
		"`Log`.`notes`" => "Notes",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`Log`.`id`" => "id",
		"if(`Log`.`date`,date_format(`Log`.`date`,'%d-%m-%Y'),'')" => "date",
		"`Log`.`user`" => "user",
		"IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') /* Client */" => "client",
		"IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') /* Endpoint */" => "endpoint",
		"IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`) || CHAR_LENGTH(`Destinations1`.`id`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`type`, '- ', `Destinations1`.`id`), '') /* Job */" => "job",
		"`Log`.`status`" => "status",
		"`Log`.`results`" => "results",
		"`Log`.`notes`" => "notes",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['client' => 'Client', 'endpoint' => 'Endpoint', 'job' => 'Job', ];

	$x->QueryFrom = "`Log` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Log`.`client` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Log`.`endpoint` LEFT JOIN `Jobs` as Jobs1 ON `Jobs1`.`id`=`Log`.`job` LEFT JOIN `Endpoints` as Endpoints2 ON `Endpoints2`.`id`=`Jobs1`.`endpoint` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs1`.`destination` ";
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
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = (getLoggedAdmin() !== false);
	$x->RecordsPerPage = 100;
	$x->QuickSearch = 0;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'Log_view.php';
	$x->TableTitle = 'Log';
	$x->TableIcon = 'resources/table_icons/application_edit.png';
	$x->PrimaryKey = '`Log`.`id`';
	$x->DefaultSortField = '`Log`.`date`';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['Date', 'User', 'Client', 'Endpoint', 'Job', 'Status', 'Results', 'Screenshot', 'Notes', ];
	$x->ColFieldName = ['date', 'user', 'client', 'endpoint', 'job', 'status', 'results', 'screenshot', 'notes', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 9, 10, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/Log_templateTV.html';
	$x->SelectedTemplate = 'templates/Log_templateTVS.html';
	$x->TemplateDV = 'templates/Log_templateDV.html';
	$x->TemplateDVP = 'templates/Log_templateDVP.html';

	$x->ShowTableHeader = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: Log_init
	$render = true;
	if(function_exists('Log_init')) {
		$args = [];
		$render = Log_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Log_header
	$headerCode = '';
	if(function_exists('Log_header')) {
		$args = [];
		$headerCode = Log_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: Log_footer
	$footerCode = '';
	if(function_exists('Log_footer')) {
		$args = [];
		$footerCode = Log_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
