<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	/* Configuration */
	/*************************************/

		$pcConfig = [
			'Clients' => [
			],
			'Endpoints' => [
				'clientid' => [
					'parent-table' => 'Clients',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Endpoints <span class="hidden child-label-Endpoints child-field-caption">(Clientid)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/dns_setting.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Hostname', 3 => 'Clientid'],
					'display-field-names' => [1 => 'hostname', 3 => 'clientid'],
					'sortable-fields' => [0 => '`Endpoints`.`id`', 1 => 2, 2 => 3, 3 => '`Clients1`.`name`'],
					'records-per-page' => 10,
					'default-sort-by' => 3,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Endpoints',
					'template-printable' => 'children-Endpoints-printable',
					'query' => "SELECT `Endpoints`.`id` as 'id', `Endpoints`.`hostname` as 'hostname', `Endpoints`.`notes` as 'notes', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'clientid' FROM `Endpoints` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Endpoints`.`clientid` "
				],
			],
			'Jobs' => [
				'client' => [
					'parent-table' => 'Clients',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Jobs <span class="hidden child-label-Jobs child-field-caption">(Client)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/cog.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Client', 2 => 'Software', 3 => 'Endpoint', 4 => 'Method', 5 => 'Destination'],
					'display-field-names' => [1 => 'client', 2 => 'software', 3 => 'endpoint', 4 => 'method', 5 => 'destination'],
					'sortable-fields' => [0 => '`Jobs`.`id`', 1 => '`Clients1`.`name`', 2 => '`Software1`.`name`', 3 => '`Endpoints1`.`hostname`', 4 => 5, 5 => 6],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Jobs',
					'template-printable' => 'children-Jobs-printable',
					'query' => "SELECT `Jobs`.`id` as 'id', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') as 'software', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Methods1`.`name`) || CHAR_LENGTH(`Software2`.`name`), CONCAT_WS('',   `Methods1`.`name`, ' - ', `Software2`.`name`), '') as 'method', IF(    CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'destination' FROM `Jobs` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Jobs`.`client` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Jobs`.`software` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Jobs`.`endpoint` LEFT JOIN `Methods` as Methods1 ON `Methods1`.`id`=`Jobs`.`method` LEFT JOIN `Software` as Software2 ON `Software2`.`id`=`Methods1`.`software` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs`.`destination` "
				],
				'software' => [
					'parent-table' => 'Software',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Jobs <span class="hidden child-label-Jobs child-field-caption">(Software)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/cog.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Client', 2 => 'Software', 3 => 'Endpoint', 4 => 'Method', 5 => 'Destination'],
					'display-field-names' => [1 => 'client', 2 => 'software', 3 => 'endpoint', 4 => 'method', 5 => 'destination'],
					'sortable-fields' => [0 => '`Jobs`.`id`', 1 => '`Clients1`.`name`', 2 => '`Software1`.`name`', 3 => '`Endpoints1`.`hostname`', 4 => 5, 5 => 6],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Jobs',
					'template-printable' => 'children-Jobs-printable',
					'query' => "SELECT `Jobs`.`id` as 'id', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') as 'software', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Methods1`.`name`) || CHAR_LENGTH(`Software2`.`name`), CONCAT_WS('',   `Methods1`.`name`, ' - ', `Software2`.`name`), '') as 'method', IF(    CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'destination' FROM `Jobs` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Jobs`.`client` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Jobs`.`software` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Jobs`.`endpoint` LEFT JOIN `Methods` as Methods1 ON `Methods1`.`id`=`Jobs`.`method` LEFT JOIN `Software` as Software2 ON `Software2`.`id`=`Methods1`.`software` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs`.`destination` "
				],
				'endpoint' => [
					'parent-table' => 'Endpoints',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Jobs <span class="hidden child-label-Jobs child-field-caption">(Endpoint)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/cog.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Client', 2 => 'Software', 3 => 'Endpoint', 4 => 'Method', 5 => 'Destination'],
					'display-field-names' => [1 => 'client', 2 => 'software', 3 => 'endpoint', 4 => 'method', 5 => 'destination'],
					'sortable-fields' => [0 => '`Jobs`.`id`', 1 => '`Clients1`.`name`', 2 => '`Software1`.`name`', 3 => '`Endpoints1`.`hostname`', 4 => 5, 5 => 6],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Jobs',
					'template-printable' => 'children-Jobs-printable',
					'query' => "SELECT `Jobs`.`id` as 'id', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') as 'software', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Methods1`.`name`) || CHAR_LENGTH(`Software2`.`name`), CONCAT_WS('',   `Methods1`.`name`, ' - ', `Software2`.`name`), '') as 'method', IF(    CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'destination' FROM `Jobs` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Jobs`.`client` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Jobs`.`software` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Jobs`.`endpoint` LEFT JOIN `Methods` as Methods1 ON `Methods1`.`id`=`Jobs`.`method` LEFT JOIN `Software` as Software2 ON `Software2`.`id`=`Methods1`.`software` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs`.`destination` "
				],
				'method' => [
					'parent-table' => 'Methods',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Jobs <span class="hidden child-label-Jobs child-field-caption">(Method)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/cog.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Client', 2 => 'Software', 3 => 'Endpoint', 4 => 'Method', 5 => 'Destination'],
					'display-field-names' => [1 => 'client', 2 => 'software', 3 => 'endpoint', 4 => 'method', 5 => 'destination'],
					'sortable-fields' => [0 => '`Jobs`.`id`', 1 => '`Clients1`.`name`', 2 => '`Software1`.`name`', 3 => '`Endpoints1`.`hostname`', 4 => 5, 5 => 6],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Jobs',
					'template-printable' => 'children-Jobs-printable',
					'query' => "SELECT `Jobs`.`id` as 'id', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') as 'software', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Methods1`.`name`) || CHAR_LENGTH(`Software2`.`name`), CONCAT_WS('',   `Methods1`.`name`, ' - ', `Software2`.`name`), '') as 'method', IF(    CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'destination' FROM `Jobs` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Jobs`.`client` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Jobs`.`software` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Jobs`.`endpoint` LEFT JOIN `Methods` as Methods1 ON `Methods1`.`id`=`Jobs`.`method` LEFT JOIN `Software` as Software2 ON `Software2`.`id`=`Methods1`.`software` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs`.`destination` "
				],
				'destination' => [
					'parent-table' => 'Destinations',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Jobs <span class="hidden child-label-Jobs child-field-caption">(Destination)</span>',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/cog.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Client', 2 => 'Software', 3 => 'Endpoint', 4 => 'Method', 5 => 'Destination'],
					'display-field-names' => [1 => 'client', 2 => 'software', 3 => 'endpoint', 4 => 'method', 5 => 'destination'],
					'sortable-fields' => [0 => '`Jobs`.`id`', 1 => '`Clients1`.`name`', 2 => '`Software1`.`name`', 3 => '`Endpoints1`.`hostname`', 4 => 5, 5 => 6],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Jobs',
					'template-printable' => 'children-Jobs-printable',
					'query' => "SELECT `Jobs`.`id` as 'id', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') as 'software', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Methods1`.`name`) || CHAR_LENGTH(`Software2`.`name`), CONCAT_WS('',   `Methods1`.`name`, ' - ', `Software2`.`name`), '') as 'method', IF(    CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'destination' FROM `Jobs` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Jobs`.`client` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Jobs`.`software` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Jobs`.`endpoint` LEFT JOIN `Methods` as Methods1 ON `Methods1`.`id`=`Jobs`.`method` LEFT JOIN `Software` as Software2 ON `Software2`.`id`=`Methods1`.`software` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs`.`destination` "
				],
			],
			'Log' => [
				'client' => [
					'parent-table' => 'Clients',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Log <span class="hidden child-label-Log child-field-caption">(Client)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/application_edit.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Date', 2 => 'User', 3 => 'Client', 4 => 'Endpoint', 5 => 'Job', 6 => 'Status', 7 => 'Results', 8 => 'Screenshot', 9 => 'Notes'],
					'display-field-names' => [1 => 'date', 2 => 'user', 3 => 'client', 4 => 'endpoint', 5 => 'job', 6 => 'status', 7 => 'results', 8 => 'screenshot', 9 => 'notes'],
					'sortable-fields' => [0 => '`Log`.`id`', 1 => '`Log`.`date`', 2 => 3, 3 => '`Clients1`.`name`', 4 => '`Endpoints1`.`hostname`', 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10],
					'records-per-page' => 10,
					'default-sort-by' => 1,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Log',
					'template-printable' => 'children-Log-printable',
					'query' => "SELECT `Log`.`id` as 'id', if(`Log`.`date`,date_format(`Log`.`date`,'%d-%m-%Y'),'') as 'date', `Log`.`user` as 'user', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'job', `Log`.`status` as 'status', `Log`.`results` as 'results', `Log`.`screenshot` as 'screenshot', `Log`.`notes` as 'notes' FROM `Log` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Log`.`client` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Log`.`endpoint` LEFT JOIN `Jobs` as Jobs1 ON `Jobs1`.`id`=`Log`.`job` LEFT JOIN `Endpoints` as Endpoints2 ON `Endpoints2`.`id`=`Jobs1`.`endpoint` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs1`.`destination` "
				],
				'endpoint' => [
					'parent-table' => 'Endpoints',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Log <span class="hidden child-label-Log child-field-caption">(Endpoint)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/application_edit.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Date', 2 => 'User', 3 => 'Client', 4 => 'Endpoint', 5 => 'Job', 6 => 'Status', 7 => 'Results', 8 => 'Screenshot', 9 => 'Notes'],
					'display-field-names' => [1 => 'date', 2 => 'user', 3 => 'client', 4 => 'endpoint', 5 => 'job', 6 => 'status', 7 => 'results', 8 => 'screenshot', 9 => 'notes'],
					'sortable-fields' => [0 => '`Log`.`id`', 1 => '`Log`.`date`', 2 => 3, 3 => '`Clients1`.`name`', 4 => '`Endpoints1`.`hostname`', 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10],
					'records-per-page' => 10,
					'default-sort-by' => 1,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Log',
					'template-printable' => 'children-Log-printable',
					'query' => "SELECT `Log`.`id` as 'id', if(`Log`.`date`,date_format(`Log`.`date`,'%d-%m-%Y'),'') as 'date', `Log`.`user` as 'user', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'job', `Log`.`status` as 'status', `Log`.`results` as 'results', `Log`.`screenshot` as 'screenshot', `Log`.`notes` as 'notes' FROM `Log` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Log`.`client` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Log`.`endpoint` LEFT JOIN `Jobs` as Jobs1 ON `Jobs1`.`id`=`Log`.`job` LEFT JOIN `Endpoints` as Endpoints2 ON `Endpoints2`.`id`=`Jobs1`.`endpoint` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs1`.`destination` "
				],
				'job' => [
					'parent-table' => 'Jobs',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Log <span class="hidden child-label-Log child-field-caption">(Job)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/application_edit.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Date', 2 => 'User', 3 => 'Client', 4 => 'Endpoint', 5 => 'Job', 6 => 'Status', 7 => 'Results', 8 => 'Screenshot', 9 => 'Notes'],
					'display-field-names' => [1 => 'date', 2 => 'user', 3 => 'client', 4 => 'endpoint', 5 => 'job', 6 => 'status', 7 => 'results', 8 => 'screenshot', 9 => 'notes'],
					'sortable-fields' => [0 => '`Log`.`id`', 1 => '`Log`.`date`', 2 => 3, 3 => '`Clients1`.`name`', 4 => '`Endpoints1`.`hostname`', 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10],
					'records-per-page' => 10,
					'default-sort-by' => 1,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Log',
					'template-printable' => 'children-Log-printable',
					'query' => "SELECT `Log`.`id` as 'id', if(`Log`.`date`,date_format(`Log`.`date`,'%d-%m-%Y'),'') as 'date', `Log`.`user` as 'user', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', IF(    CHAR_LENGTH(`Endpoints1`.`hostname`), CONCAT_WS('',   `Endpoints1`.`hostname`), '') as 'endpoint', IF(    CHAR_LENGTH(`Endpoints2`.`hostname`) || CHAR_LENGTH(`Destinations1`.`hostname`) || CHAR_LENGTH(`Destinations1`.`type`), CONCAT_WS('',   `Endpoints2`.`hostname`, `Destinations1`.`hostname`, '- ', `Destinations1`.`type`), '') as 'job', `Log`.`status` as 'status', `Log`.`results` as 'results', `Log`.`screenshot` as 'screenshot', `Log`.`notes` as 'notes' FROM `Log` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Log`.`client` LEFT JOIN `Endpoints` as Endpoints1 ON `Endpoints1`.`id`=`Log`.`endpoint` LEFT JOIN `Jobs` as Jobs1 ON `Jobs1`.`id`=`Log`.`job` LEFT JOIN `Endpoints` as Endpoints2 ON `Endpoints2`.`id`=`Jobs1`.`endpoint` LEFT JOIN `Destinations` as Destinations1 ON `Destinations1`.`id`=`Jobs1`.`destination` "
				],
			],
			'Methods' => [
				'software' => [
					'parent-table' => 'Software',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Methods <span class="hidden child-label-Methods child-field-caption">(Software)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/align_left.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Name', 2 => 'Software'],
					'display-field-names' => [1 => 'name', 2 => 'software'],
					'sortable-fields' => [0 => '`Methods`.`id`', 1 => 2, 2 => '`Software1`.`name`', 3 => 4],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Methods',
					'template-printable' => 'children-Methods-printable',
					'query' => "SELECT `Methods`.`id` as 'id', `Methods`.`name` as 'name', IF(    CHAR_LENGTH(`Software1`.`name`), CONCAT_WS('',   `Software1`.`name`), '') as 'software', `Methods`.`procedure` as 'procedure' FROM `Methods` LEFT JOIN `Software` as Software1 ON `Software1`.`id`=`Methods`.`software` "
				],
			],
			'Software' => [
			],
			'Destinations' => [
				'client' => [
					'parent-table' => 'Clients',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Destinations <span class="hidden child-label-Destinations child-field-caption">(Client)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/arrow_branch.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Hostname', 2 => 'Type', 3 => 'Client', 4 => 'Capacity'],
					'display-field-names' => [1 => 'hostname', 2 => 'type', 3 => 'client', 4 => 'space'],
					'sortable-fields' => [0 => '`Destinations`.`id`', 1 => 2, 2 => 3, 3 => '`Clients1`.`name`', 4 => 5],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-Destinations',
					'template-printable' => 'children-Destinations-printable',
					'query' => "SELECT `Destinations`.`id` as 'id', `Destinations`.`hostname` as 'hostname', `Destinations`.`type` as 'type', IF(    CHAR_LENGTH(`Clients1`.`name`), CONCAT_WS('',   `Clients1`.`name`), '') as 'client', `Destinations`.`space` as 'space' FROM `Destinations` LEFT JOIN `Clients` as Clients1 ON `Clients1`.`id`=`Destinations`.`client` "
				],
			],
		];

	/*************************************/
	/* End of configuration */


	include_once(__DIR__ . '/lib.php');
	@header('Content-Type: text/html; charset=' . datalist_db_encoding);

	handle_maintenance();

	/**
	* dynamic configuration based on current user's permissions
	* $userPCConfig array is populated only with parent tables where the user has access to
	* at least one child table
	*/
	$userPCConfig = [];
	foreach($pcConfig as $pcChildTable => $ChildrenLookups) {
		$permChild = getTablePermissions($pcChildTable);
		if(!$permChild['view']) continue;

		foreach($ChildrenLookups as $ChildLookupField => $ChildConfig) {
			$permParent = getTablePermissions($ChildConfig['parent-table']);
			if(!$permParent['view']) continue;

			$userPCConfig[$pcChildTable][$ChildLookupField] = $pcConfig[$pcChildTable][$ChildLookupField];
			// show add new only if configured above AND the user has insert permission
			$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = ($permChild['insert'] && $pcConfig[$pcChildTable][$ChildLookupField]['display-add-new']);
		}
	}

	/* Receive, UTF-convert, and validate parameters */
	$ParentTable = Request::val('ParentTable'); // needed only with operation=show-children, will be validated in the processing code
	$ChildTable = Request::val('ChildTable');
		if(!in_array($ChildTable, array_keys($userPCConfig))) {
			/* defaults to first child table in config array if not provided */
			$ChildTable = current(array_keys($userPCConfig));
		}
		if(!$ChildTable) { die('<!-- No tables accessible to current user -->'); }
	$SelectedID = strip_tags(Request::val('SelectedID'));
	$ChildLookupField = Request::val('ChildLookupField');
		if(!in_array($ChildLookupField, array_keys($userPCConfig[$ChildTable]))) {
			/* defaults to first lookup in current child config array if not provided */
			$ChildLookupField = current(array_keys($userPCConfig[$ChildTable]));
		}

	if(function_exists('child_records_config')) {
		// $userPCConfig is passed by reference
		child_records_config($ChildTable, $ChildLookupField, $userPCConfig);
	}

	$currentConfig = $userPCConfig[$ChildTable][$ChildLookupField];
	if(empty($currentConfig))
		die('<!-- No tables accessible to current user -->');

	$Page = intval(Request::val('Page'));
		if($Page < 1) $Page = 1;
	$SortBy = (Request::val('SortBy') != '' ? abs(intval(Request::val('SortBy'))) : false);
		if(!in_array($SortBy, array_keys($currentConfig['sortable-fields']), true))
			$SortBy = $currentConfig['default-sort-by'];
	$SortDirection = strtolower(Request::val('SortDirection'));
		if(!in_array($SortDirection, ['asc', 'desc']))
			$SortDirection = $currentConfig['default-sort-direction'];
	$Operation = strtolower(Request::val('Operation'));
		if(!in_array($Operation, ['get-records', 'show-children', 'get-records-printable', 'show-children-printable']))
			$Operation = 'get-records';

	/* process requested operation */
	switch($Operation) {
		/************************************************/
		case 'show-children':
			/* populate HTML and JS content with children tabs */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups) {
				foreach($childLookups as $ChildLookupField => $childConfig) {
					if($childConfig['parent-table'] != $ParentTable) continue;

					$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\">" : '');

					$tabLabels .= "<li class=\"child-tab-label child-table-{$ChildTable} lookup-field-{$ChildLookupField} " . ($tabLabels ? '' : 'active') . "\">" .
							"<a href=\"#panel_{$ChildTable}-{$ChildLookupField}\" id=\"tab_{$ChildTable}-{$ChildLookupField}\" data-toggle=\"tab\">" .
								$TableIcon . $childConfig['tab-label'] .
								"<span class=\"badge child-count child-count-{$ChildTable}-{$ChildLookupField}\"></span>" .
							"</a>" .
						"</li>\n\t\t\t\t";

					$tabPanels .= "<div id=\"panel_{$ChildTable}-{$ChildLookupField}\" class=\"tab-pane" . ($tabPanels ? '' : ' active') . "\">" .
							"<i class=\"glyphicon glyphicon-refresh loop-rotate\"></i> " .
							"{$Translation['Loading ...']}" .
						"</div>\n\t\t\t\t";

					$tabLoaders .= "post('parent-children.php', " . json_encode([
							'ChildTable' => $ChildTable,
							'ChildLookupField' => $ChildLookupField,
							'SelectedID' => $SelectedID,
							'Page' => 1,
							'SortBy' => '',
							'SortDirection' => '',
							'Operation' => 'get-records'
						]) . ", 'panel_{$ChildTable}-{$ChildLookupField}');\n\t\t\t\t";
				}
			}

			if(!$tabLabels) { die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs">
				<ul class="nav nav-tabs">
					<?php echo $tabLabels; ?>
				</ul>
				<span id="pc-loading"></span>
			</div>
			<div class="tab-content"><?php echo $tabPanels; ?></div>

			<script>
				$j(function() {
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded) {
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>

					/* show child field caption on tab title in case the same child table appears more than once */
					$j('.child-field-caption').each(function() {
						var clss = $j(this).attr('class').split(/\s+/).reduce(function(rc, cc) {
							return (cc.match(/child-label-.*/) ? '.' + cc : rc);
						}, '');

						// if class occurs more than once, remove .hidden
						if($j(clss).length > 1) $j(clss).removeClass('hidden');
					})
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'show-children-printable':
			/* populate HTML and JS content with children buttons */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups) {
				foreach($childLookups as $ChildLookupField => $childConfig) {
					if($childConfig['parent-table'] != $ParentTable) continue;

					$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\">" : '');

					$tabLabels .= "<button type=\"button\" class=\"btn btn-default child-tab-print-toggler\" data-target=\"#panel_{$ChildTable}-{$ChildLookupField}\" id=\"tab_{$ChildTable}-{$ChildLookupField}\" data-toggle=\"collapse\">" .
							"{$TableIcon} {$childConfig['tab-label']}" .
							"<span class=\"badge child-count child-count-{$ChildTable}-{$ChildLookupField}\"></span>" .
						"</button>\n\t\t\t\t\t";

					$tabPanels .= "<div id=\"panel_{$ChildTable}-{$ChildLookupField}\" class=\"collapse child-panel-print\">" .
							"<i class=\"glyphicon glyphicon-refresh loop-rotate\"></i> " .
							$Translation['Loading ...'] .
						"</div>\n\t\t\t\t";

					$tabLoaders .= "post('parent-children.php', " . json_encode([
							'ChildTable' => $ChildTable,
							'ChildLookupField' => $ChildLookupField,
							'SelectedID' => $SelectedID,
							'Page' => 1,
							'SortBy' => '',
							'SortDirection' => '',
							'Operation' => 'get-records-printable'
						]) . ", 'panel_{$ChildTable}-{$ChildLookupField}');\n\t\t\t\t";
				}
			}

			if(!$tabLabels) { die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs" class="hidden-print">
				<div class="btn-group btn-group-lg">
					<?php echo $tabLabels; ?>
				</div>
				<span id="pc-loading"></span>
			</div>
			<div class="vspacer-lg"><?php echo $tabPanels; ?></div>

			<script>
				$j(function() {
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded) {
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'get-records-printable':
		default: /* default is 'get-records' */

			if($Operation == 'get-records-printable') {
				$currentConfig['records-per-page'] = 2000;
			}

			// build the user permissions limiter
			$permissionsWhere = $permissionsJoin = '';
			$permChild = getTablePermissions($ChildTable);
			if($permChild['view'] == 1) { // user can view only his own records
				$permissionsWhere = "`$ChildTable`.`{$currentConfig['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
			} elseif($permChild['view'] == 2) { // user can view only his group's records
				$permissionsWhere = "`$ChildTable`.`{$currentConfig['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
			} elseif($permChild['view'] == 3) { // user can view all records
				/* that's the only case remaining ... no need to modify the query in this case */
			}
			$permissionsJoin = ($permissionsWhere ? ", `membership_userrecords`" : '');

			// build the count query
			$forcedWhere = $currentConfig['forced-where'];
			$query = 
				preg_replace('/^select .* from /i', 'SELECT count(1) FROM ', $currentConfig['query']) .
				$permissionsJoin . " WHERE " .
				($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
				($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
				"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'";
			$totalMatches = sqlValue($query);

			// make sure $Page is <= max pages
			$maxPage = ceil($totalMatches / $currentConfig['records-per-page']);
			if($Page > $maxPage) { $Page = $maxPage; }

			// initiate output data array
			$data = [
				'config' => $currentConfig,
				'parameters' => [
					'ChildTable' => $ChildTable,
					'ChildLookupField' => $ChildLookupField,
					'SelectedID' => $SelectedID,
					'Page' => $Page,
					'SortBy' => $SortBy,
					'SortDirection' => $SortDirection,
					'Operation' => $Operation,
				],
				'records' => [],
				'totalMatches' => $totalMatches
			];

			// build the data query
			if($totalMatches) { // if we have at least one record, proceed with fetching data
				$startRecord = $currentConfig['records-per-page'] * ($Page - 1);
				$data['query'] = 
					$currentConfig['query'] .
					$permissionsJoin . " WHERE " .
					($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
					($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
					"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'" . 
					($SortBy !== false && $currentConfig['sortable-fields'][$SortBy] ? " ORDER BY {$currentConfig['sortable-fields'][$SortBy]} $SortDirection" : '') .
					" LIMIT $startRecord, {$currentConfig['records-per-page']}";
				$res = sql($data['query'], $eo);
				while($row = db_fetch_row($res)) {
					$data['records'][$row[$currentConfig['child-primary-key-index']]] = $row;
				}
			} else { // if no matching records
				$startRecord = 0;
			}

			if($Operation == 'get-records-printable') {
				$response = loadView($currentConfig['template-printable'], $data);
			} else {
				$response = loadView($currentConfig['template'], $data);
			}

			// change name space to ensure uniqueness
			$uniqueNameSpace = $ChildTable.ucfirst($ChildLookupField).'GetRecords';
			echo str_replace("{$ChildTable}GetChildrenRecordsList", $uniqueNameSpace, $response);
		/************************************************/
	}
