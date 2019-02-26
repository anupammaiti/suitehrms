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


$module_name = 'HRMS_EmployeeInformation';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'employee_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPLOYEE_ID',
        'width' => '10%',
        'default' => true,
		'link' => true,
        'name' => 'employee_id',
      ),
      'employee_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPLOYEE_NAME',
        'width' => '10%',
        'default' => true,
        'link' => true,
        'name' => 'employee_name',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'link' => true,
        'name' => 'email',
      ),
      'job_title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JOB_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'job_title',
      ),
      'job_location' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JOB_LOCATION',
        'width' => '10%',
        'default' => true,
        'name' => 'job_location',
      ),
      'department' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DEPARTMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'department',
      ),
      'nationality' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NATIONALITY',
        'width' => '10%',
        'default' => true,
        'name' => 'nationality',
      ),
    ),
    'advanced_search' => 
    array (
      'employee_id' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPLOYEE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'employee_id',
      ),
      'employee_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPLOYEE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'employee_name',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'job_title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JOB_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'job_title',
      ),
      'job_location' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JOB_LOCATION',
        'width' => '10%',
        'default' => true,
        'name' => 'job_location',
      ),
      'department' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DEPARTMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'department',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
