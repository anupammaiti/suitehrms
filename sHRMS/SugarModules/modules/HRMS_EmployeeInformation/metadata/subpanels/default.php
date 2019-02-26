<?php
/**
* The HRMS solution is group of multiple modules & dashboard reports in SugarCRM and SuiteCRM.
*
* NOTICE OF LICENSE
* 
* Each copy of the software must be used for only one production website, it may be used on additional
* test servers. You are not permitted to make copies of the software without first purchasing the
* appropriate additional licenses. This license does not grant any reseller privileges.
* 
* @author    Shahab
* @copyright 2007-2017 ShahabFK Enterprises
* @license   Commercial Module License
*/


$module_name='HRMS_EmployeeInformation';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'HRMS_EmployeeInformation',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'employee_id' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EMPLOYEE_ID',
      'width' => '10%',
      'default' => true,
    ),
    'employee_name' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EMPLOYEE_NAME',
      'width' => '10%',
      'default' => true,
    ),
    'email' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL',
      'width' => '10%',
      'default' => true,
    ),
    'job_title' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_JOB_TITLE',
      'width' => '10%',
      'default' => true,
    ),
    'job_position' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_JOB_POSITION',
      'width' => '10%',
      'default' => true,
    ),
    'job_location' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_JOB_LOCATION',
      'width' => '10%',
      'default' => true,
    ),
    'nationality' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_NATIONALITY',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'HRMS_EmployeeInformation',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'HRMS_EmployeeInformation',
      'width' => '5%',
      'default' => true,
    ),
  ),
);