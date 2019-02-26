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


$popupMeta = array (
    'moduleMain' => 'HRMS_EmployeeInformation',
    'varName' => 'HRMS_EmployeeInformation',
    'orderBy' => 'hrms_employeeinformation.name',
    'whereClauses' => array (
  'employee_name' => 'hrms_employeeinformation.employee_name',
  'job_title' => 'hrms_employeeinformation.job_title',
  'job_location' => 'hrms_employeeinformation.job_location',
  'department' => 'hrms_employeeinformation.department',
  'email' => 'hrms_employeeinformation.email',
  'employee_id' => 'hrms_employeeinformation.employee_id',
),
    'searchInputs' => array (
  4 => 'employee_name',
  5 => 'job_title',
  6 => 'job_location',
  7 => 'department',
  8 => 'email',
  9 => 'employee_id',
),
    'searchdefs' => array (
  'employee_id' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_ID',
    'width' => '10%',
    'name' => 'employee_id',
	'link' => true,
  ),
  'employee_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_NAME',
    'width' => '10%',
    'name' => 'employee_name',
    'link' => true,
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'name' => 'email',
  ),
  'job_title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_TITLE',
    'width' => '10%',
    'name' => 'job_title',
    'link' => true,
  ),
  'job_location' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_LOCATION',
    'width' => '10%',
    'name' => 'job_location',
    'link' => true,
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'name' => 'department',
  ),
),
    'listviewdefs' => array (
  'EMPLOYEE_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'EMPLOYEE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPLOYEE_NAME',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'employee_name',
  ),
  'JOB_TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_TITLE',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'job_title',
  ),
  'JOB_LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_LOCATION',
    'width' => '10%',
    'default' => true,
    'link' => true,
    'name' => 'job_location',
  ),
  'DEPARTMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => true,
    'name' => 'department',
  ),
  'NATIONALITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NATIONALITY',
    'width' => '10%',
    'default' => true,
    'name' => 'nationality',
  ),
),
);
